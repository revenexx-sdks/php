<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Holder;
use Revenexx\Enums\Period;

class LoyaltyPrograms extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every programme of this tenant. Filter `?kind=turnover_bonus` for the B2B
     * bonus programmes, `?active=true` for those running.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $code
     * @param ?string $description
     * @param ?string $kind
     * @param ?string $holder
     * @param ?string $currency
     * @param ?string $period
     * @param ?string $autoEnroll
     * @param ?string $active
     * @param ?string $memberCount
     * @param ?string $externalId
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $code = null, ?string $description = null, ?string $kind = null, ?string $holder = null, ?string $currency = null, ?string $period = null, ?string $autoEnroll = null, ?string $active = null, ?string $memberCount = null, ?string $externalId = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/programs'
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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($holder)) {
            $apiParams['holder'] = $holder;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($period)) {
            $apiParams['period'] = $period;
        }

        if (!is_null($autoEnroll)) {
            $apiParams['auto_enroll'] = $autoEnroll;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($memberCount)) {
            $apiParams['member_count'] = $memberCount;
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
     * @param LoyaltyProgramsCreateKind $kind
     * @param mixed $labels
     * @param ?bool $active
     * @param ?bool $autoEnroll
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?Holder $holder
     * @param ?mixed $metadata
     * @param ?Period $period
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsCreate(string $code, LoyaltyProgramsCreateKind $kind, mixed $labels, ?bool $active = null, ?bool $autoEnroll = null, ?string $currency = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, ?Holder $holder = null, mixed $metadata = null, ?Period $period = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/programs'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['kind'] = $kind;
        $apiParams['labels'] = $labels;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($autoEnroll)) {
            $apiParams['auto_enroll'] = $autoEnroll;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($holder)) {
            $apiParams['holder'] = $holder;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($period)) {
            $apiParams['period'] = $period;
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
     * Every programme in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/programs/trash/empty'
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
     * What the nightly purge does, callable by hand: every programme in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/programs/trash/purge'
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
     * The first DELETE moves the programme into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. A
     * programme with members or agreements is refused (`trash_blocked`, blocker
     * `has_members`) — deactivate it instead. Its tiers and rewards go into the
     * trash with it and come back with it. A DELETE on a programme already in the
     * trash deletes it for good — refused while something still needs it, and
     * not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}'
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
    public function loyaltyProgramsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}'
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
     * @param ?bool $autoEnroll
     * @param ?string $code
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?Holder $holder
     * @param ?LoyaltyProgramsCreateKind $kind
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?Period $period
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsUpdate(string $id, ?bool $active = null, ?bool $autoEnroll = null, ?string $code = null, ?string $currency = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, ?Holder $holder = null, ?LoyaltyProgramsCreateKind $kind = null, mixed $labels = null, mixed $metadata = null, ?Period $period = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($autoEnroll)) {
            $apiParams['auto_enroll'] = $autoEnroll;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($holder)) {
            $apiParams['holder'] = $holder;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($period)) {
            $apiParams['period'] = $period;
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

    /**
     * Active members per tier, the highest tier first and members without a tier
     * last, each with its share; the total is a `footer` row. No active member
     * answers no rows.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsFigures(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}/figures'
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
     * Opens one agreement per active member for the year (default: this year),
     * each with its base derived from last year. Members who already have one
     * keep it.
     *
     * @param string $id
     * @param ?string $period
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsOpenPeriod(string $id, ?string $period = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}/open-period'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($period)) {
            $apiParams['period'] = $period;
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
     * Clears the trash marks on the programme. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyProgramsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/programs/{id}/restore'
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