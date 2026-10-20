<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\GoalMetric;
use Revenexx\Enums\CampaignsCampaignsCreateStatus;
use Revenexx\Enums\AssetApp;
use Revenexx\Enums\Model;

class CampaignsCampaigns extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every campaign of this tenant. Filter `?effective_state=running` for what
     * runs now, `?utm_campaign=` to resolve the campaign a tracked landing names.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $description
     * @param ?string $status
     * @param ?string $effectiveState
     * @param ?string $ownerId
     * @param ?string $utmCampaign
     * @param ?string $goalMetric
     * @param ?string $currency
     * @param ?string $ordersCount
     * @param ?string $externalId
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $description = null, ?string $status = null, ?string $effectiveState = null, ?string $ownerId = null, ?string $utmCampaign = null, ?string $goalMetric = null, ?string $currency = null, ?string $ordersCount = null, ?string $externalId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/campaigns'
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($effectiveState)) {
            $apiParams['effective_state'] = $effectiveState;
        }

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
        }

        if (!is_null($utmCampaign)) {
            $apiParams['utm_campaign'] = $utmCampaign;
        }

        if (!is_null($goalMetric)) {
            $apiParams['goal_metric'] = $goalMetric;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($ordersCount)) {
            $apiParams['orders_count'] = $ordersCount;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
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
     * @param string $code
     * @param string $name
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?GoalMetric $goalMetric
     * @param ?float $goalValue
     * @param ?mixed $metadata
     * @param ?string $ownerId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $startsAt
     * @param ?CampaignsCampaignsCreateStatus $status
     * @param ?mixed $tags
     * @param ?string $utmCampaign
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsCreate(string $code, string $name, ?string $currency = null, ?string $description = null, ?string $endsAt = null, ?string $externalId = null, mixed $externalRefs = null, ?GoalMetric $goalMetric = null, ?float $goalValue = null, mixed $metadata = null, ?string $ownerId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?string $startsAt = null, ?CampaignsCampaignsCreateStatus $status = null, mixed $tags = null, ?string $utmCampaign = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/campaigns'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;
        $apiParams['ends_at'] = $endsAt;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['goal_metric'] = $goalMetric;
        $apiParams['goal_value'] = $goalValue;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['owner_id'] = $ownerId;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['starts_at'] = $startsAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }
        $apiParams['utm_campaign'] = $utmCampaign;

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
     * Every campaign in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/campaigns/trash/empty'
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
     * What the nightly purge does, callable by hand: every campaign in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/campaigns/trash/purge'
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
     * The first DELETE moves the campaign into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. A
     * campaign with attribution facts or touches is refused (`trash_blocked`,
     * blocker `campaign_in_use`) — archive it instead; one still holding assets
     * is not deleted for good (`delete_blocked`, blocker `campaign_has_assets`).
     * A DELETE on a campaign already in the trash deletes it for good — refused
     * while something still needs it, and not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}'
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
    public function campaignsCampaignsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}'
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
     * @param ?string $code
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?GoalMetric $goalMetric
     * @param ?float $goalValue
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?string $ownerId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $startsAt
     * @param ?CampaignsCampaignsCreateStatus $status
     * @param ?mixed $tags
     * @param ?string $utmCampaign
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsUpdate(string $id, ?string $code = null, ?string $currency = null, ?string $description = null, ?string $endsAt = null, ?string $externalId = null, mixed $externalRefs = null, ?GoalMetric $goalMetric = null, ?float $goalValue = null, mixed $metadata = null, ?string $name = null, ?string $ownerId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?string $startsAt = null, ?CampaignsCampaignsCreateStatus $status = null, mixed $tags = null, ?string $utmCampaign = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;
        $apiParams['ends_at'] = $endsAt;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['goal_metric'] = $goalMetric;
        $apiParams['goal_value'] = $goalValue;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['owner_id'] = $ownerId;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['starts_at'] = $startsAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }
        $apiParams['utm_campaign'] = $utmCampaign;

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
     * Claims a promotion, mailing, journey or form by writing the campaign id
     * into its own campaign_ref through the owning app, and records the asset
     * here. Pages and ad campaigns are recorded here only. Attaching what is
     * already attached to this campaign answers the existing row.
     *
     * @param string $id
     * @param ?string $adCampaignLinkId
     * @param ?AssetApp $assetApp
     * @param ?string $assetEntity
     * @param ?string $assetId
     * @param ?string $formId
     * @param ?string $journeyId
     * @param ?string $label
     * @param ?string $libraryItemId
     * @param ?string $mailingId
     * @param ?string $pageId
     * @param ?string $promotionId
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsAttach(string $id, ?string $adCampaignLinkId = null, ?AssetApp $assetApp = null, ?string $assetEntity = null, ?string $assetId = null, ?string $formId = null, ?string $journeyId = null, ?string $label = null, ?string $libraryItemId = null, ?string $mailingId = null, ?string $pageId = null, ?string $promotionId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}/attach'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($adCampaignLinkId)) {
            $apiParams['ad_campaign_link_id'] = $adCampaignLinkId;
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

        if (!is_null($formId)) {
            $apiParams['form_id'] = $formId;
        }

        if (!is_null($journeyId)) {
            $apiParams['journey_id'] = $journeyId;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($libraryItemId)) {
            $apiParams['library_item_id'] = $libraryItemId;
        }

        if (!is_null($mailingId)) {
            $apiParams['mailing_id'] = $mailingId;
        }

        if (!is_null($pageId)) {
            $apiParams['page_id'] = $pageId;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
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
     * Clears the campaign_ref on the asset, if it still names this campaign, and
     * removes the asset row.
     *
     * @param string $id
     * @param ?string $adCampaignLinkId
     * @param ?AssetApp $assetApp
     * @param ?string $assetEntity
     * @param ?string $assetId
     * @param ?string $formId
     * @param ?string $journeyId
     * @param ?string $label
     * @param ?string $libraryItemId
     * @param ?string $mailingId
     * @param ?string $pageId
     * @param ?string $promotionId
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsDetach(string $id, ?string $adCampaignLinkId = null, ?AssetApp $assetApp = null, ?string $assetEntity = null, ?string $assetId = null, ?string $formId = null, ?string $journeyId = null, ?string $label = null, ?string $libraryItemId = null, ?string $mailingId = null, ?string $pageId = null, ?string $promotionId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}/detach'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($adCampaignLinkId)) {
            $apiParams['ad_campaign_link_id'] = $adCampaignLinkId;
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

        if (!is_null($formId)) {
            $apiParams['form_id'] = $formId;
        }

        if (!is_null($journeyId)) {
            $apiParams['journey_id'] = $journeyId;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($libraryItemId)) {
            $apiParams['library_item_id'] = $libraryItemId;
        }

        if (!is_null($mailingId)) {
            $apiParams['mailing_id'] = $mailingId;
        }

        if (!is_null($pageId)) {
            $apiParams['page_id'] = $pageId;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
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
     * Adds utm_source (default from the settings), utm_medium, utm_campaign and
     * optionally utm_content and utm_term to a URL, replacing UTM values it
     * already carried. A campaign without a UTM value gets its code slug the
     * first time.
     *
     * @param string $id
     * @param string $medium
     * @param string $url
     * @param ?string $content
     * @param ?string $source
     * @param ?string $term
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsLinks(string $id, string $medium, string $url, ?string $content = null, ?string $source = null, ?string $term = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}/links'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['medium'] = $medium;
        $apiParams['url'] = $url;

        if (!is_null($content)) {
            $apiParams['content'] = $content;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($term)) {
            $apiParams['term'] = $term;
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
     * Revenue and orders under the chosen model, returns netted out; redemptions,
     * clicks, impressions, subscriptions and leads; goal progress; budget planned
     * and spent with return on ad spend; the same figures per attached asset.
     * `results`, `goal_rows`, `budget_rows` and `asset_rows` carry the same
     * figures as rows of label and value, worded and formatted in the caller
     * language (Accept-Language; German unless English is asked for); `days`
     * carries clicks, redemptions, sign-ups and credited orders per day.
     *
     * @param string $id
     * @param ?Model $model
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsPerformance(string $id, ?Model $model = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}/performance'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

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
     * Clears the trash marks on the campaign. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function campaignsCampaignsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/campaigns/{id}/restore'
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