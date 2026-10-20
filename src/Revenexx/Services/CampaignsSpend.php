<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsSpend extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List booked days of ad spend
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $campaignId
     * @param ?string $budgetId
     * @param ?string $platform
     * @param ?string $spendDate
     * @param ?string $currency
     * @param ?string $impressions
     * @param ?string $clicks
     * @throws RevenexxException
     * @return array
     */
    public function campaignsSpendList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $campaignId = null, ?string $budgetId = null, ?string $platform = null, ?string $spendDate = null, ?string $currency = null, ?string $impressions = null, ?string $clicks = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/spend'
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

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($budgetId)) {
            $apiParams['budget_id'] = $budgetId;
        }

        if (!is_null($platform)) {
            $apiParams['platform'] = $platform;
        }

        if (!is_null($spendDate)) {
            $apiParams['spend_date'] = $spendDate;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($impressions)) {
            $apiParams['impressions'] = $impressions;
        }

        if (!is_null($clicks)) {
            $apiParams['clicks'] = $clicks;
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
     * At most 500 rows. Each books one day of one platform into the campaign ads
     * budget line, created on first use; booking a day again replaces it.
     *
     * @param array $rows
     * @throws RevenexxException
     * @return array
     */
    public function campaignsSpendImport(array $rows): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/spend'
        );

        $apiParams = [];
        $apiParams['rows'] = $rows;

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
    public function campaignsSpendGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/spend/{id}'
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