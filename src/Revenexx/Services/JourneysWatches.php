<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysWatches extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?product_id=&state=waiting`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $contactId
     * @param ?string $email
     * @param ?string $productId
     * @param ?string $sku
     * @param ?string $market
     * @param ?string $state
     * @param ?string $source
     * @throws RevenexxException
     * @return array
     */
    public function journeysWatchesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $contactId = null, ?string $email = null, ?string $productId = null, ?string $sku = null, ?string $market = null, ?string $state = null, ?string $source = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/stock-watches'
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

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * What the storefront posts from a sold-out product page. A person already
     * waiting for the product gets the existing request back.
     *
     * @param ?string $contactId
     * @param ?string $email
     * @param ?string $market
     * @param ?string $productId
     * @param ?string $sku
     * @param ?string $source
     * @throws RevenexxException
     * @return array
     */
    public function journeysWatchesCreate(?string $contactId = null, ?string $email = null, ?string $market = null, ?string $productId = null, ?string $sku = null, ?string $source = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/stock-watches'
        );

        $apiParams = [];

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function journeysWatchesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/stock-watches/{id}'
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
     * @throws RevenexxException
     * @return array
     */
    public function journeysWatchesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/stock-watches/{id}'
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
}