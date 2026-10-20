<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;

class LoyaltyRewards extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?membership_id=`, `?reward_id=`, `?state=`. Read-only.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $membershipId
     * @param ?string $rewardId
     * @param ?string $points
     * @param ?string $voucherCode
     * @param ?string $ledgerEntryId
     * @param ?string $requestKey
     * @param ?string $state
     * @param ?string $usedOrderId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsRedemptionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $membershipId = null, ?string $rewardId = null, ?string $points = null, ?string $voucherCode = null, ?string $ledgerEntryId = null, ?string $requestKey = null, ?string $state = null, ?string $usedOrderId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/reward-redemptions'
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

        if (!is_null($membershipId)) {
            $apiParams['membership_id'] = $membershipId;
        }

        if (!is_null($rewardId)) {
            $apiParams['reward_id'] = $rewardId;
        }

        if (!is_null($points)) {
            $apiParams['points'] = $points;
        }

        if (!is_null($voucherCode)) {
            $apiParams['voucher_code'] = $voucherCode;
        }

        if (!is_null($ledgerEntryId)) {
            $apiParams['ledger_entry_id'] = $ledgerEntryId;
        }

        if (!is_null($requestKey)) {
            $apiParams['request_key'] = $requestKey;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($usedOrderId)) {
            $apiParams['used_order_id'] = $usedOrderId;
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
    public function loyaltyRewardsRedemptionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/reward-redemptions/{id}'
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
     * Filter `?program_id=`, `?active=true`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $programId
     * @param ?string $code
     * @param ?string $description
     * @param ?string $pointsCost
     * @param ?string $promotionId
     * @param ?string $voucherBatchId
     * @param ?string $minTierId
     * @param ?string $active
     * @param ?string $redeemedCount
     * @param ?string $externalId
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $programId = null, ?string $code = null, ?string $description = null, ?string $pointsCost = null, ?string $promotionId = null, ?string $voucherBatchId = null, ?string $minTierId = null, ?string $active = null, ?string $redeemedCount = null, ?string $externalId = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/rewards'
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

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($pointsCost)) {
            $apiParams['points_cost'] = $pointsCost;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($voucherBatchId)) {
            $apiParams['voucher_batch_id'] = $voucherBatchId;
        }

        if (!is_null($minTierId)) {
            $apiParams['min_tier_id'] = $minTierId;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($redeemedCount)) {
            $apiParams['redeemed_count'] = $redeemedCount;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($deletedBy)) {
            $apiParams['deleted_by'] = $deletedBy;
        }

        if (!is_null($deletedById)) {
            $apiParams['deleted_by_id'] = $deletedById;
        }

        if (!is_null($trashBatch)) {
            $apiParams['trash_batch'] = $trashBatch;
        }

        if (!is_null($purgeBlockedReason)) {
            $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
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
     * @param mixed $labels
     * @param int $pointsCost
     * @param string $programId
     * @param string $promotionId
     * @param ?bool $active
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?mixed $metadata
     * @param ?string $minTierId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $voucherBatchId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsCreate(string $code, mixed $labels, int $pointsCost, string $programId, string $promotionId, ?bool $active = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, mixed $metadata = null, ?string $minTierId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?string $voucherBatchId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/rewards'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;
        $apiParams['points_cost'] = $pointsCost;
        $apiParams['program_id'] = $programId;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['min_tier_id'] = $minTierId;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['voucher_batch_id'] = $voucherBatchId;

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
     * Every reward in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/rewards/trash/empty'
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
     * What the nightly purge does, callable by hand: every reward in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/rewards/trash/purge'
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
     * The first DELETE moves the reward into the trash: it stays, with everything
     * hanging off it, and counts nowhere until it is restored. A redeemed reward
     * is refused (`trash_blocked`, blocker `redeemed`) — deactivate it instead.
     * Restoring waits for its programme to be restored (`parent_in_trash`). A
     * DELETE on a reward already in the trash deletes it for good — refused
     * while something still needs it, and not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/rewards/{id}'
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
    public function loyaltyRewardsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/rewards/{id}'
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
     * @param ?string $code
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?string $minTierId
     * @param ?int $pointsCost
     * @param ?string $programId
     * @param ?string $promotionId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $voucherBatchId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsUpdate(string $id, ?bool $active = null, ?string $code = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, mixed $labels = null, mixed $metadata = null, ?string $minTierId = null, ?int $pointsCost = null, ?string $programId = null, ?string $promotionId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?string $voucherBatchId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/rewards/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['min_tier_id'] = $minTierId;

        if (!is_null($pointsCost)) {
            $apiParams['points_cost'] = $pointsCost;
        }

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['voucher_batch_id'] = $voucherBatchId;

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
     * Draws a single-use voucher for the member from promotions, then takes the
     * points. No voucher, no points taken. A `key` makes a retry answer the first
     * redemption.
     *
     * @param string $id
     * @param ?string $contactId
     * @param ?string $key
     * @param ?string $membershipId
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsRedeem(string $id, ?string $contactId = null, ?string $key = null, ?string $membershipId = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/rewards/{id}/redeem'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($membershipId)) {
            $apiParams['membership_id'] = $membershipId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
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
     * Clears the trash marks on the reward. Its parts were never touched, so they
     * come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyRewardsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/rewards/{id}/restore'
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