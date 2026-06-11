<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingMethodsCreate(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/methods'
        );

        $apiParams = [];

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingMethodsUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/methods/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
            ['{methodId}'],
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingTiersCreate(string $methodId): array
    {
        $apiPath = str_replace(
            ['{methodId}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingTiersReplace(string $methodId): array
    {
        $apiPath = str_replace(
            ['{methodId}'],
            [$methodId],
            '/v1/shipping/methods/{method_id}/tiers'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;

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
            ['{methodId}', '{id}'],
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
            ['{methodId}', '{id}'],
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingTiersUpdate(string $methodId, string $id): array
    {
        $apiPath = str_replace(
            ['{methodId}', '{id}'],
            [$methodId, $id],
            '/v1/shipping/methods/{method_id}/tiers/{id}'
        );

        $apiParams = [];
        $apiParams['method_id'] = $methodId;
        $apiParams['id'] = $id;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function shippingRates(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/rates'
        );

        $apiParams = [];

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