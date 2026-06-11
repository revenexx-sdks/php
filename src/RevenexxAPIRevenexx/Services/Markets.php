<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

class Markets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
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
    public function marketsCreate(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesList(string $marketId): array
    {
        $apiPath = str_replace(
            ['{marketId}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesCreate(string $marketId): array
    {
        $apiPath = str_replace(
            ['{marketId}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesUpdate(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesList(string $marketId): array
    {
        $apiPath = str_replace(
            ['{marketId}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesCreate(string $marketId): array
    {
        $apiPath = str_replace(
            ['{marketId}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
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
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesUpdate(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{marketId}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
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
}