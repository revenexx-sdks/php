<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsTouches extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?campaign_id=`, `?kind=`, `?contact_id=`. Read-only.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $touchKey
     * @param ?string $campaignId
     * @param ?string $kind
     * @param ?string $ref
     * @param ?string $contactId
     * @param ?string $sessionKey
     * @param ?string $orderId
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTouchesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $touchKey = null, ?string $campaignId = null, ?string $kind = null, ?string $ref = null, ?string $contactId = null, ?string $sessionKey = null, ?string $orderId = null, ?string $market = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/touches'
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

        if (!is_null($touchKey)) {
            $apiParams['touch_key'] = $touchKey;
        }

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($ref)) {
            $apiParams['ref'] = $ref;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($sessionKey)) {
            $apiParams['session_key'] = $sessionKey;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
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
     * A batch of at most 500 on-site impressions, on-site clicks and ad clicks.
     * Each item is judged on its own; an item with a key already recorded is
     * counted as a duplicate.
     *
     * @param array $touches
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTouchesIngest(array $touches): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/touches'
        );

        $apiParams = [];
        $apiParams['touches'] = $touches;

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
    public function campaignsTouchesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/touches/{id}'
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