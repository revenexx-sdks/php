<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class AdsLinks extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?campaign_id=` for one campaign, `?campaign_id=` empty via the
     * Cockpit for unmapped ones, `?ad_account_id=`. Mapping books the imported
     * spend into the campaign.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $adAccountId
     * @param ?string $externalCampaignId
     * @param ?string $externalName
     * @param ?string $campaignId
     * @throws RevenexxException
     * @return array
     */
    public function adsLinksList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $adAccountId = null, ?string $externalCampaignId = null, ?string $externalName = null, ?string $campaignId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/campaign-links'
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

        if (!is_null($externalName)) {
            $apiParams['external_name'] = $externalName;
        }

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
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
     * @param string $adAccountId
     * @param string $externalCampaignId
     * @param ?string $campaignId
     * @param ?string $externalName
     * @param ?mixed $externalRefs
     * @param ?mixed $metadata
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function adsLinksCreate(string $adAccountId, string $externalCampaignId, ?string $campaignId = null, ?string $externalName = null, mixed $externalRefs = null, mixed $metadata = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/campaign-links'
        );

        $apiParams = [];
        $apiParams['ad_account_id'] = $adAccountId;
        $apiParams['external_campaign_id'] = $externalCampaignId;
        $apiParams['campaign_id'] = $campaignId;
        $apiParams['external_name'] = $externalName;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

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
    public function adsLinksDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/campaign-links/{id}'
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
    public function adsLinksGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/campaign-links/{id}'
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
     * @param ?string $adAccountId
     * @param ?string $campaignId
     * @param ?string $externalCampaignId
     * @param ?string $externalName
     * @param ?mixed $externalRefs
     * @param ?mixed $metadata
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function adsLinksUpdate(string $id, ?string $adAccountId = null, ?string $campaignId = null, ?string $externalCampaignId = null, ?string $externalName = null, mixed $externalRefs = null, mixed $metadata = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/campaign-links/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }
        $apiParams['campaign_id'] = $campaignId;

        if (!is_null($externalCampaignId)) {
            $apiParams['external_campaign_id'] = $externalCampaignId;
        }
        $apiParams['external_name'] = $externalName;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

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