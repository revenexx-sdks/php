<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ResourceType;
use Revenexx\Enums\Scope;
use Revenexx\Enums\Reason;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

class Messaging extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filterable by `resource_type`, `resource_id` and `subject` — the last one
     * being the human-readable name a row was recorded under (a template's key,
     * a layout's name), which is what an operator has to hand six weeks later
     * when the id means nothing to them.
     * 
     * There is no write route and no delete route: an append-only log with an
     * editor is a log that says whatever the last editor wanted.
     *
     * @param ?ResourceType $resourceType
     * @param ?string $resourceId
     * @param ?string $subject
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function auditIndex(?ResourceType $resourceType = null, ?string $resourceId = null, ?string $subject = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/audit'
        );

        $apiParams = [];

        if (!is_null($resourceType)) {
            $apiParams['resource_type'] = $resourceType;
        }

        if (!is_null($resourceId)) {
            $apiParams['resource_id'] = $resourceId;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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
     * `?event_topic=` narrows to one topic, which is the question worth asking
     * of this list: "what does this event actually do".
     *
     * @param ?string $eventTopic
     * @throws RevenexxException
     * @return array
     */
    public function bindingIndex(?string $eventTopic = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/bindings'
        );

        $apiParams = [];

        if (!is_null($eventTopic)) {
            $apiParams['event_topic'] = $eventTopic;
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
     * `recipient` is a template, not an address: `{{ customer.email }}` is
     * rendered against the event payload when the event arrives, which is the
     * only way one binding can serve every customer. An event that renders it
     * empty is skipped and logged rather than sent to nobody.
     * 
     * `locale` is what the OPERATOR said this route speaks, and it outranks the
     * tenant's default. Leave it null when nobody has made that decision, so
     * that the recipient's own language is still allowed to decide.
     *
     * @param string $channel
     * @param string $eventTopic
     * @param string $recipient
     * @param string $templateKey
     * @param ?bool $enabled
     * @param ?int $fallbackOrder
     * @param ?string $locale
     * @throws RevenexxException
     * @return array
     */
    public function bindingStore(string $channel, string $eventTopic, string $recipient, string $templateKey, ?bool $enabled = null, ?int $fallbackOrder = null, ?string $locale = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/bindings'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;
        $apiParams['event_topic'] = $eventTopic;
        $apiParams['recipient'] = $recipient;
        $apiParams['template_key'] = $templateKey;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($fallbackOrder)) {
            $apiParams['fallback_order'] = $fallbackOrder;
        }
        $apiParams['locale'] = $locale;

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
     * The event it answered goes back to doing nothing. Prefer `enabled: false`
     * when the intent is to pause rather than to forget.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function bindingDestroy(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/bindings/{id}'
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
     * 404 for a binding belonging to another tenant, not 403 — an id that
     * answered differently would say whether it exists.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function bindingShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/bindings/{id}'
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
     * Every field is optional; only what is sent is written. `enabled: false`
     * is how a binding is taken out of service without losing what it said —
     * the alternative is deleting it and typing the payload path back in
     * correctly from memory later.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $id
     * @param ?string $channel
     * @param ?bool $enabled
     * @param ?string $eventTopic
     * @param ?int $fallbackOrder
     * @param ?string $locale
     * @param ?string $recipient
     * @param ?string $templateKey
     * @throws RevenexxException
     * @return array
     */
    public function bindingUpdatePatch(string $id, ?string $channel = null, ?bool $enabled = null, ?string $eventTopic = null, ?int $fallbackOrder = null, ?string $locale = null, ?string $recipient = null, ?string $templateKey = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/bindings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($eventTopic)) {
            $apiParams['event_topic'] = $eventTopic;
        }

        if (!is_null($fallbackOrder)) {
            $apiParams['fallback_order'] = $fallbackOrder;
        }
        $apiParams['locale'] = $locale;

        if (!is_null($recipient)) {
            $apiParams['recipient'] = $recipient;
        }

        if (!is_null($templateKey)) {
            $apiParams['template_key'] = $templateKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every field is optional; only what is sent is written. `enabled: false`
     * is how a binding is taken out of service without losing what it said —
     * the alternative is deleting it and typing the payload path back in
     * correctly from memory later.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $id
     * @param ?string $channel
     * @param ?bool $enabled
     * @param ?string $eventTopic
     * @param ?int $fallbackOrder
     * @param ?string $locale
     * @param ?string $recipient
     * @param ?string $templateKey
     * @throws RevenexxException
     * @return array
     */
    public function bindingUpdate(string $id, ?string $channel = null, ?bool $enabled = null, ?string $eventTopic = null, ?int $fallbackOrder = null, ?string $locale = null, ?string $recipient = null, ?string $templateKey = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/bindings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($eventTopic)) {
            $apiParams['event_topic'] = $eventTopic;
        }

        if (!is_null($fallbackOrder)) {
            $apiParams['fallback_order'] = $fallbackOrder;
        }
        $apiParams['locale'] = $locale;

        if (!is_null($recipient)) {
            $apiParams['recipient'] = $recipient;
        }

        if (!is_null($templateKey)) {
            $apiParams['template_key'] = $templateKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Answers per channel with: which fields the chosen provider wants and
     * which of them are SET (never their values — secrets go in and do not come
     * back), which markets hold an override, which providers this build offers,
     * whether the deployment has the channel switched on at all, the URL to
     * paste into the provider's own console so bounces and opens come back, and
     * whether callbacks are actually arriving.
     * 
     * Admin tier on the read as well as the write: the identifiers alone —
     * which Twilio account, which sender number — are more than a read-only
     * operator has reason to see, and the webhook URL served here contains the
     * tenant's callback token.
     *
     * @param ?string $market
     * @param ?string $markets
     * @throws RevenexxException
     * @return array
     */
    public function channelCredentialIndex(?string $market = null, ?string $markets = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/channel-credentials'
        );

        $apiParams = [];

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
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
     * With `?market=`, only that market's override goes and the global
     * credentials stand — the market then sends over the global provider again,
     * which is what it did before anybody configured it. Without a market the
     * channel goes entirely, overrides and all: a caller asking for a channel
     * to hold no credentials means all of them.
     * 
     * 204 whether or not anything was there. The caller wants this channel to
     * hold no credentials, and it does.
     *
     * @param string $channel
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function channelCredentialDestroy(string $channel, ?string $market = null): array
    {
        $apiPath = str_replace(
            ['{channel}'],
            [$channel],
            '/v1/messaging/channel-credentials/{channel}'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A PATCH in spirit whichever verb is used: only the fields present in the
     * body are written, and the answer says which of them actually CHANGED, so
     * a form that resent everything it had on screen does not report a change
     * that did not happen.
     * 
     * Three refusals, all 422 and all deliberate rather than ignored. A field
     * the channel's provider does not have (`unknown_credential_field`) — a
     * typo sitting in the bag looking like configuration fails later with a
     * message about a MISSING field the operator can see they filled in. A
     * field the platform issues (`managed_credential`) — ignoring it would have
     * the caller believe they set something. A channel with nothing to
     * configure (`channel_not_configurable`), which is push: its VAPID keypair
     * is generated at provisioning, and pasting a new one would orphan every
     * browser registration the tenant has collected.
     * 
     * Switching provider is `driver`, and the fields in the same request are
     * validated against the provider being switched TO — validating Postmark's
     * key against Mailgun's field list is how a switch loses everything the
     * operator just typed.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $channel
     * @param ?string $market
     * @param ?string $driver
     * @throws RevenexxException
     * @return array
     */
    public function channelCredentialUpdatePatch(string $channel, ?string $market = null, ?string $driver = null): array
    {
        $apiPath = str_replace(
            ['{channel}'],
            [$channel],
            '/v1/messaging/channel-credentials/{channel}'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }
        $apiParams['driver'] = $driver;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A PATCH in spirit whichever verb is used: only the fields present in the
     * body are written, and the answer says which of them actually CHANGED, so
     * a form that resent everything it had on screen does not report a change
     * that did not happen.
     * 
     * Three refusals, all 422 and all deliberate rather than ignored. A field
     * the channel's provider does not have (`unknown_credential_field`) — a
     * typo sitting in the bag looking like configuration fails later with a
     * message about a MISSING field the operator can see they filled in. A
     * field the platform issues (`managed_credential`) — ignoring it would have
     * the caller believe they set something. A channel with nothing to
     * configure (`channel_not_configurable`), which is push: its VAPID keypair
     * is generated at provisioning, and pasting a new one would orphan every
     * browser registration the tenant has collected.
     * 
     * Switching provider is `driver`, and the fields in the same request are
     * validated against the provider being switched TO — validating Postmark's
     * key against Mailgun's field list is how a switch loses everything the
     * operator just typed.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $channel
     * @param ?string $market
     * @param ?string $driver
     * @throws RevenexxException
     * @return array
     */
    public function channelCredentialUpdate(string $channel, ?string $market = null, ?string $driver = null): array
    {
        $apiPath = str_replace(
            ['{channel}'],
            [$channel],
            '/v1/messaging/channel-credentials/{channel}'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }
        $apiParams['driver'] = $driver;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The one thing that turns this screen from a form into a tool. Credentials
     * that only fail at send time cost a customer their first order
     * confirmation, and by then nobody connects the failure to the afternoon
     * somebody pasted a key with a trailing space.
     * 
     * **Always 200.** The answer is `{ok, message}` in the body, including when
     * the credentials are wrong: the REQUEST was fine, the credentials are not,
     * and a 4xx here would have the cockpit's own error handling swallow the
     * one sentence worth reading. A channel that asks for no credentials at all
     * (push, in-app) answers `ok: true` — "nothing to verify" is a finished
     * check, not a failed one, and reporting it as an error painted a channel
     * that has worked since provisioning in the same red as a wrong token.
     *
     * @param string $channel
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function channelCredentialVerify(string $channel, ?string $market = null): array
    {
        $apiPath = str_replace(
            ['{channel}'],
            [$channel],
            '/v1/messaging/channel-credentials/{channel}/verify'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Each entry says whether the channel is switched on and which provider
     * carries it by default. A channel that is off will refuse a send, so a UI
     * that offers a channel picker should build it from this rather than from a
     * list of its own — a channel added to the service then appears without a
     * release of the client.
     *
     * @throws RevenexxException
     * @return array
     */
    public function channelIndex(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/channels'
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
     * A tenant that was never provisioned has no row and still gets an answer:
     * an empty shape rather than a 404, so the Cockpit's panels open on
     * editable blanks instead of an error.
     * 
     * `meta.push_public_key` is the VAPID public key, and only the public one.
     * A storefront cannot call `PushManager.subscribe()` without it, so it has
     * to leave the service; the private half and every provider secret stay
     * hidden on the model, where they are protected on every route rather than
     * on this one.
     *
     * @throws RevenexxException
     * @return array
     */
    public function configShow(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/config'
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
     * Reaches every message this tenant sends, including templates saved months
     * ago — content placeholders resolve at send time, not at save time —
     * which
     * is why writing is admin tier while reading is not.
     * 
     * Two refusals worth knowing about. `defaults.brand` is 422, not ignored:
     * the letterhead moved to /v1/layouts when a tenant gained more than one of
     * them, and a letterhead edit that appears to save and changes nothing is
     * the worst of the three possible behaviours. A half-written `quiet_hours`
     * is 422 as well — a tenant that typed a start and forgot the end has an
     * opinion about when not to message people, and silently sending through
     * the night is the one answer that is definitely wrong.
     * 
     * Provider credentials cannot be written here. That path is
     * /v1/channel-credentials, so the one route that handles secrets stays the
     * one that was built for it.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param ?string $defaultLocale
     * @param ?array $defaults
     * @param ?string $product
     * @param ?array $quietHours
     * @param ?string $supportEmail
     * @throws RevenexxException
     * @return array
     */
    public function configUpdatePatch(?string $defaultLocale = null, ?array $defaults = null, ?string $product = null, ?array $quietHours = null, ?string $supportEmail = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/config'
        );

        $apiParams = [];
        $apiParams['default_locale'] = $defaultLocale;
        $apiParams['defaults'] = $defaults;
        $apiParams['product'] = $product;
        $apiParams['quiet_hours'] = $quietHours;
        $apiParams['support_email'] = $supportEmail;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Reaches every message this tenant sends, including templates saved months
     * ago — content placeholders resolve at send time, not at save time —
     * which
     * is why writing is admin tier while reading is not.
     * 
     * Two refusals worth knowing about. `defaults.brand` is 422, not ignored:
     * the letterhead moved to /v1/layouts when a tenant gained more than one of
     * them, and a letterhead edit that appears to save and changes nothing is
     * the worst of the three possible behaviours. A half-written `quiet_hours`
     * is 422 as well — a tenant that typed a start and forgot the end has an
     * opinion about when not to message people, and silently sending through
     * the night is the one answer that is definitely wrong.
     * 
     * Provider credentials cannot be written here. That path is
     * /v1/channel-credentials, so the one route that handles secrets stays the
     * one that was built for it.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param ?string $defaultLocale
     * @param ?array $defaults
     * @param ?string $product
     * @param ?array $quietHours
     * @param ?string $supportEmail
     * @throws RevenexxException
     * @return array
     */
    public function configUpdate(?string $defaultLocale = null, ?array $defaults = null, ?string $product = null, ?array $quietHours = null, ?string $supportEmail = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/config'
        );

        $apiParams = [];
        $apiParams['default_locale'] = $defaultLocale;
        $apiParams['defaults'] = $defaults;
        $apiParams['product'] = $product;
        $apiParams['quiet_hours'] = $quietHours;
        $apiParams['support_email'] = $supportEmail;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The order is the list's purpose: it is a picker, and the entry most
     * templates are actually on belongs at the top of it.
     * 
     * Market-scoped as a browsing filter — see the parameters. `GET
     * /layouts/{id}`
     * deliberately is not: somebody holding an id may read it.
     *
     * @param ?string $markets
     * @throws RevenexxException
     * @return array
     */
    public function layoutIndex(?string $markets = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/layouts'
        );

        $apiParams = [];

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
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
     * A tenant's FIRST layout becomes the default whatever the request says: a
     * tenant with no default cannot compile a template that does not name one.
     * 
     * The default may hold neither a validity window nor `enabled: false`, and
     * asking for both in one request is refused with 422
     * `layout_default_always_in_force`. There is no fallback behind the default
     * — every template that names no layout is framed by it — so a window set
     * today would take a tenant's whole letterhead away on a morning months
     * from now, with nobody left who remembers typing the date.
     *
     * @throws RevenexxException
     * @return array
     */
    public function layoutStore(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/layouts'
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
     * Answers 200 with a body rather than the 204 the other resources use: the
     * count of reassigned templates is the part an operator needs, and a
     * deletion that silently moved eleven templates onto another letterhead is
     * one they would only discover from the next mail that went out.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function layoutDestroy(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/layouts/{id}'
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
     * Not market-filtered, deliberately: market scoping is a browsing concern,
     * and somebody holding an id may read the row. A template pinned to a
     * layout keeps mailing on it whatever market the reader is looking at.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function layoutShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/layouts/{id}'
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
     * The change reaches every template on this layout, including ones saved
     * months ago and never opened since — which is exactly the change nobody
     * remembers making when the mails start looking wrong. It is audited for
     * that reason, and only when something actually changed: an audit line on
     * every save teaches its readers to ignore the log.
     * 
     * Two 422s. Clearing `is_default` on the current default is
     * `layout_default_required` — promoting another layout is the operation
     * that exists for this, and it clears this one as a side effect, which is
     * the only way the count stays at exactly one. Giving the default a
     * validity window or switching it off is `layout_default_always_in_force`,
     * and the check is made of the OUTCOME, so promoting a layout and dating it
     * in the same request is caught.
     * 
     * The structural half of a layout — colours, width, font — is baked into
     * each template's compiled body, so templates already on it keep the old
     * one until they are recompiled.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function layoutUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/layouts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * What the Cockpit's "start from a template" gallery is built from. These
     * are not the tenant's rows and cannot be edited here: provisioning clones
     * them into `/v1/templates`, and it is the clone that a tenant owns.
     *
     * @param ?string $channel
     * @param ?string $locale
     * @throws RevenexxException
     * @return array
     */
    public function libraryIndex(?string $channel = null, ?string $locale = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/library'
        );

        $apiParams = [];

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
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
     * `?channel=` and `?status=` narrow it; `?limit=` is clamped to 200 and
     * defaults to 50. `?channel=inapp` is the tenant's in-app inbox — the
     * Message row IS the inbox item, so there is no second store for it.
     * 
     * Rows are subject to the deployment's retention window and to erasure
     * requests, so this is not an archive.
     *
     * @param ?string $channel
     * @param ?string $status
     * @throws RevenexxException
     * @return array
     */
    public function messageIndex(?string $channel = null, ?string $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/messages'
        );

        $apiParams = [];

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * Carries the render model it was sent with, so "why did this mail say
     *      * that" is answerable after the fact. That is also why the row is
     * personal
     * data and why it can be erased — see POST /v1/privacy/erasures.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function messageShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/messages/{id}'
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
     * Answers with the resolved subject, HTML and text exactly as a real send
     * would produce them, so an editor can show a faithful preview without a
     * message row, a provider call or a suppression check.
     * 
     * Takes no `market`, deliberately: rendering picks no provider, so there is
     * nothing here for a market to change. Nor `send_at`, `draft` or
     * `attachments` — all of them are properties of a dispatch, not of a
     * render.
     *
     * @param string $channel
     * @param string $template
     * @param ?array $data
     * @param ?string $locale
     * @throws RevenexxException
     * @return array
     */
    public function sendPreview(string $channel, string $template, ?array $data = null, ?string $locale = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/preview'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;
        $apiParams['template'] = $template;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }
        $apiParams['locale'] = $locale;

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
     * Per (channel, address), because an address is channel-shaped and the rows
     * it has to line up with are keyed that way. Matching is done on the
     * normalised form on both sides, so a request for `ada@acme.test` finds a
     * log written for `Ada@Acme.test` — an erasure that misses on
     * capitalisation is an erasure that did not happen and reports success.
     * 
     * Message rows and unsubscribe tokens are DELETED. Suppressions are KEPT
     * with the clear-text address nulled: matching runs on a keyed hash, so the
     * row can still block and can no longer identify. Deleting it instead is
     * the obvious reading of "erase everything about them", and it is the
     * reading that mails a dead address again next week — or mails somebody who
     * complained, which is how a sending domain gets blocked.
     * 
     * Answers with the counts, `suppressions_kept` among them, so the design is
     * stated in the response rather than only in this paragraph.
     *
     * @param string $address
     * @param string $channel
     * @throws RevenexxException
     * @return array
     */
    public function erasureStore(string $address, string $channel): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/privacy/erasures'
        );

        $apiParams = [];
        $apiParams['address'] = $address;
        $apiParams['channel'] = $channel;

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
     * By endpoint and not by id, because the browser knows its endpoint and has
     * never seen our id — this is called from a service worker reacting to
     * `pushsubscriptionchange`, or from a "turn off notifications" button.
     *
     * @param string $endpoint
     * @throws RevenexxException
     * @return array
     */
    public function pushSubscriptionDestroy(string $endpoint): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/push/subscriptions'
        );

        $apiParams = [];
        $apiParams['endpoint'] = $endpoint;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * `subscriber_id` is required: this is not a list of everybody, and there
     * is no route that is. The caller is a storefront acting for one visitor
     * and has no business enumerating the rest.
     * 
     * The client key material is never returned — see the `$hidden` list on the
     * model. A registration that can be read back is a registration somebody
     * else can push with.
     *
     * @param string $subscriberId
     * @throws RevenexxException
     * @return array
     */
    public function pushSubscriptionIndex(string $subscriberId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/push/subscriptions'
        );

        $apiParams = [];
        $apiParams['subscriber_id'] = $subscriberId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Send what `PushManager.subscribe()` handed back — the endpoint and the
     * two keys — plus the id you know that person by. The VAPID public key the
     * browser needs to produce it comes from `GET /v1/config`
     * (`meta.push_public_key`).
     * 
     * **Idempotent by endpoint**, and the two statuses say which happened: 201
     * for a browser seen for the first time, 200 for one already registered. A
     * browser calls `subscribe()` on every page load and hands back the same
     * endpoint each time; treating that as a new device would give one laptop a
     * thousand rows and push to it a thousand times.
     *
     * @param string $endpoint
     * @param array $keys
     * @param string $subscriberId
     * @param ?string $userAgent
     * @throws RevenexxException
     * @return array
     */
    public function pushSubscriptionStore(string $endpoint, array $keys, string $subscriberId, ?string $userAgent = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/push/subscriptions'
        );

        $apiParams = [];
        $apiParams['endpoint'] = $endpoint;
        $apiParams['keys'] = $keys;
        $apiParams['subscriber_id'] = $subscriberId;
        $apiParams['user_agent'] = $userAgent;

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
     * Renders a tenant template and dispatches it — now, at `send_at`, or at
     * the end of the tenant's quiet hours.
     * 
     * The first line is deliberately a title, not a sentence about the
     * mechanism: Scramble takes it as the operation's `summary`, and a summary
     * is what an API explorer prints in its route list. The paragraph that used
     * to be here ran to 119 characters across two lines, which the gateway's
     * fragment tests reject for exactly that reason.
     * 
     * Retry-safe when the caller sends an `Idempotency-Key` header. The two
     * answers are deliberately different:
     * 
     *   201 — a message was created by THIS call
     *   200 — this key was already used; here is the message it produced
     * 
     * A caller has to be able to tell those apart. "Your mail went out" and
     * "your mail had already gone out" are the same outcome and different
     * facts, and a client reconciling its own records needs the second one.
     * Same key with a different body is a 422 — see IdempotencyConflict.
     * 
     * A recipient on the tenant's suppression list is not sent to, and that is
     * reported as a refusal rather than as a silent success.
     *
     * @param string $channel
     * @param string $template
     * @param string $to
     * @param ?array $attachments
     * @param ?array $data
     * @param ?bool $draft
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $sendAt
     * @throws RevenexxException
     * @return array
     */
    public function sendSend(string $channel, string $template, string $to, ?array $attachments = null, ?array $data = null, ?bool $draft = null, ?string $locale = null, ?string $market = null, ?string $sendAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/send'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;
        $apiParams['template'] = $template;
        $apiParams['to'] = $to;

        if (!is_null($attachments)) {
            $apiParams['attachments'] = $attachments;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($draft)) {
            $apiParams['draft'] = $draft;
        }
        $apiParams['locale'] = $locale;
        $apiParams['market'] = $market;
        $apiParams['send_at'] = $sendAt;

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
     * Either `days` (a window ending now, default 30) or an explicit `from`/`to`
     * span. Both ends of the span or neither: `from` alone would be an open
     * range and the service would have to guess which end was meant.
     * 
     * Three numbers are deliberately not the naive ones, and the `window` block
     * says so rather than leaving a chart to imply otherwise. The window is
     * CLAMPED to the tenant's retention, and `clamped_by_retention` says when
     * that happened — 90 days on a 30-day retention is 30 days of data wearing
     * a 90-day label, and the trend line it draws invents a collapse that never
     * happened. Opens are counted only over channels that can report them; SMS
     * and push have no such thing, so dividing opens by all messages would
     * quietly halve every open rate the moment a tenant adds a second channel.
     * The delivery rate is sent ÷ (sent + failed): suppressed is the service
     * doing what it was told, and counting it as a failure would punish a
     * tenant for having a working unsubscribe list.
     * 
     * `previous` is the same window again immediately before this one, which is
     * what turns a figure into a direction. **It is null** whenever the
     * preceding window is not entirely inside retention: the query would answer
     * zero rather than fail, and zero against 1,337 renders as a triumphant
     * +100 % beside every tile on the screen. Show no trend rather than a
     * flattering one.
     * 
     * Nothing here names a recipient. That is the delivery log, which is a
     * different endpoint with a different question.
     *
     * @param ?int $days
     * @param ?string $from
     * @param ?string $to
     * @throws RevenexxException
     * @return array
     */
    public function statsIndex(?int $days = null, ?string $from = null, ?string $to = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/stats'
        );

        $apiParams = [];

        if (!is_null($days)) {
            $apiParams['days'] = $days;
        }
        $apiParams['from'] = $from;
        $apiParams['to'] = $to;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Filterable by `channel`, `scope`, `reason` and `address`. The address
     * filter is looked up by FINGERPRINT rather than against the address
     * column, which is what makes "why did this person stop getting our mail"
     * answerable for somebody who has since been erased: the row has no
     * address left to match on, and the question is still the same question.
     *
     * @param ?string $channel
     * @param ?Scope $scope
     * @param ?Reason $reason
     * @param ?string $address
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function suppressionIndex(?string $channel = null, ?Scope $scope = null, ?Reason $reason = null, ?string $address = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/suppressions'
        );

        $apiParams = [];

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($address)) {
            $apiParams['address'] = $address;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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
     * 201 for a row this call created, 200 for an address that was already on
     * the list — so a client can tell whether it changed anything.
     * 
     * The `scope` follows from the `reason` for every reason but `manual`, and
     * asking for a different one is 422 `suppression_scope_fixed` rather than
     * being quietly corrected: a caller who asked for `marketing` on a hard
     * bounce has the model wrong, and a silent upgrade to `all` would leave
     * them believing transactional mail still flows to an address that does not
     * exist.
     *
     * @param string $address
     * @param string $channel
     * @param Reason $reason
     * @param ?string $expiresAt
     * @param ?string $note
     * @param ?Scope $scope
     * @throws RevenexxException
     * @return array
     */
    public function suppressionStore(string $address, string $channel, Reason $reason, ?string $expiresAt = null, ?string $note = null, ?Scope $scope = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/suppressions'
        );

        $apiParams = [];
        $apiParams['address'] = $address;
        $apiParams['channel'] = $channel;
        $apiParams['reason'] = $reason;
        $apiParams['expires_at'] = $expiresAt;
        $apiParams['note'] = $note;

        if (!is_null($scope)) {
            $apiParams['scope'] = $scope;
        }

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
     * Audited, unlike most deletes in this service. Removing a row here is the
     * one operation that makes the service mail an address something decided
     * not to mail — if a complaint turns into a spam report later, "who took
     *      * this off the list, and when" is the whole investigation.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function suppressionDestroy(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/suppressions/{id}'
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
     * `address` may be null: that is a person who has been erased
     * (POST /v1/privacy/erasures). The row survives as a hash, which is the
     * point — the clear text is gone and the address is still blocked.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function suppressionShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/suppressions/{id}'
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
     * `?channel=` narrows to one channel. Market-scoped as a BROWSING filter:
     * with `X-Revenexx-Market` the list is the global rows plus that market's,
     * without it the global rows only, and `?markets=all` is the unscoped read.
     * Never a boundary — the tenant is fixed by the credential and by row-level
     * security, and no value of either parameter reaches another tenant's rows.
     *
     * @param ?string $channel
     * @param ?string $markets
     * @throws RevenexxException
     * @return array
     */
    public function templateIndex(?string $channel = null, ?string $markets = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/templates'
        );

        $apiParams = [];

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
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
     * Send a `design` document and the service compiles it against the
     * template's layout — or send `body_html` and `body_text` yourself and skip
     * compilation entirely.
     * 
     * A design that the compiler refuses is 422 and NOTHING is written, with
     * `error.details` naming the offending block. That order is deliberate: a
     * save whose compile failed must leave the row alone, because storing the
     * design while keeping a stale body would hand the next send a mail that no
     * longer matches the document it claims to be built from, and nothing would
     * ever surface it. A sidecar that is down is 503 `mjml_unavailable`, which
     * is worth retrying; a rejected design is not.
     * 
     * The row this creates is a DRAFT and sends nothing until it is published.
     *
     * @param string $channel
     * @param string $key
     * @param ?string $bodyHtml
     * @param ?string $bodyText
     * @param ?string $contentSid
     * @param ?array $design
     * @param ?bool $enabled
     * @param ?string $layoutId
     * @param ?string $locale
     * @param ?array $markets
     * @param ?MessageClass $messageClass
     * @param ?string $subject
     * @param ?bool $testMode
     * @param ?string $title
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @param ?array $variableDefaults
     * @param ?array $variables
     * @param ?WhatsappCategory $whatsappCategory
     * @throws RevenexxException
     * @return array
     */
    public function templateStore(string $channel, string $key, ?string $bodyHtml = null, ?string $bodyText = null, ?string $contentSid = null, ?array $design = null, ?bool $enabled = null, ?string $layoutId = null, ?string $locale = null, ?array $markets = null, ?MessageClass $messageClass = null, ?string $subject = null, ?bool $testMode = null, ?string $title = null, ?string $validFrom = null, ?string $validUntil = null, ?array $variableDefaults = null, ?array $variables = null, ?WhatsappCategory $whatsappCategory = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/messaging/templates'
        );

        $apiParams = [];
        $apiParams['channel'] = $channel;
        $apiParams['key'] = $key;
        $apiParams['body_html'] = $bodyHtml;
        $apiParams['body_text'] = $bodyText;
        $apiParams['content_sid'] = $contentSid;
        $apiParams['design'] = $design;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['layout_id'] = $layoutId;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
        }

        if (!is_null($messageClass)) {
            $apiParams['message_class'] = $messageClass;
        }
        $apiParams['subject'] = $subject;

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }
        $apiParams['title'] = $title;
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;
        $apiParams['variable_defaults'] = $variableDefaults;
        $apiParams['variables'] = $variables;
        $apiParams['whatsapp_category'] = $whatsappCategory;

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
     * Any binding still naming this template's key will find nothing when its
     * event next arrives. Audited under the KEY as well as the id: after the
     * delete the id resolves to nothing, and "deleted tmpl_01J…" is not
     * something an operator can act on six weeks later.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function templateDestroy(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/templates/{id}'
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
     * What customers are receiving is the published snapshot; see
     * `GET /v1/templates/{id}/versions`, whose `meta.has_unpublished_changes`
     * says whether the two differ.
     * 
     * Not market-filtered, deliberately: market scoping is a browsing concern
     * and somebody holding an id may read the row.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function templateShow(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/templates/{id}'
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
     * Only the fields sent are written, and the change is audited only when
     * something actually changed — a PATCH that resent the same values records
     * nothing, because an audit line on every save teaches its readers to
     * ignore the log.
     * 
     * Moving a template to another layout recompiles it against the NEW one,
     * even when nothing else changed: colours, width and font come from the
     * layout and are already inlined, so a template that merely changed hands
     * would otherwise keep showing the old letterhead until somebody happened
     * to press save on it again.
     * 
     * Changes nothing customers receive until the template is published.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $id
     * @param ?string $bodyHtml
     * @param ?string $bodyText
     * @param ?string $contentSid
     * @param ?array $design
     * @param ?bool $enabled
     * @param ?string $layoutId
     * @param ?array $markets
     * @param ?MessageClass $messageClass
     * @param ?string $subject
     * @param ?bool $testMode
     * @param ?string $title
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @param ?array $variableDefaults
     * @param ?array $variables
     * @param ?WhatsappCategory $whatsappCategory
     * @throws RevenexxException
     * @return array
     */
    public function templateUpdatePatch(string $id, ?string $bodyHtml = null, ?string $bodyText = null, ?string $contentSid = null, ?array $design = null, ?bool $enabled = null, ?string $layoutId = null, ?array $markets = null, ?MessageClass $messageClass = null, ?string $subject = null, ?bool $testMode = null, ?string $title = null, ?string $validFrom = null, ?string $validUntil = null, ?array $variableDefaults = null, ?array $variables = null, ?WhatsappCategory $whatsappCategory = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/templates/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['body_html'] = $bodyHtml;
        $apiParams['body_text'] = $bodyText;
        $apiParams['content_sid'] = $contentSid;
        $apiParams['design'] = $design;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['layout_id'] = $layoutId;

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
        }

        if (!is_null($messageClass)) {
            $apiParams['message_class'] = $messageClass;
        }
        $apiParams['subject'] = $subject;

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }
        $apiParams['title'] = $title;
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;
        $apiParams['variable_defaults'] = $variableDefaults;
        $apiParams['variables'] = $variables;
        $apiParams['whatsapp_category'] = $whatsappCategory;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Only the fields sent are written, and the change is audited only when
     * something actually changed — a PATCH that resent the same values records
     * nothing, because an audit line on every save teaches its readers to
     * ignore the log.
     * 
     * Moving a template to another layout recompiles it against the NEW one,
     * even when nothing else changed: colours, width and font come from the
     * layout and are already inlined, so a template that merely changed hands
     * would otherwise keep showing the old letterhead until somebody happened
     * to press save on it again.
     * 
     * Changes nothing customers receive until the template is published.
     * 
     * This path answers on `PUT` and `PATCH`, both routed to the same action.
     *
     * @param string $id
     * @param ?string $bodyHtml
     * @param ?string $bodyText
     * @param ?string $contentSid
     * @param ?array $design
     * @param ?bool $enabled
     * @param ?string $layoutId
     * @param ?array $markets
     * @param ?MessageClass $messageClass
     * @param ?string $subject
     * @param ?bool $testMode
     * @param ?string $title
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @param ?array $variableDefaults
     * @param ?array $variables
     * @param ?WhatsappCategory $whatsappCategory
     * @throws RevenexxException
     * @return array
     */
    public function templateUpdate(string $id, ?string $bodyHtml = null, ?string $bodyText = null, ?string $contentSid = null, ?array $design = null, ?bool $enabled = null, ?string $layoutId = null, ?array $markets = null, ?MessageClass $messageClass = null, ?string $subject = null, ?bool $testMode = null, ?string $title = null, ?string $validFrom = null, ?string $validUntil = null, ?array $variableDefaults = null, ?array $variables = null, ?WhatsappCategory $whatsappCategory = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/messaging/templates/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['body_html'] = $bodyHtml;
        $apiParams['body_text'] = $bodyText;
        $apiParams['content_sid'] = $contentSid;
        $apiParams['design'] = $design;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['layout_id'] = $layoutId;

        if (!is_null($markets)) {
            $apiParams['markets'] = $markets;
        }

        if (!is_null($messageClass)) {
            $apiParams['message_class'] = $messageClass;
        }
        $apiParams['subject'] = $subject;

        if (!is_null($testMode)) {
            $apiParams['test_mode'] = $testMode;
        }
        $apiParams['title'] = $title;
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;
        $apiParams['variable_defaults'] = $variableDefaults;
        $apiParams['variables'] = $variables;
        $apiParams['whatsapp_category'] = $whatsappCategory;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Answers 200 with the version already live when there was nothing to
     * publish, and 201 when a new one was written — so a client can tell
     * whether its press did anything without diffing the payload.
     *
     * @param string $templateId
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function templateVersionStore(string $templateId, ?string $note = null): array
    {
        $apiPath = str_replace(
            ['{templateId}'],
            [$templateId],
            '/v1/messaging/templates/{templateId}/publish'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;
        $apiParams['note'] = $note;

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
     * Summaries only: version, subject, message class, layout, who published it
     * and when, and their note. The BODIES are deliberately absent — a compiled
     * `body_html` runs to tens of kilobytes, and a template with forty versions
     * would make this a several-megabyte download that nobody scrolls to the
     * end of. `GET /v1/templates/{id}/versions/{version}` serves the full
     * snapshot for the one somebody actually opened.
     * 
     * `meta.published_version_id` says which of them is live — a property of
     * the template, said once, rather than a flag repeated on every row that
     * two rows could then claim. `meta.has_unpublished_changes` says whether
     * the draft has moved on since.
     *
     * @param string $templateId
     * @throws RevenexxException
     * @return array
     */
    public function templateVersionIndex(string $templateId): array
    {
        $apiPath = str_replace(
            ['{templateId}'],
            [$templateId],
            '/v1/messaging/templates/{templateId}/versions'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Addressed by its VERSION NUMBER — the small integer on the history row,
     * not the snapshot's id — because that is the number an author has in front
     * of them.
     * 
     * This is what sends actually rendered while that version was live, so it
     * is the thing to read when the question is "what did the mail we sent in
     *      * March say".
     *
     * @param string $templateId
     * @param string $version
     * @throws RevenexxException
     * @return array
     */
    public function templateVersionShow(string $templateId, string $version): array
    {
        $apiPath = str_replace(
            ['{templateId}', '{version}'],
            [$templateId, $version],
            '/v1/messaging/templates/{templateId}/versions/{version}'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;
        $apiParams['version'] = $version;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * `publish: true` makes it live in the same transaction — see
     * TemplatePublisher::restore for why that flag exists rather than asking
     * the caller for a second round trip.
     *
     * @param string $templateId
     * @param string $version
     * @param ?bool $publish
     * @throws RevenexxException
     * @return array
     */
    public function templateVersionRestore(string $templateId, string $version, ?bool $publish = null): array
    {
        $apiPath = str_replace(
            ['{templateId}', '{version}'],
            [$templateId, $version],
            '/v1/messaging/templates/{templateId}/versions/{version}/restore'
        );

        $apiParams = [];
        $apiParams['templateId'] = $templateId;
        $apiParams['version'] = $version;

        if (!is_null($publish)) {
            $apiParams['publish'] = $publish;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}