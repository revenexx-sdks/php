<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class PaymentsProviders extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Answers the SVG document for a catalog provider code (a shipped
     * assets/logos/{code}.svg, otherwise a generated monogram tile), with
     * content-type image/svg+xml and a one-day cache. It is the one route in this
     * app that needs no tenant identity: the logos are bundled with the app
     * rather than owned by anyone, so nothing here is tenant data and no key or
     * tenant header is required to fetch one — which is what lets a storefront
     * or a Cockpit screen point an <img> straight at it. Called directly on the
     * app domain
     * (https://revenexx-payments.apps.revenexx.io/payments/logos/stripe) the
     * response carries its real content-type; through the gateway the body is
     * passed through but labelled application/json, so use the app domain for
     * <img> sources.
     *
     * @param string $slug
     * @throws RevenexxException
     * @return array
     */
    public function paymentsLogosGet(string $slug): array
    {
        $apiPath = str_replace(
            ['{slug}'],
            [$slug],
            '/v1/payments/logos/{slug}'
        );

        $apiParams = [];
        $apiParams['slug'] = $slug;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * PSP secrets are write-only: 'credentials' and 'webhook_secret' are accepted
     * on create/update, stored for the drivers, and never returned by any route
     * — the responses carry the public columns only (id, provider, name,
     * enabled, test_mode, options, timestamps). To rotate a secret, write the new
     * value; there is no way to read the current one back.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $provider
     * @param ?bool $enabled
     * @param ?bool $testMode
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $provider = null, ?bool $enabled = null, ?bool $testMode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Activates one PSP account of this tenant. The `provider` code is not free
     * text: it has to be one the catalog carries, and anything else is refused
     * with 400 and a message listing the codes that are — so GET
     * /payments/providers/catalog is the call that comes first, both for the code
     * itself and for the credential field names this provider expects. PSP
     * secrets are write-only: 'credentials' and 'webhook_secret' are accepted on
     * create/update, stored for the drivers, and never returned by any route —
     * the responses carry the public columns only (id, provider, name, enabled,
     * test_mode, options, timestamps). To rotate a secret, write the new value;
     * there is no way to read the current one back.
     *
     * @param string $provider
     * @param ?array $credentials
     * @param ?bool $enabled
     * @param ?string $name
     * @param ?array $options
     * @param ?bool $testMode
     * @param ?string $webhookSecret
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersCreate(string $provider, ?array $credentials = null, ?bool $enabled = null, ?string $name = null, ?array $options = null, ?bool $testMode = null, ?string $webhookSecret = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers'
        );

        $apiParams = [];
        $apiParams['provider'] = $provider;
        $apiParams['credentials'] = $credentials;
        $apiParams['enabled'] = $enabled;
        $apiParams['name'] = $name;
        $apiParams['options'] = $options;
        $apiParams['test_mode'] = $testMode;
        $apiParams['webhook_secret'] = $webhookSecret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The closed set of `provider` codes POST /payments/providers accepts —
     * anything else is refused with 400 and a message listing these. It runs to
     * roughly thirty connectors, and each entry says which `driver` moves the
     * money for it: nearly all of them go through the one connector layer this
     * app embeds, hyperswitch-prism, with the built-in mock PSP alongside for
     * demos and E2E. Read it to build the picker on an "add provider" form and to
     * know what a credentials form has to ask for: `auth_type` is the scheme the
     * connector authenticates with and `credential_fields` are the KEY NAMES to
     * put inside `credentials` (never values, which come from the PSP's own
     * dashboard). It says nothing about this tenant: no credential, no enabled
     * flag, no test mode — that is GET /payments/providers. Watch `available`:
     * a code with `false` has no driver in this deployment yet, so it can be
     * created and stored and every transaction through it fails with
     * `provider_unavailable`. The list is app-shipped and identical for everyone,
     * so it is safe to cache hard and it changes only with a release of this app.
     *
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersCatalog(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/providers/catalog'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Removes the PSP account row and its stored secrets, once nothing depends on
     * it any more. The three tables of this app carry no foreign keys at all: a
     * payment names its method by `method_code` and its acquirer by `provider`,
     * both plain text, because a payment records what happened and has to survive
     * the configuration it was made with. So the database will not stop this —
     * whatever the ledger still names, it goes on naming. So the database will
     * not stop this and the count is taken HERE, exactly as DELETE
     * /payments/methods/{id} takes it, and answered as one 409 carrying both
     * numbers. Counted first: every payment still in a status a transition starts
     * from — created, requires_action, authorized or captured — because
     * capture, cancel and refund all resolve the provider BY CODE and would
     * answer 422 `provider_not_configured` with the row gone, leaving an
     * authorization that can neither be collected nor released and a captured
     * payment that can no longer be refunded here at all. Counted second: every
     * payment method naming this provider, because POST
     * /payments/methods/eligible does not check providers, so a checkout would go
     * on offering a method whose next POST /payments fails at authorization
     * unless the tenant's `fallback_provider` names one that is still configured.
     * What is deliberately NOT counted is a settled payment — failed, cancelled
     * or refunded: no transition starts there, so nothing will ask this provider
     * about it again, and a `provider` code is closed catalog data that goes on
     * meaning Stripe or PayPal with no configuration behind it. The refusal names
     * `enabled: false` because that is usually what was meant: a disabled
     * provider stops taking NEW payments exactly as a deleted one does, and every
     * transition on the payments it already holds keeps working, since only the
     * create path asks whether it is enabled.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * PSP secrets are write-only: 'credentials' and 'webhook_secret' are accepted
     * on create/update, stored for the drivers, and never returned by any route
     * — the responses carry the public columns only (id, provider, name,
     * enabled, test_mode, options, timestamps). To rotate a secret, write the new
     * value; there is no way to read the current one back.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A partial write: omitted fields keep their value. Three things are changed
     * here in practice — the `credentials` (and `webhook_secret`) when a key is
     * rotated, `test_mode` when an account moves from the PSP's sandbox to live,
     * and `enabled` when it is switched on or taken out of service. PSP secrets
     * are write-only: 'credentials' and 'webhook_secret' are accepted on
     * create/update, stored for the drivers, and never returned by any route —
     * the responses carry the public columns only (id, provider, name, enabled,
     * test_mode, options, timestamps). To rotate a secret, write the new value;
     * there is no way to read the current one back. One field is not like the
     * others: `provider` is the CODE every payment and every method resolves this
     * PSP by, so writing a different one is the delete through another door and
     * is refused with the same 409 while anything still names the current code.
     * Switching acquirer is a second configuration plus `enabled: false` on this
     * one, never a rename.
     *
     * @param string $id
     * @param ?array $credentials
     * @param ?bool $enabled
     * @param ?string $name
     * @param ?array $options
     * @param ?string $provider
     * @param ?bool $testMode
     * @param ?string $webhookSecret
     * @throws RevenexxException
     * @return array
     */
    public function paymentsProvidersUpdate(string $id, ?array $credentials = null, ?bool $enabled = null, ?string $name = null, ?array $options = null, ?string $provider = null, ?bool $testMode = null, ?string $webhookSecret = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/providers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['credentials'] = $credentials;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['options'] = $options;

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
        }

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }
        $apiParams['webhook_secret'] = $webhookSecret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}