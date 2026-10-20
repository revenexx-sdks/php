<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Destination;

class AdsFeeds extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * One reference per market and destination. The feed itself is built by the
     * seo service.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $market
     * @param ?string $destination
     * @param ?string $feedId
     * @param ?string $feedUrl
     * @param ?string $label
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function adsFeedsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $market = null, ?string $destination = null, ?string $feedId = null, ?string $feedUrl = null, ?string $label = null, ?string $active = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/feed-refs'
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

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($destination)) {
            $apiParams['destination'] = $destination;
        }

        if (!is_null($feedId)) {
            $apiParams['feed_id'] = $feedId;
        }

        if (!is_null($feedUrl)) {
            $apiParams['feed_url'] = $feedUrl;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param Destination $destination
     * @param string $market
     * @param ?bool $active
     * @param ?string $feedId
     * @param ?string $feedUrl
     * @param ?string $label
     * @param ?mixed $metadata
     * @throws RevenexxException
     * @return array
     */
    public function adsFeedsCreate(Destination $destination, string $market, ?bool $active = null, ?string $feedId = null, ?string $feedUrl = null, ?string $label = null, mixed $metadata = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/feed-refs'
        );

        $apiParams = [];
        $apiParams['destination'] = $destination;
        $apiParams['market'] = $market;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['feed_id'] = $feedId;
        $apiParams['feed_url'] = $feedUrl;
        $apiParams['label'] = $label;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
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
    public function adsFeedsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/feed-refs/{id}'
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
    public function adsFeedsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/feed-refs/{id}'
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
     * @param ?bool $active
     * @param ?Destination $destination
     * @param ?string $feedId
     * @param ?string $feedUrl
     * @param ?string $label
     * @param ?string $market
     * @param ?mixed $metadata
     * @throws RevenexxException
     * @return array
     */
    public function adsFeedsUpdate(string $id, ?bool $active = null, ?Destination $destination = null, ?string $feedId = null, ?string $feedUrl = null, ?string $label = null, ?string $market = null, mixed $metadata = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/feed-refs/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($destination)) {
            $apiParams['destination'] = $destination;
        }
        $apiParams['feed_id'] = $feedId;
        $apiParams['feed_url'] = $feedUrl;
        $apiParams['label'] = $label;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
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