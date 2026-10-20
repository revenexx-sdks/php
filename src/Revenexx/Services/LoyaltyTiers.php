<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\ThresholdKind;

class LoyaltyTiers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?program_id=` for one programme, `?code=` to find a tier by the
     * code a promotion or an audience names.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $programId
     * @param ?string $code
     * @param ?string $position
     * @param ?string $thresholdKind
     * @param ?string $active
     * @param ?string $externalId
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $programId = null, ?string $code = null, ?string $position = null, ?string $thresholdKind = null, ?string $active = null, ?string $externalId = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/tiers'
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

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($thresholdKind)) {
            $apiParams['threshold_kind'] = $thresholdKind;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param string $programId
     * @param ?bool $active
     * @param ?float $bonusPercent
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?mixed $metadata
     * @param ?mixed $perks
     * @param ?float $pointsMultiplier
     * @param ?int $position
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?ThresholdKind $thresholdKind
     * @param ?float $thresholdValue
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersCreate(string $code, mixed $labels, string $programId, ?bool $active = null, ?float $bonusPercent = null, ?string $externalId = null, mixed $externalRefs = null, mixed $metadata = null, mixed $perks = null, ?float $pointsMultiplier = null, ?int $position = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?ThresholdKind $thresholdKind = null, ?float $thresholdValue = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/tiers'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;
        $apiParams['program_id'] = $programId;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($bonusPercent)) {
            $apiParams['bonus_percent'] = $bonusPercent;
        }
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($perks)) {
            $apiParams['perks'] = $perks;
        }

        if (!is_null($pointsMultiplier)) {
            $apiParams['points_multiplier'] = $pointsMultiplier;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($thresholdKind)) {
            $apiParams['threshold_kind'] = $thresholdKind;
        }

        if (!is_null($thresholdValue)) {
            $apiParams['threshold_value'] = $thresholdValue;
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
     * Every tier in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/tiers/trash/empty'
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
     * What the nightly purge does, callable by hand: every tier in the trash for
     * longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/tiers/trash/purge'
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
     * The first DELETE moves the tier into the trash: it stays, with everything
     * hanging off it, and counts nowhere until it is restored. A tier active
     * members hold is refused (`trash_blocked`, blocker `tier_in_use`). Restoring
     * waits for its programme to be restored (`parent_in_trash`). A DELETE on a
     * tier already in the trash deletes it for good — refused while something
     * still needs it, and not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/tiers/{id}'
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
    public function loyaltyTiersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/tiers/{id}'
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
     * @param ?float $bonusPercent
     * @param ?string $code
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?mixed $perks
     * @param ?float $pointsMultiplier
     * @param ?int $position
     * @param ?string $programId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?ThresholdKind $thresholdKind
     * @param ?float $thresholdValue
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersUpdate(string $id, ?bool $active = null, ?float $bonusPercent = null, ?string $code = null, ?string $externalId = null, mixed $externalRefs = null, mixed $labels = null, mixed $metadata = null, mixed $perks = null, ?float $pointsMultiplier = null, ?int $position = null, ?string $programId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?ThresholdKind $thresholdKind = null, ?float $thresholdValue = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/tiers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($bonusPercent)) {
            $apiParams['bonus_percent'] = $bonusPercent;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
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

        if (!is_null($perks)) {
            $apiParams['perks'] = $perks;
        }

        if (!is_null($pointsMultiplier)) {
            $apiParams['points_multiplier'] = $pointsMultiplier;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($thresholdKind)) {
            $apiParams['threshold_kind'] = $thresholdKind;
        }

        if (!is_null($thresholdValue)) {
            $apiParams['threshold_value'] = $thresholdValue;
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

    /**
     * Clears the trash marks on the tier. Its parts were never touched, so they
     * come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyTiersRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/tiers/{id}/restore'
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