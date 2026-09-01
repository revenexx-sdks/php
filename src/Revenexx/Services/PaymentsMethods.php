<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentFeeType;

class PaymentsMethods extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every method this tenant has configured, enabled or not — what the
     * Cockpit's Payment methods screen shows and how an integration finds out
     * which codes exist. It answers CONFIGURATION, never an offer: nothing here
     * is evaluated against a buyer, so a method restricted to Germany, one whose
     * order-value bounds exclude this basket and one whose PSP was never set up
     * all come back the same way. The call a checkout makes is POST
     * /payments/methods/eligible. Rows come back in whatever order the database
     * returns them, so a storefront-shaped list needs `?order=position.asc` —
     * `position` is the merchant's intended sequence and nothing sorts by it here
     * on its own.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $code
     * @param ?PaymentMethodKind $kind
     * @param ?bool $enabled
     * @param ?string $provider
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $code = null, ?PaymentMethodKind $kind = null, ?bool $enabled = null, ?string $provider = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($provider)) {
            $apiParams['provider'] = $provider;
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
     * Adds a line a checkout can offer. A create cannot omit `code` and `name`;
     * every other column is optional or defaulted by the database. Two rows of
     * this tenant may not share `code` — that is the 409. Two defaults are
     * worth knowing before the first call: `enabled` is false, so a new method
     * reaches no checkout until it is switched on, and `kind` is 'self_managed'
     * — a card or wallet method needs `kind: "psp"` plus a `provider` the
     * catalog carries, or it falls back to the tenant's `default_provider` at
     * payment time and fails there if none is set. The `code` is the value every
     * payment, every checkout and every ERP will name this method by from now on,
     * and once a single payment has been made under it a rename is refused with
     * 409: choose it once.
     *
     * @param string $code
     * @param string $name
     * @param ?array $countries
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?float $feeAmount
     * @param ?string $feeCurrency
     * @param ?PaymentFeeType $feeType
     * @param ?PaymentMethodKind $kind
     * @param ?array $labels
     * @param ?float $maxOrderValue
     * @param ?array $metadata
     * @param ?float $minOrderValue
     * @param ?int $position
     * @param ?string $provider
     * @param ?string $providerMethod
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsCreate(string $code, string $name, ?array $countries = null, ?string $description = null, ?bool $enabled = null, ?float $feeAmount = null, ?string $feeCurrency = null, ?PaymentFeeType $feeType = null, ?PaymentMethodKind $kind = null, ?array $labels = null, ?float $maxOrderValue = null, ?array $metadata = null, ?float $minOrderValue = null, ?int $position = null, ?string $provider = null, ?string $providerMethod = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['countries'] = $countries;
        $apiParams['description'] = $description;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($feeAmount)) {
            $apiParams['fee_amount'] = $feeAmount;
        }

        if (!is_null($feeCurrency)) {
            $apiParams['fee_currency'] = $feeCurrency;
        }

        if (!is_null($feeType)) {
            $apiParams['fee_type'] = $feeType;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['labels'] = $labels;
        $apiParams['max_order_value'] = $maxOrderValue;
        $apiParams['metadata'] = $metadata;
        $apiParams['min_order_value'] = $minOrderValue;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['provider'] = $provider;
        $apiParams['provider_method'] = $providerMethod;

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
     * Writes the four methods a shop starts with — invoice and prepayment as
     * self-managed, card and PayPal routed at the mock PSP so a fresh install can
     * complete a checkout end to end — together with the four provider rows
     * behind them: the built-in mock plus Stripe, PayPal and Novalnet, the three
     * connectors this app opens outbound. The app already runs this for itself
     * when it is installed (it listens on app.installed), so calling the route is
     * for the second time and after: a method someone deleted, or a row a later
     * release added that an existing install never got. Stripe, PayPal and
     * Novalnet arrive disabled, in test mode and without credentials — the
     * operator fills those in — while the mock arrives enabled, because it
     * moves no money. Re-running is safe by design: it never duplicates a row and
     * never overwrites an existing one, so nothing an operator has set can be
     * undone by calling it again. Only genuinely missing option keys (a logo
     * added after the first install) are filled, and those rows are reported as
     * "updated" rather than created.
     *
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods/defaults'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The checkout's question — "what can THIS buyer pay with?" — answered
     * server-side before any PSP is involved, so the storefront never renders a
     * method the create would then refuse with 422. It evaluates the buyer
     * context against every configured method: disabled, a country outside
     * `countries`, an amount outside `min_order_value`/`max_order_value`.
     * Restriction dimensions are ANDed and entries within one are ORed, and an
     * empty dimension means unrestricted. Eligible methods come back sorted by
     * `position` with their fee already computed for this amount; everything else
     * lands in `excluded` with the reason in words, which is what makes a support
     * question answerable. It reads only — nothing is written and no provider
     * is called. Two things it does NOT check: whether the method's PSP is
     * configured and enabled (a method whose provider is switched off is still
     * offered here and fails at POST /payments — a provider a method names can
     * no longer be deleted, which closes the other half of the same gap), and
     * anything about the buyer beyond country and amount. A context that matches
     * nothing is 200 with an empty `methods` list, never 404.
     *
     * @param ?float $amount
     * @param ?string $country
     * @param ?string $currency
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsEligible(?float $amount = null, ?string $country = null, ?string $currency = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/payments/methods/eligible'
        );

        $apiParams = [];
        $apiParams['amount'] = $amount;
        $apiParams['country'] = $country;
        $apiParams['currency'] = $currency;

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
     * payments.method_code is a CODE, not a foreign key: a payment records what
     * happened and has to survive the configuration it was made with. The cost of
     * that looseness is that deleting a method turns every payment made with it
     * into a row naming something that no longer exists. So the count is taken
     * HERE and answered as 409 with the number, rather than left to whoever is
     * about to click delete — a client that pre-counts asks a second question
     * whose answer disagrees the moment a payment lands between the two calls.
     * Disabling the method (enabled: false) is what an operator usually meant and
     * stays available.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
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
     * One configuration, every column, addressed by its row id — the edit
     * form's read. It is addressed by ID and there is no route that takes a
     * `code`, which matters because the CODE is what a checkout, a payment and an
     * ERP name a method by: to resolve one, filter the list (`GET
     * /payments/methods?code=invoice`), which answers a page of at most one row
     * because (tenant_id, code) is unique. Reading a method says nothing about
     * whether a buyer may use it — that is POST /payments/methods/eligible —
     * and nothing about whether its PSP can transact, which is under the provider
     * configuration.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
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
     * A PUT that PATCHES: only the keys in the body are written and every omitted
     * column keeps its value, so `{"enabled": false}` is the whole request for
     * taking a method out of checkout. A body with no writable key is refused
     * with 400 rather than treated as a no-op. This is the route for all three
     * things an operator changes about a method after it exists — the `enabled`
     * switch that puts it in or out of checkout, the fee it charges (`fee_type`,
     * `fee_amount`, `fee_currency`) and the restrictions that decide who is
     * offered it (`countries`, `min_order_value`, `max_order_value`) —
     * alongside its labels, description and `position`. `enabled: false` is the
     * safe way to retire one — it disappears from POST
     * /payments/methods/eligible immediately and stays on every payment ever made
     * with it. The one write this route refuses is a rename of `code` while the
     * ledger still names the old one. The three tables of this app carry no
     * foreign keys at all: a payment names its method by `method_code` and its
     * acquirer by `provider`, both plain text, because a payment records what
     * happened and has to survive the configuration it was made with. So the
     * database will not stop this — whatever the ledger still names, it goes on
     * naming. A rename would therefore leave every recorded payment pointing at a
     * code no configuration carries, which is the same harm DELETE on this row
     * answers 409 for — so it answers the same 409, with the same
     * `method_in_use` code and the same count. Renaming a method nothing has been
     * paid with is still free, and so is every other column at any time.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $countries
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?float $feeAmount
     * @param ?string $feeCurrency
     * @param ?PaymentFeeType $feeType
     * @param ?PaymentMethodKind $kind
     * @param ?array $labels
     * @param ?float $maxOrderValue
     * @param ?array $metadata
     * @param ?float $minOrderValue
     * @param ?string $name
     * @param ?int $position
     * @param ?string $provider
     * @param ?string $providerMethod
     * @throws RevenexxException
     * @return array
     */
    public function paymentsMethodsUpdate(string $id, ?string $code = null, ?array $countries = null, ?string $description = null, ?bool $enabled = null, ?float $feeAmount = null, ?string $feeCurrency = null, ?PaymentFeeType $feeType = null, ?PaymentMethodKind $kind = null, ?array $labels = null, ?float $maxOrderValue = null, ?array $metadata = null, ?float $minOrderValue = null, ?string $name = null, ?int $position = null, ?string $provider = null, ?string $providerMethod = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/payments/methods/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['countries'] = $countries;
        $apiParams['description'] = $description;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($feeAmount)) {
            $apiParams['fee_amount'] = $feeAmount;
        }

        if (!is_null($feeCurrency)) {
            $apiParams['fee_currency'] = $feeCurrency;
        }

        if (!is_null($feeType)) {
            $apiParams['fee_type'] = $feeType;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['labels'] = $labels;
        $apiParams['max_order_value'] = $maxOrderValue;
        $apiParams['metadata'] = $metadata;
        $apiParams['min_order_value'] = $minOrderValue;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['provider'] = $provider;
        $apiParams['provider_method'] = $providerMethod;

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