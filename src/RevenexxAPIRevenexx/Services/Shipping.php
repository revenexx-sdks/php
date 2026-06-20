<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\ShippingMethodMatrixBasis;
use RevenexxAPIRevenexx\Enums\ShippingMethodPricingType;

class Shipping extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingMethodsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/methods'
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
     * @param string $code
     * @param string $name
     * @param ?string $carrier
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingMethodsCreate(string $code, string $name, ?string $carrier = null, ?array $countries = null, ?string $currency = null, ?string $description = null, ?bool $enabled = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?float $freeAbove = null, ?array $labels = null, ?string $matrixAttribute = null, ?ShippingMethodMatrixBasis $matrixBasis = null, ?array $metadata = null, ?int $position = null, ?float $price = null, ?ShippingMethodPricingType $pricingType = null): array
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
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $carrier
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingMethodsUpdate(string $id, ?string $carrier = null, ?string $code = null, ?array $countries = null, ?string $currency = null, ?string $description = null, ?bool $enabled = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?float $freeAbove = null, ?array $labels = null, ?string $matrixAttribute = null, ?ShippingMethodMatrixBasis $matrixBasis = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?float $price = null, ?ShippingMethodPricingType $pricingType = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/methods/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['carrier'] = $carrier;

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
     * @param string $methodId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingTiersList(string $methodId): array
    {
        $apiPath = str_replace(
            ['{method_id}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $methodId
     * @param ?float $fromValue
     * @param ?int $position
     * @param ?float $price
     * @throws RevenexxAPIRevenexxException
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
     * @param string $methodId
     * @param array $tiers
     * @throws RevenexxAPIRevenexxException
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
     * @param string $methodId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $methodId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $methodId
     * @param string $id
     * @param ?float $fromValue
     * @param ?int $position
     * @param ?float $price
     * @throws RevenexxAPIRevenexxException
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
     * @param ?array $attributes
     * @param ?string $country
     * @param ?string $currency
     * @param ?string $marketId
     * @param ?float $orderValue
     * @param ?float $quantity
     * @param ?float $weight
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingRates(?array $attributes = null, ?string $country = null, ?string $currency = null, ?string $marketId = null, ?float $orderValue = null, ?float $quantity = null, ?float $weight = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/rates'
        );

        $apiParams = [];
        $apiParams['attributes'] = $attributes;
        $apiParams['country'] = $country;
        $apiParams['currency'] = $currency;
        $apiParams['market_id'] = $marketId;
        $apiParams['order_value'] = $orderValue;
        $apiParams['quantity'] = $quantity;
        $apiParams['weight'] = $weight;

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