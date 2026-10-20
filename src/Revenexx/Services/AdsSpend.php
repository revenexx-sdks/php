<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Model;

class AdsSpend extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Spend per day, clicks and consented conversions per day, from the first
     * active day to the last with every day between, at most the latest 60; and
     * spend per ad campaign, largest first. Spend in the account's currency only;
     * words in the caller's language. Reads only.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsSpendFigures(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/accounts/{id}/figures'
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
     * Revenue as campaigns attributes it under the model, divided by the ad spend
     * booked here in the campaign's currency, with spend per platform.
     *
     * @param string $campaignId
     * @param ?Model $model
     * @throws RevenexxException
     * @return array
     */
    public function adsSpendRoas(string $campaignId, ?Model $model = null): array
    {
        $apiPath = str_replace(
            ['{campaign_id}'],
            [$campaignId],
            '/v1/ads/campaigns/{campaign_id}/roas'
        );

        $apiParams = [];
        $apiParams['campaign_id'] = $campaignId;

        if (!is_null($model)) {
            $apiParams['model'] = $model;
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
     * Filter `?campaign_id=`, `?ad_account_id=`, `?booking_state=unlinked`,
     * `?spend_date=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $adAccountId
     * @param ?string $externalCampaignId
     * @param ?string $linkId
     * @param ?string $campaignId
     * @param ?string $platform
     * @param ?string $spendDate
     * @param ?string $currency
     * @param ?string $impressions
     * @param ?string $clicks
     * @param ?string $bookingState
     * @param ?string $bookingError
     * @throws RevenexxException
     * @return array
     */
    public function adsSpendList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $adAccountId = null, ?string $externalCampaignId = null, ?string $linkId = null, ?string $campaignId = null, ?string $platform = null, ?string $spendDate = null, ?string $currency = null, ?string $impressions = null, ?string $clicks = null, ?string $bookingState = null, ?string $bookingError = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/spend'
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

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }

        if (!is_null($externalCampaignId)) {
            $apiParams['external_campaign_id'] = $externalCampaignId;
        }

        if (!is_null($linkId)) {
            $apiParams['link_id'] = $linkId;
        }

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
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

        if (!is_null($bookingState)) {
            $apiParams['booking_state'] = $bookingState;
        }

        if (!is_null($bookingError)) {
            $apiParams['booking_error'] = $bookingError;
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
     * Called by the daily spend workflow. Each row is kept per account, ad
     * campaign and day; a second import of a day replaces it. Mapped spend is
     * booked into the campaign budget, summed per campaign, platform and day.
     *
     * @param array $rows
     * @throws RevenexxException
     * @return array
     */
    public function adsSpendImport(array $rows): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/spend'
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
    public function adsSpendGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/spend/{id}'
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