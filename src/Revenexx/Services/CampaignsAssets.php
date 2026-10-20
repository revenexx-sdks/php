<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsAssets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?campaign_id=` for one campaign, `?asset_app=&asset_id=` for the
     * campaign that holds an asset. Written only through attach and detach.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $campaignId
     * @param ?string $assetApp
     * @param ?string $assetEntity
     * @param ?string $assetId
     * @param ?string $label
     * @param ?string $claim
     * @param ?string $addedBy
     * @throws RevenexxException
     * @return array
     */
    public function campaignsAssetsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $campaignId = null, ?string $assetApp = null, ?string $assetEntity = null, ?string $assetId = null, ?string $label = null, ?string $claim = null, ?string $addedBy = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/assets'
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

        if (!is_null($assetApp)) {
            $apiParams['asset_app'] = $assetApp;
        }

        if (!is_null($assetEntity)) {
            $apiParams['asset_entity'] = $assetEntity;
        }

        if (!is_null($assetId)) {
            $apiParams['asset_id'] = $assetId;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($claim)) {
            $apiParams['claim'] = $claim;
        }

        if (!is_null($addedBy)) {
            $apiParams['added_by'] = $addedBy;
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
    public function campaignsAssetsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/assets/{id}'
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
     * The same as detaching from the campaign, addressed by the asset row —
     * what a list row offers.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function campaignsAssetsDetach(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/assets/{id}/detach'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
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