<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

class Carts extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts'
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
    public function cartsCreate(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts'
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
    public function cartsClaim(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/claim'
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
    public function cartsImport(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/import'
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
    public function cartsIoProfilesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
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
    public function cartsIoProfilesCreate(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles'
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
    public function cartsIoProfilesDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/io/profiles/defaults'
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
    public function cartsIoProfilesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
    public function cartsIoProfilesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
    public function cartsIoProfilesUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/io/profiles/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsMerge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/carts/merge'
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
     * @param string $cartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsList(string $cartId): array
    {
        $apiPath = str_replace(
            ['{cartId}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $cartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsCreate(string $cartId): array
    {
        $apiPath = str_replace(
            ['{cartId}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

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
     * @param string $cartId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsReplace(string $cartId): array
    {
        $apiPath = str_replace(
            ['{cartId}'],
            [$cartId],
            '/v1/carts/{cart_id}/items'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

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
     * @param string $cartId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsDelete(string $cartId, string $id): array
    {
        $apiPath = str_replace(
            ['{cartId}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
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
     * @param string $cartId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsGet(string $cartId, string $id): array
    {
        $apiPath = str_replace(
            ['{cartId}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
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
     * @param string $cartId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function cartsItemsUpdate(string $cartId, string $id): array
    {
        $apiPath = str_replace(
            ['{cartId}', '{id}'],
            [$cartId, $id],
            '/v1/carts/{cart_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
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
    public function cartsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
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
    public function cartsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
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
    public function cartsUpdate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}'
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
    public function cartsAbandon(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/abandon'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
    public function cartsActivate(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/activate'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
    public function cartsExport(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/export'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
    public function cartsOrder(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/order'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
    public function cartsReopen(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/carts/{id}/reopen'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}