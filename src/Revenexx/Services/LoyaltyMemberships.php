<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\LoyaltyMembershipsCreateStatus;

class LoyaltyMemberships extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?program_id=`, `?contact_id=`, `?organization_id=`, `?tier_id=` or
     * `?tier_code=` (what the audiences rule reads), `?status=active`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $programId
     * @param ?string $holder
     * @param ?string $holderKey
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $tierId
     * @param ?string $tierCode
     * @param ?string $status
     * @param ?string $pointsBalance
     * @param ?string $pointsPeriod
     * @param ?string $pointsLifetime
     * @param ?string $market
     * @param ?string $externalId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $programId = null, ?string $holder = null, ?string $holderKey = null, ?string $contactId = null, ?string $organizationId = null, ?string $tierId = null, ?string $tierCode = null, ?string $status = null, ?string $pointsBalance = null, ?string $pointsPeriod = null, ?string $pointsLifetime = null, ?string $market = null, ?string $externalId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/memberships'
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

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($holder)) {
            $apiParams['holder'] = $holder;
        }

        if (!is_null($holderKey)) {
            $apiParams['holder_key'] = $holderKey;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($tierId)) {
            $apiParams['tier_id'] = $tierId;
        }

        if (!is_null($tierCode)) {
            $apiParams['tier_code'] = $tierCode;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($pointsBalance)) {
            $apiParams['points_balance'] = $pointsBalance;
        }

        if (!is_null($pointsPeriod)) {
            $apiParams['points_period'] = $pointsPeriod;
        }

        if (!is_null($pointsLifetime)) {
            $apiParams['points_lifetime'] = $pointsLifetime;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
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
     * @param string $programId
     * @param ?string $contactId
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?string $market
     * @param ?mixed $metadata
     * @param ?string $organizationId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?LoyaltyMembershipsCreateStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsCreate(string $programId, ?string $contactId = null, ?string $externalId = null, mixed $externalRefs = null, ?string $market = null, mixed $metadata = null, ?string $organizationId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?LoyaltyMembershipsCreateStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/memberships'
        );

        $apiParams = [];
        $apiParams['program_id'] = $programId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['market'] = $market;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * What the storefront account page and cart perk hint, the loyalty_tier
     * condition in promotions and the loyalty_tier rule in audiences ask. A
     * contact counts together with its company. Only active memberships of active
     * programmes answer; `tier_codes` lists every tier held.
     *
     * @param ?string $contactId
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsLookup(?string $contactId = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/memberships/lookup'
        );

        $apiParams = [];

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
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
    public function loyaltyMembershipsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}'
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
    public function loyaltyMembershipsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}'
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
     * @param ?string $contactId
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?string $market
     * @param ?mixed $metadata
     * @param ?string $organizationId
     * @param ?string $programId
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?LoyaltyMembershipsCreateStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsUpdate(string $id, ?string $contactId = null, ?string $externalId = null, mixed $externalRefs = null, ?string $market = null, mixed $metadata = null, ?string $organizationId = null, ?string $programId = null, mixed $sourceData = null, ?string $sourceSyncedAt = null, ?LoyaltyMembershipsCreateStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['contact_id'] = $contactId;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['market'] = $market;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * A credit or a debit with a reason. A debit never takes the balance below
     * zero. A `key` makes a retry book once.
     *
     * @param string $id
     * @param int $points
     * @param string $reason
     * @param ?string $key
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsAdjust(string $id, int $points, string $reason, ?string $key = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}/adjust'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['points'] = $points;
        $apiParams['reason'] = $reason;

        if (!is_null($key)) {
            $apiParams['key'] = $key;
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
     * Every tier of the programme, lowest first, with how far the member has come
     * towards it: points of this period for a points programme, this year's
     * turnover through the agreement for a turnover bonus. Reached tiers say so,
     * the next says how much is missing. No tiers, or no agreement this year,
     * answers no rows.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsProgress(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}/progress'
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
     * Answers the active code of the membership, making one on first ask. A
     * company membership names the person who refers with `contact_id`.
     *
     * @param string $id
     * @param ?string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyMembershipsReferralCode(string $id, ?string $contactId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/memberships/{id}/referral-code'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
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
}