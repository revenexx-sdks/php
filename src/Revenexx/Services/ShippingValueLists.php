<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Tone;
use Revenexx\Enums\ShippingVocabulariesGetName;

class ShippingValueLists extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * What class of service a carrier row represents. This used to be a CHECK
     * constraint, which meant a merchant with a night-courier tier or a two-man
     * delivery service needed a release of this app to say so — and nothing in
     * the app ever branched on the value, it only carried it. The set is the
     * tenant's rows now, and the first read seeds it, so this never answers
     * empty. Hand-rolled rather than a generic mount, because seeding is the
     * point: it therefore honours limit/offset AND NOTHING ELSE. There is no
     * `?code=` filter and no `order` — the rows always come back in `position`
     * order, and a sort or a filter sent anyway is accepted, ignored, and
     * answered 200.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsList(?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/service-levels'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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
     * A service level is the class of service a carrier row represents, as one of
     * the tenant's own codes. It is carried by `shipping_carriers.service_level`
     * and reported on a rate as `carrier_service_level`; nothing in this app
     * branches on it. A method never names one — it gets its level through the
     * carrier it ships with. Reach for this when a merchant sells a class this
     * app was not shipped with — a night courier, a two-man delivery, a
     * same-day run. A create cannot omit `code` and `title`; every other column
     * is optional or defaulted by the database. Two rows of this tenant may not
     * share `code` — that is the 409. The code is lowercase and becomes what a
     * carrier stores; it cannot be changed afterwards, because every carrier
     * carrying it would be orphaned. Creating one changes nothing on its own: a
     * carrier has to be moved onto it before it means anything.
     *
     * @param string $code
     * @param string $title
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsCreate(string $code, string $title, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/service-levels'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['title'] = $title;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * There is no foreign key doing this: adding one to a table that starts empty
     * would fail the migration of every existing tenant. The refusal lives in the
     * handler instead.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/service-levels/{id}'
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
     * A service level is the class of service a carrier row represents, as one of
     * the tenant's own codes. It is carried by `shipping_carriers.service_level`
     * and reported on a rate as `carrier_service_level`; nothing in this app
     * branches on it. A method never names one — it gets its level through the
     * carrier it ships with. This reads one of them by ROW ID — which is what
     * an editor holds after listing the set, and not what anything else in the
     * platform stores. A caller holding the CODE (off a carrier row, or off a
     * rate's `carrier_service_level`) cannot use this route: there is no `?code=`
     * filter on the collection either, so read GET
     * /shipping/vocabularies/service-levels, which is keyed the way the rest of
     * the platform refers to these values.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/service-levels/{id}'
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
     * A service level is the class of service a carrier row represents, as one of
     * the tenant's own codes. It is carried by `shipping_carriers.service_level`
     * and reported on a rate as `carrier_service_level`; nothing in this app
     * branches on it. A method never names one — it gets its level through the
     * carrier it ships with. This edits the DISPLAY half of one — title,
     * description, their locale maps, badge tone, position, and the default flag.
     * Everything a carrier or a filter joins on stays put: the code is immutable
     * (a different one in the payload is a 400, not a silent no-op), and no
     * carrier is moved onto or off this level by renaming it. Moving a row's
     * `position` does not renumber its neighbours — the collection is returned
     * in position order and ties fall back to whatever the database returns, so a
     * deliberate order means writing every row's position.
     *
     * @param string $id
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?string $title
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsUpdate(string $id, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?string $title = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/service-levels/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * The flag is a single answer, not a per-row opinion: it is what every
     * fallback lands on, so two defaults leave the result to row order and none
     * leaves it to the seeded value. This row takes it and whoever was holding it
     * is demoted in the same call — there is no separate write to clear the old
     * one, and no window in which both carry it. Only the rows whose flag is
     * wrong are written, so repeating the call is free.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function shippingServiceLevelsMakeDefault(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/service-levels/{id}/make-default'
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
     * Discovery for the vocabulary routes: every enum this app publishes, each
     * with its name, its title and its description, and deliberately without its
     * values — an index stays an index, and the set a value belongs to is one
     * further call. Names: carrier-statuses, matrix-bases, pricing-types,
     * service-levels, weight-units. Fetch one with GET
     * /shipping/vocabularies/{name}; a client holding the qualified pair
     * 'shipping.<name>' builds that URL from the pair alone. `title` and
     * `description` are either one string or a locale map keyed by locale —
     * every entry here carries the map, because every one of them is curated
     * copy.
     *
     * @throws RevenexxException
     * @return array
     */
    public function shippingVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/vocabularies'
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
     * One vocabulary in full: every value it permits, each carrying the title to
     * show, the description to explain it and the badge tone to draw it in —
     * everything a select or a status chip needs, so nothing has to be labelled a
     * second time in a client. Two sources, one guarantee: what is served is what
     * is enforced, so no UI keeps a second copy. 'source: schema' means the
     * values are read out of a CHECK constraint — a value added to the
     * constraint appears here even before anyone labels it, titled from its own
     * key, in constraint order. 'source: table' means the values are the TENANT's
     * own rows (service-levels, weight-units), read per request and seeded on
     * first use, so a merchant may add one without a release of this app; those
     * values also carry labels/descriptions, is_system and is_default, and
     * weight-units carries the conversion factor. 'closed' says the set is
     * exhaustive either way, so a value outside it is stale data rather than a
     * missing label. `title` and `description` — the vocabulary's and every
     * value's — are either one string or a locale map keyed by locale: curated
     * copy carries the map, a value titled from its own key carries the string.
     * Names: carrier-statuses, matrix-bases, pricing-types, service-levels,
     * weight-units.
     *
     * @param ShippingVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function shippingVocabulariesGet(ShippingVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/shipping/vocabularies/{name}'
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
     * Not a taxonomy: a unit is a code PLUS a factor, and the factor prices
     * parcels. `factor` is how many kilograms one of this unit weighs, so a
     * matrix keyed in one unit can price a request expressed in another. Exactly
     * one row is the BASE (kg, factor 1) — the anchor every other factor and
     * every stored rate tier is expressed in — and it is fixed at install.
     * Seeded on first read, so this never answers empty. Like the service levels
     * it is hand-rolled and honours limit/offset AND NOTHING ELSE: no column
     * filter, no `order`, always `position` order, and a sort sent anyway is
     * ignored rather than refused.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsList(?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/weight-units'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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
     * Reach for this when a merchant weighs goods in something this app was not
     * shipped with — a tonne for pallet freight, a carat for jewellery — and
     * wants a rate matrix keyed in it. `factor` is required and must be greater
     * than 0: zero does not convert a weight, it divides by it, and a negative
     * factor turns a parcel into a credit. The new unit is never the base —
     * which unit anchors the others is decided at install, and moving it would
     * silently reprice every weight matrix in the shop.
     *
     * @param string $code
     * @param float $factor
     * @param string $title
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsCreate(string $code, float $factor, string $title, ?string $description = null, ?array $descriptions = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/weight-units'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['factor'] = $factor;
        $apiParams['title'] = $title;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * The market check is best effort by design — the setting is per market and
     * this request carries one, so another market may still name the unit. That
     * case degrades to the market falling back to the flagged unit rather than
     * failing its quotes.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/weight-units/{id}'
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
     * A weight unit is a code PLUS a factor — how many kilograms one of this
     * unit weighs — and the factor is what prices parcels: a rate request
     * expressed in one unit is converted through the two factors into the unit
     * the market's tiers are keyed in. Exactly one row is the base (kg, factor
     * 1), fixed at install. This reads one of them by ROW ID, which is what an
     * editor holds after listing the set; a caller holding the CODE (a market's
     * `weight_unit` setting, a rate request's `weight_unit`) has no filter for it
     * here and should read GET /shipping/vocabularies/weight-units instead.
     * Reading the factor back is NOT how a past quote is checked: a rate answer
     * echoes the factors it applied in `basis.weight_unit_factor` and
     * `basis.request_weight_unit_factor` precisely so it stays re-derivable after
     * this row has been edited.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/weight-units/{id}'
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
     * Everything but the code and the base flag. A factor sent for the BASE unit
     * is refused rather than silently ignored: it reads as 1 because every other
     * factor is relative to it, so changing it would rescale the whole table
     * without touching another row.
     *
     * @param string $id
     * @param ?string $description
     * @param ?array $descriptions
     * @param ?float $factor
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?string $title
     * @param ?Tone $tone
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsUpdate(string $id, ?string $description = null, ?array $descriptions = null, ?float $factor = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?string $title = null, ?Tone $tone = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/weight-units/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['description'] = $description;
        $apiParams['descriptions'] = $descriptions;

        if (!is_null($factor)) {
            $apiParams['factor'] = $factor;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($tone)) {
            $apiParams['tone'] = $tone;
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
     * The flag is a single answer, not a per-row opinion: it is what every
     * fallback lands on, so two defaults leave the result to row order and none
     * leaves it to the seeded value. This row takes it and whoever was holding it
     * is demoted in the same call — there is no separate write to clear the old
     * one, and no window in which both carry it. Only the rows whose flag is
     * wrong are written, so repeating the call is free.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function shippingWeightUnitsMakeDefault(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/weight-units/{id}/make-default'
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
}