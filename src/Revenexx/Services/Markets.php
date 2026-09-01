<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\MarketsListStatus;
use Revenexx\Enums\MarketStatus;
use Revenexx\Enums\MarketsVocabularyName;

class Markets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every column is an exact-match filter and they combine with AND
     * (?code=northwind); each one is declared as a query parameter above. A
     * `?column=value` this entity does not have is DROPPED rather than refused
     * — the call answers 200 with the unfiltered list — and `filter` echoes
     * what was actually applied, which is the only way to tell that apart from a
     * filter that matched nothing.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $labels
     * @param ?string $currency
     * @param ?MarketsListStatus $status
     * @param ?bool $isDefault
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketsList(?string $id = null, ?string $code = null, ?string $name = null, ?string $labels = null, ?string $currency = null, ?MarketsListStatus $status = null, ?bool $isDefault = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * A market needs a 'code' and a 'name' — currency defaults to EUR, status
     * to active. To get a market that can actually trade, clone an existing one
     * instead: POST /markets/{id}/clone.
     *
     * @param string $code
     * @param string $name
     * @param ?string $currency
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?MarketStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function marketsCreate(string $code, string $name, ?string $currency = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?MarketStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * How this tenant keys its translations, resolved for a surface that stands
     * in no market at all. The Cockpit edits a tenant BASELINE when no market is
     * selected, and a baseline value has to be readable by every market — so
     * the locale set answered here is the UNION of every market's locales, each
     * one already resolved to the key it is written under, not one market's list
     * and not a pair of setting names to re-implement. Each entry names the
     * markets that asked for that locale: an editor listing six inputs without
     * saying who needs them invites translations nobody will ever read.
     * Write/read keys follow the same two settings as the per-market answer, so a
     * baseline and a market value can never be keyed differently.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalePolicy(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets/locale-policy'
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
     * Every closed value set this app owns, listed by name with its title and its
     * description but WITHOUT its values — enough to build a menu of them, and
     * a name to fetch one by when a select box actually needs the values. Static
     * per app version; nothing about a tenant changes it. It reads no table and
     * takes no parameter, so 200 is the only answer it has beyond the gateway's
     * own.
     *
     * @throws RevenexxException
     * @return array
     */
    public function marketsVocabularies(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets/vocabularies'
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
     * One value set in full: every value the column may hold, in the order it may
     * hold them, with the copy and the badge tone a client renders each one as.
     * The values are not kept in a list beside the database, they are parsed out
     * of the CHECK constraint in this app's own schema.json — so the set served
     * here IS the set enforced on a write, and a select box built from it cannot
     * offer a value the write would then refuse. A name outside the declared enum
     * is a 404 rather than an empty list — an empty vocabulary and an unknown
     * one mean different things to a select box.
     *
     * @param MarketsVocabularyName $name
     * @throws RevenexxException
     * @return array
     */
    public function marketsVocabulary(MarketsVocabularyName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/markets/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Deleting a market takes its locales, currencies and tax classes with it:
     * all three carry an ON DELETE CASCADE onto markets.id, so this is never
     * refused for having children.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
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
     * Resolved by uuid only — unlike /readiness, /clone, /backfill and
     * /make-default, a market CODE here is a 400 rather than a lookup.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
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
     * Partial: omitted fields keep their value.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $currency
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $name
     * @param ?int $position
     * @param ?MarketStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function marketsUpdate(string $id, ?string $code = null, ?string $currency = null, ?bool $isDefault = null, ?array $labels = null, ?string $name = null, ?int $position = null, ?MarketStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * Repairs the market in the path out of a source market that is already
     * right. The two are compared by CODE, collection by collection, and only the
     * codes this market does not already carry are added — so a locale, a
     * currency or a tax class it already holds is left exactly as the merchant
     * left it, rate included, and is never overwritten. Both the path id and
     * `source` are resolved by uuid OR by market code. Idempotent: running it
     * twice adds nothing the second time.
     *
     * @param string $id
     * @param string $source
     * @param ?bool $currencies
     * @param ?bool $locales
     * @param ?bool $taxClasses
     * @throws RevenexxException
     * @return array
     */
    public function marketsBackfill(string $id, string $source, ?bool $currencies = null, ?bool $locales = null, ?bool $taxClasses = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/backfill'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['source'] = $source;

        if (!is_null($currencies)) {
            $apiParams['currencies'] = $currencies;
        }

        if (!is_null($locales)) {
            $apiParams['locales'] = $locales;
        }

        if (!is_null($taxClasses)) {
            $apiParams['tax_classes'] = $taxClasses;
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
     * Creates a NEW market out of an existing one, taking its locales, its traded
     * currencies and its tax classes with it in a single call. That is the
     * difference between this and POST /markets: a plain create leaves a row that
     * cannot serve anybody, while what comes back here is a market with a
     * language to render in, a currency to price in and a rate to tax with. The
     * path id is the SOURCE market, resolved by uuid OR by market code.
     *
     * @param string $id
     * @param string $code
     * @param ?bool $copyCurrencies
     * @param ?bool $copyLocales
     * @param ?bool $copyTaxClasses
     * @param ?string $currency
     * @param ?string $name
     * @param ?MarketStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function marketsClone(string $id, string $code, ?bool $copyCurrencies = null, ?bool $copyLocales = null, ?bool $copyTaxClasses = null, ?string $currency = null, ?string $name = null, ?MarketStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/clone'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['code'] = $code;

        if (!is_null($copyCurrencies)) {
            $apiParams['copy_currencies'] = $copyCurrencies;
        }

        if (!is_null($copyLocales)) {
            $apiParams['copy_locales'] = $copyLocales;
        }

        if (!is_null($copyTaxClasses)) {
            $apiParams['copy_tax_classes'] = $copyTaxClasses;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * The storefront bootstrap: everything a frontend needs to render one market,
     * resolved server-side so no client re-derives it — the market row, its
     * locales, the currencies it trades in and its tax classes; WHICH locale to
     * actually render in and where that answer came from; which key to read and
     * write a translation under; whether the prices it will be handed are gross
     * or net; and whether any of it is trustworthy. One call rather than five,
     * and — more to the point — one place the resolution rules live, instead
     * of a slightly different copy of them in every storefront. This one resolves
     * the market by id only: unlike /readiness, /clone and /backfill, a market
     * CODE here is a 400, not a lookup.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsContext(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/context'
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
     * A tenant has ONE default market: it is what every call naming none falls
     * back to. Moving the flag from a client was promote-then-demote, two PATCHes
     * that leave two defaults when the second does not land and none when the
     * first does. This is the one call instead — it promotes the market in the
     * path and demotes whoever held the flag in the same operation, writing once
     * per row that was actually wrong and not touching the rest. Accepts an id or
     * a market CODE. Answers the market plus the codes it demoted; repeating the
     * call writes nothing.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketsMakeDefault(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/make-default'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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
     * Whether this market can actually trade, and if not, what is missing. Every
     * check runs on every call and comes back with its own severity, so the
     * answer is a diagnosis rather than a yes or a no: a market with no currency
     * registered has nothing to price in and a market with no tax class has
     * nothing to tax with, and both of those fail BLOCKING, which is what turns
     * `ready` false. A check that is merely degraded — no locale of its own,
     * while the tenant declares a fallback_locale that covers for it — fails as
     * a warning and leaves the market serviceable. Resolves the market by uuid OR
     * by market code.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsReadiness(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/readiness'
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
     * Every column is an exact-match filter and they combine with AND
     * (?code=EUR); each one is declared as a query parameter above. A
     * `?column=value` this entity does not have is DROPPED rather than refused
     * — the call answers 200 with the unfiltered list — and `filter` echoes
     * what was actually applied, which is the only way to tell that apart from a
     * filter that matched nothing. `market_id` is not among them: the owning
     * market comes from the path and overwrites anything the query says. An
     * unknown but well-formed market lists empty rather than 404 — the parent
     * is filtered on, not verified.
     *
     * @param string $marketId
     * @param ?string $id
     * @param ?string $code
     * @param ?bool $isDefault
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketsCurrenciesList(string $marketId, ?string $id = null, ?string $code = null, ?bool $isDefault = null, ?int $position = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/currencies'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * The owning market comes from the path and overrides anything in the body.
     *
     * @param string $marketId
     * @param string $code
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function marketsCurrenciesCreate(string $marketId, string $code, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/currencies'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Scoped to the market in the path — a row belonging to another market is a
     * 404 here, and is never deleted.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsCurrenciesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Scoped strictly to the market in the path: a row belonging to another
     * market is a 404 here, never a 200.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsCurrenciesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Partial: omitted fields keep their value.
     *
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function marketsCurrenciesUpdate(string $marketId, string $id, ?string $code = null, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Every column is an exact-match filter and they combine with AND
     * (?code=de-DE); each one is declared as a query parameter above. A
     * `?column=value` this entity does not have is DROPPED rather than refused
     * — the call answers 200 with the unfiltered list — and `filter` echoes
     * what was actually applied, which is the only way to tell that apart from a
     * filter that matched nothing. `market_id` is not among them: the owning
     * market comes from the path and overwrites anything the query says. An
     * unknown but well-formed market lists empty rather than 404 — the parent
     * is filtered on, not verified.
     *
     * @param string $marketId
     * @param ?string $id
     * @param ?string $code
     * @param ?string $language
     * @param ?string $country
     * @param ?bool $isDefault
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalesList(string $marketId, ?string $id = null, ?string $code = null, ?string $language = null, ?string $country = null, ?bool $isDefault = null, ?int $position = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($language)) {
            $apiParams['language'] = $language;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * The owning market comes from the path and overrides anything in the body.
     *
     * @param string $marketId
     * @param string $code
     * @param string $country
     * @param string $language
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalesCreate(string $marketId, string $code, string $country, string $language, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;
        $apiParams['country'] = $country;
        $apiParams['language'] = $language;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Scoped to the market in the path — a row belonging to another market is a
     * 404 here, and is never deleted.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Scoped strictly to the market in the path: a row belonging to another
     * market is a 404 here, never a 200.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Partial: omitted fields keep their value.
     *
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?string $country
     * @param ?bool $isDefault
     * @param ?string $language
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function marketsLocalesUpdate(string $marketId, string $id, ?string $code = null, ?string $country = null, ?bool $isDefault = null, ?string $language = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($language)) {
            $apiParams['language'] = $language;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Every column is an exact-match filter and they combine with AND
     * (?code=standard); each one is declared as a query parameter above. A
     * `?column=value` this entity does not have is DROPPED rather than refused
     * — the call answers 200 with the unfiltered list — and `filter` echoes
     * what was actually applied, which is the only way to tell that apart from a
     * filter that matched nothing. `market_id` is not among them: the owning
     * market comes from the path and overwrites anything the query says. An
     * unknown but well-formed market lists empty rather than 404 — the parent
     * is filtered on, not verified.
     *
     * @param string $marketId
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $labels
     * @param ?float $rate
     * @param ?bool $isDefault
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketsTaxClassesList(string $marketId, ?string $id = null, ?string $code = null, ?string $name = null, ?string $labels = null, ?float $rate = null, ?bool $isDefault = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($rate)) {
            $apiParams['rate'] = $rate;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * The owning market comes from the path and overrides anything in the body.
     *
     * @param string $marketId
     * @param string $code
     * @param string $name
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?float $rate
     * @throws RevenexxException
     * @return array
     */
    public function marketsTaxClassesCreate(string $marketId, string $code, string $name, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?float $rate = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rate)) {
            $apiParams['rate'] = $rate;
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
     * Refused with a 409 for as long as another app still points at this tax
     * class by its code. A tax class is the source of record for a rate, and
     * other apps name it by CODE with no foreign key behind it — a cross-app FK
     * is what ADR-0055 forbids. So this asks the shipping app what still uses the
     * code (shipping.tax-classes.usage) and answers 409 with the count and the
     * first few names rather than leaving methods quoting a rate nobody defines.
     * The check FAILS OPEN: a tenant without the shipping app, or an unreachable
     * one, deletes as before, and the answer says which happened in
     * 'usage_checked'. Matched on the code, which is shared across markets —
     * the refusal message says so.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsTaxClassesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Scoped strictly to the market in the path: a row belonging to another
     * market is a 404 here, never a 200.
     *
     * @param string $marketId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketsTaxClassesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * Partial: omitted fields keep their value.
     *
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $name
     * @param ?int $position
     * @param ?float $rate
     * @throws RevenexxException
     * @return array
     */
    public function marketsTaxClassesUpdate(string $marketId, string $id, ?string $code = null, ?bool $isDefault = null, ?array $labels = null, ?string $name = null, ?int $position = null, ?float $rate = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rate)) {
            $apiParams['rate'] = $rate;
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
}