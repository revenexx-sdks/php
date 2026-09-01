<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PricingType;
use Revenexx\Enums\ShippingMethodMatrixBasis;
use Revenexx\Enums\ShippingMethodPricingType;

class ShippingMethods extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filterable by exact column value — `?code=`, `?enabled=`,
     * `?pricing_type=`, `?carrier_id=`, `?carrier=` and `?tax_class=` are applied
     * as equalities and echoed back in `filter`. `?carrier_id=` and `?carrier=`
     * are the two halves of one question: the first finds the methods holding a
     * reference, the second the ones still resolving through the legacy code
     * text. A query key that names no column of this entity is SILENTLY IGNORED
     * — `?status=` on this route is the trap, since carriers have a status and
     * methods do not: the page comes back unfiltered, 200, with an empty
     * `filter`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $code
     * @param ?bool $enabled
     * @param ?PricingType $pricingType
     * @param ?string $carrierId
     * @param ?string $carrier
     * @param ?string $taxClass
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $code = null, ?bool $enabled = null, ?PricingType $pricingType = null, ?string $carrierId = null, ?string $carrier = null, ?string $taxClass = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/methods'
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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($pricingType)) {
            $apiParams['pricing_type'] = $pricingType;
        }

        if (!is_null($carrierId)) {
            $apiParams['carrier_id'] = $carrierId;
        }

        if (!is_null($carrier)) {
            $apiParams['carrier'] = $carrier;
        }

        if (!is_null($taxClass)) {
            $apiParams['tax_class'] = $taxClass;
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
     * A shipping method is the line a buyer picks in the checkout: a pricing
     * model ('fixed', 'free' or 'matrix'), the countries it may be offered into,
     * a free-above threshold, and the carrier it ships with. The method owns the
     * PRICE; the delivery promise — tracking template, cut-off, handling and
     * transit days — is inherited from the carrier wherever the method states
     * none of its own. A create cannot omit `code` and `name`; every other column
     * is optional or defaulted by the database. Two rows of this tenant may not
     * share `code` — that is the 409. The new method is quoted by nobody until
     * two further things are true: `enabled` defaults to FALSE, and a 'matrix'
     * method has no tiers yet — until POST or PUT …/tiers gives it some it
     * appears in `excluded` with 'matrix has no rate tiers configured' rather
     * than in the rates. `carrier_id` and the legacy `carrier` code are both
     * accepted and neither is verified against the carrier table here: an
     * unmatched code is a plain carrier name on the rate, not an error.
     *
     * @param string $code
     * @param string $name
     * @param ?string $carrier
     * @param ?string $carrierId
     * @param ?array $countries
     * @param ?string $currency
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?int $etaDaysMax
     * @param ?int $etaDaysMin
     * @param ?float $freeAbove
     * @param ?array $labels
     * @param ?string $matrixAttribute
     * @param ?ShippingMethodMatrixBasis $matrixBasis
     * @param ?array $metadata
     * @param ?int $position
     * @param ?float $price
     * @param ?ShippingMethodPricingType $pricingType
     * @param ?float $quoteAbove
     * @param ?string $taxClass
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsCreate(string $code, string $name, ?string $carrier = null, ?string $carrierId = null, ?array $countries = null, ?string $currency = null, ?string $description = null, ?bool $enabled = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?float $freeAbove = null, ?array $labels = null, ?string $matrixAttribute = null, ?ShippingMethodMatrixBasis $matrixBasis = null, ?array $metadata = null, ?int $position = null, ?float $price = null, ?ShippingMethodPricingType $pricingType = null, ?float $quoteAbove = null, ?string $taxClass = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/methods'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['carrier'] = $carrier;
        $apiParams['carrier_id'] = $carrierId;
        $apiParams['countries'] = $countries;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['eta_days_max'] = $etaDaysMax;
        $apiParams['eta_days_min'] = $etaDaysMin;
        $apiParams['free_above'] = $freeAbove;
        $apiParams['labels'] = $labels;
        $apiParams['matrix_attribute'] = $matrixAttribute;
        $apiParams['matrix_basis'] = $matrixBasis;
        $apiParams['metadata'] = $metadata;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($price)) {
            $apiParams['price'] = $price;
        }

        if (!is_null($pricingType)) {
            $apiParams['pricing_type'] = $pricingType;
        }
        $apiParams['quote_above'] = $quoteAbove;
        $apiParams['tax_class'] = $taxClass;

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
     * Runs the carrier seed first, then creates any missing method: the three
     * lines a shop is expected to offer — standard, express and pickup. The app
     * runs this itself on `app.installed`, so a fresh install already has them;
     * calling it by hand afterwards is how a tenant that deleted one gets it
     * back, and calling it twice costs nothing, because it reconciles rather than
     * seeds. The seeded methods deliberately name no carrier: which carrier
     * carries the standard method is a contract, not a default, and a method that
     * says 'dhl' resolves to the seeded DHL row anyway.
     *
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/methods/defaults'
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
     * Deleting one takes every `shipping_rate_tiers` row that points at it with
     * it — the foreign keys decide that, not this route. So the whole rate
     * matrix goes with the method, which is also why this never answers a
     * conflict and why there is no way to recover the table afterwards — for a
     * method a checkout may still be holding in a session, `enabled: false` is
     * the safer edit.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/methods/{id}'
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
     * A shipping method is the line a buyer picks in the checkout: a pricing
     * model ('fixed', 'free' or 'matrix'), the countries it may be offered into,
     * a free-above threshold, and the carrier it ships with. The method owns the
     * PRICE; the delivery promise — tracking template, cut-off, handling and
     * transit days — is inherited from the carrier wherever the method states
     * none of its own. This is the CONFIGURATION of one, by row id — not what a
     * buyer would be charged. A matrix method's prices are not in here at all:
     * they are its rate tiers, GET /shipping/methods/{method_id}/tiers, and the
     * price for a given basket is POST /shipping/rates, which is the only place
     * free-above thresholds, country restrictions, the carrier's reach and tax
     * are applied. A checkout that reads `price` off this row prices a matrix
     * method at 0.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/methods/{id}'
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
     * A shipping method is the line a buyer picks in the checkout: a pricing
     * model ('fixed', 'free' or 'matrix'), the countries it may be offered into,
     * a free-above threshold, and the carrier it ships with. The method owns the
     * PRICE; the delivery promise — tracking template, cut-off, handling and
     * transit days — is inherited from the carrier wherever the method states
     * none of its own. A partial update — send only what changes, whether that
     * is taking the method in or out of the checkout, its pricing, the countries
     * it is restricted to or the delivery estimate it states of its own; a
     * payload carrying no column at all is refused rather than answering a row it
     * did not touch. Flipping `enabled` is what puts the method in front of a
     * buyer or takes it away, and a disabled method is reported in the rate
     * answer's `excluded` rather than hidden. Changing `pricing_type` away from
     * 'matrix' does NOT delete the tier table — it stops being read, and
     * changing back reinstates the old prices, so a method switched to 'fixed'
     * and back quotes what it quoted before. Two rows of this tenant may not
     * share `code` — that is the 409.
     *
     * @param string $id
     * @param ?string $carrier
     * @param ?string $carrierId
     * @param ?string $code
     * @param ?array $countries
     * @param ?string $currency
     * @param ?string $description
     * @param ?bool $enabled
     * @param ?int $etaDaysMax
     * @param ?int $etaDaysMin
     * @param ?float $freeAbove
     * @param ?array $labels
     * @param ?string $matrixAttribute
     * @param ?ShippingMethodMatrixBasis $matrixBasis
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?float $price
     * @param ?ShippingMethodPricingType $pricingType
     * @param ?float $quoteAbove
     * @param ?string $taxClass
     * @throws RevenexxException
     * @return array
     */
    public function shippingMethodsUpdate(string $id, ?string $carrier = null, ?string $carrierId = null, ?string $code = null, ?array $countries = null, ?string $currency = null, ?string $description = null, ?bool $enabled = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?float $freeAbove = null, ?array $labels = null, ?string $matrixAttribute = null, ?ShippingMethodMatrixBasis $matrixBasis = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?float $price = null, ?ShippingMethodPricingType $pricingType = null, ?float $quoteAbove = null, ?string $taxClass = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/methods/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['carrier'] = $carrier;
        $apiParams['carrier_id'] = $carrierId;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['countries'] = $countries;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['eta_days_max'] = $etaDaysMax;
        $apiParams['eta_days_min'] = $etaDaysMin;
        $apiParams['free_above'] = $freeAbove;
        $apiParams['labels'] = $labels;
        $apiParams['matrix_attribute'] = $matrixAttribute;
        $apiParams['matrix_basis'] = $matrixBasis;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($price)) {
            $apiParams['price'] = $price;
        }

        if (!is_null($pricingType)) {
            $apiParams['pricing_type'] = $pricingType;
        }
        $apiParams['quote_above'] = $quoteAbove;
        $apiParams['tax_class'] = $taxClass;

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
     * The rate matrix of one method — every `from_value` threshold with the
     * price charged at or above it — lowest threshold first. Filterable by
     * `?from_value=` — the unique index is (tenant_id, method_id, from_value),
     * so that addresses one row of the matrix by the threshold it prices rather
     * than by an id a bulk replace has already discarded. The applied filters are
     * echoed in `filter`, which always carries the `method_id` taken from the
     * path.
     *
     * @param string $methodId
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?float $fromValue
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersList(string $methodId, ?int $limit = null, ?int $offset = null, ?string $order = null, ?float $fromValue = null): array
    {
        $apiPath = str_replace(
            ['{method_id}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($fromValue)) {
            $apiParams['from_value'] = $fromValue;
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
     * A rate tier is one row of a matrix method's price table: a `from_value`
     * threshold and the price charged at or above it. The bound is INCLUSIVE and
     * the winning tier is the one with the highest `from_value` at or below the
     * measured value, so a measure of exactly 10 is priced by the tier at 10.
     * What the number measures is the method's `matrix_basis` — kilograms in
     * the market's own weight unit, items, money in the method's currency, or a
     * named attribute — and the last tier has no upper bound. This adds ONE row
     * to the table of the method in the path, leaving the rest alone — the edit
     * for a merchant who has added a heavier bracket. To lay a whole table down
     * at once use PUT …/tiers (set semantics) or POST …/tiers/ladder (evenly
     * stepped), and note that both of those DISCARD the ids of the rows they
     * replace. Two rows of this tenant may not share the combination of
     * `method_id` + `from_value` — that is the 409. `method_id` is taken from
     * the path on every write, so a body naming a different method is ignored
     * rather than obeyed.
     *
     * @param string $methodId
     * @param ?float $fromValue
     * @param ?int $position
     * @param ?float $price
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersCreate(string $methodId, ?float $fromValue = null, ?int $position = null, ?float $price = null): array
    {
        $apiPath = str_replace(
            ['{method_id}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;

        if (!is_null($fromValue)) {
            $apiParams['from_value'] = $fromValue;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($price)) {
            $apiParams['price'] = $price;
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
     * The write behind a table editor: a merchant edits the whole matrix on
     * screen and saves it in one call, rather than diffing it into a row added
     * here and a row deleted there. Set semantics, and it replaces EVERY tier the
     * method had: the tiers this method has afterwards are exactly the ones
     * handed in, positions derived from the array order. An empty `tiers` array
     * clears the table — and a matrix method with no tiers quotes nothing, with
     * a reason.
     *
     * @param string $methodId
     * @param array $tiers
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersReplace(string $methodId, array $tiers): array
    {
        $apiPath = str_replace(
            ['{method_id}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
        $apiParams['tiers'] = $tiers;

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
     * The tier table a merchant describes in words — "0 to 30 kg, every 5 kg,
     * €4.90 plus €2 a step" — without typing every row. Replaces the
     * method's tiers by default (set replace=false to append).
     *
     * @param string $methodId
     * @param float $basePrice
     * @param float $step
     * @param float $toValue
     * @param ?float $fromValue
     * @param ?bool $replace
     * @param ?float $stepPrice
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersLadder(string $methodId, float $basePrice, float $step, float $toValue, ?float $fromValue = null, ?bool $replace = null, ?float $stepPrice = null): array
    {
        $apiPath = str_replace(
            ['{method_id}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers/ladder'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
        $apiParams['base_price'] = $basePrice;
        $apiParams['step'] = $step;
        $apiParams['to_value'] = $toValue;
        $apiParams['from_value'] = $fromValue;
        $apiParams['replace'] = $replace;
        $apiParams['step_price'] = $stepPrice;

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
     * A rate tier is one row of a matrix method's price table: a `from_value`
     * threshold and the price charged at or above it. The bound is INCLUSIVE and
     * the winning tier is the one with the highest `from_value` at or below the
     * measured value, so a measure of exactly 10 is priced by the tier at 10.
     * What the number measures is the method's `matrix_basis` — kilograms in
     * the market's own weight unit, items, money in the method's currency, or a
     * named attribute — and the last tier has no upper bound. Removing a tier
     * in the MIDDLE of a table is harmless — the measures it used to cover fall
     * to the highest remaining threshold below them. Removing the LOWEST one is
     * not: a measure under the new lowest threshold matches no tier at all, and
     * the method is then left out of POST /shipping/rates with 'no tier covers
     * measure …' instead of being quoted at 0, so an entire band of baskets
     * silently stops being offered this method. Deleting the last tier takes the
     * method out of the checkout altogether. Rebuilding the table wholesale is
     * PUT …/tiers or POST …/tiers/ladder; deleting the method deletes its
     * tiers on its own.
     *
     * @param string $methodId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersDelete(string $methodId, string $id): array
    {
        $apiPath = str_replace(
            ['{method_id}', '{id}'],
            [$methodId, $id],
            '/v1/shipping/methods/{method_id}/tiers/{id}'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
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
     * A rate tier is one row of a matrix method's price table: a `from_value`
     * threshold and the price charged at or above it. The bound is INCLUSIVE and
     * the winning tier is the one with the highest `from_value` at or below the
     * measured value, so a measure of exactly 10 is priced by the tier at 10.
     * What the number measures is the method's `matrix_basis` — kilograms in
     * the market's own weight unit, items, money in the method's currency, or a
     * named attribute — and the last tier has no upper bound. This reads one
     * row of that table by id, under the method that owns it; a tier id belonging
     * to another method is a 404 rather than somebody else's price. A tier id is
     * not durable: PUT …/tiers and POST …/tiers/ladder replace the table by
     * deleting and recreating it, so an id read before either of them names
     * nothing afterwards. Where a caller wants a stable handle, address the row
     * by what it MEANS — GET …/tiers?from_value=… — since (method_id,
     * from_value) is unique.
     *
     * @param string $methodId
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersGet(string $methodId, string $id): array
    {
        $apiPath = str_replace(
            ['{method_id}', '{id}'],
            [$methodId, $id],
            '/v1/shipping/methods/{method_id}/tiers/{id}'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
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
     * A tier id is not stable across a bulk edit: `PUT …/tiers` and `POST
     * …/tiers/ladder` replace the table by deleting and recreating it, so an id
     * read before either of them is gone afterwards.
     *
     * @param string $methodId
     * @param string $id
     * @param ?float $fromValue
     * @param ?int $position
     * @param ?float $price
     * @throws RevenexxException
     * @return array
     */
    public function shippingTiersUpdate(string $methodId, string $id, ?float $fromValue = null, ?int $position = null, ?float $price = null): array
    {
        $apiPath = str_replace(
            ['{method_id}', '{id}'],
            [$methodId, $id],
            '/v1/shipping/methods/{method_id}/tiers/{id}'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
        $apiParams['id'] = $id;

        if (!is_null($fromValue)) {
            $apiParams['from_value'] = $fromValue;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($price)) {
            $apiParams['price'] = $price;
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
     * The question a checkout asks, and the only route that answers a PRICE. Hand
     * in the buyer context — the destination country, the order value, and
     * whatever the matrix methods measure: a weight, a quantity or a named
     * product attribute — and this comes back with the methods that may be
     * offered and what each of them costs, free-above thresholds, country
     * restrictions, the carrier's delivery promise and tax already applied. A
     * method that does not apply is never an error: it moves to `excluded` with a
     * reason. So is a tax rate that cannot be resolved — `tax.resolved: false`
     * means the rates are UNKNOWN, not untaxed.
     *
     * @param ?string $at
     * @param ?array $attributes
     * @param ?string $country
     * @param ?string $currency
     * @param ?string $marketId
     * @param ?float $orderValue
     * @param ?float $orderValueGross
     * @param ?float $orderValueNet
     * @param ?float $quantity
     * @param ?float $weight
     * @param ?string $weightUnit
     * @throws RevenexxException
     * @return array
     */
    public function shippingRates(?string $at = null, ?array $attributes = null, ?string $country = null, ?string $currency = null, ?string $marketId = null, ?float $orderValue = null, ?float $orderValueGross = null, ?float $orderValueNet = null, ?float $quantity = null, ?float $weight = null, ?string $weightUnit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/rates'
        );

        $apiParams = [];
        $apiParams['at'] = $at;
        $apiParams['attributes'] = $attributes;
        $apiParams['country'] = $country;
        $apiParams['currency'] = $currency;
        $apiParams['market_id'] = $marketId;
        $apiParams['order_value'] = $orderValue;
        $apiParams['order_value_gross'] = $orderValueGross;
        $apiParams['order_value_net'] = $orderValueNet;
        $apiParams['quantity'] = $quantity;
        $apiParams['weight'] = $weight;
        $apiParams['weight_unit'] = $weightUnit;

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
     * markets.tax_classes is the source of record for the rate and this app
     * points at it by CODE from two places: a method's own tax_class and the
     * tenant's shipping_tax_class fallback. Neither is a foreign key and neither
     * could be — a cross-app FK is what ADR-0055 forbids — so integrity is a
     * question one app asks the other, and this is the answering half. It is
     * asked before a destructive edit: markets calls it when an operator tries to
     * delete a tax class, and a count above zero is what stops the delete rather
     * than leaving these methods pointing at a code nobody serves. Matched as a
     * CODE, not a row: a tax class is unique per market, so 'reduced' may exist
     * in several and a method naming it does not say which one it meant. Reports
     * at most 500 methods and names the first 20. Every code answers, used or not
     * — a code nobody points at is `in_use: false`, never a 404.
     *
     * @param string $code
     * @throws RevenexxException
     * @return array
     */
    public function shippingTaxClassesUsage(string $code): array
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/v1/shipping/tax-classes/{code}/usage'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}