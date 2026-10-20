<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsAttribution extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The ledger. Filter `?campaign_id=`, `?order_id=`, `?is_last_touch=true`.
     * Read-only: facts are written from orders, redemptions and touches.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $factKey
     * @param ?string $campaignId
     * @param ?string $orderId
     * @param ?string $orderNumber
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $currency
     * @param ?string $market
     * @param ?string $touchKind
     * @param ?string $touchRef
     * @param ?string $isFirstTouch
     * @throws RevenexxException
     * @return array
     */
    public function campaignsAttributionList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $factKey = null, ?string $campaignId = null, ?string $orderId = null, ?string $orderNumber = null, ?string $contactId = null, ?string $organizationId = null, ?string $currency = null, ?string $market = null, ?string $touchKind = null, ?string $touchRef = null, ?string $isFirstTouch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/attribution-facts'
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

        if (!is_null($factKey)) {
            $apiParams['fact_key'] = $factKey;
        }

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($orderNumber)) {
            $apiParams['order_number'] = $orderNumber;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($touchKind)) {
            $apiParams['touch_kind'] = $touchKind;
        }

        if (!is_null($touchRef)) {
            $apiParams['touch_ref'] = $touchRef;
        }

        if (!is_null($isFirstTouch)) {
            $apiParams['is_first_touch'] = $isFirstTouch;
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function campaignsAttributionGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/attribution-facts/{id}'
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
     * The hourly schedule, callable by hand: reads committed redemptions of
     * attached promotions and orders placed in the last 48 hours from their apps,
     * and records facts under the same keys the event handlers use. Also moves
     * campaigns whose window opened or closed.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function campaignsAttributionSweep(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/attribution/sweep'
        );

        $apiParams = [];
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