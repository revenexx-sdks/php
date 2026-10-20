<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class LoyaltyPoints extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The ledger. Filter `?membership_id=`, `?kind=`, `?order_id=`. Read-only.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $membershipId
     * @param ?string $entryKey
     * @param ?string $kind
     * @param ?string $points
     * @param ?string $remaining
     * @param ?string $orderId
     * @param ?string $rewardId
     * @param ?string $redemptionId
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyPointsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $membershipId = null, ?string $entryKey = null, ?string $kind = null, ?string $points = null, ?string $remaining = null, ?string $orderId = null, ?string $rewardId = null, ?string $redemptionId = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/point-ledger'
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

        if (!is_null($entryKey)) {
            $apiParams['entry_key'] = $entryKey;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($points)) {
            $apiParams['points'] = $points;
        }

        if (!is_null($remaining)) {
            $apiParams['remaining'] = $remaining;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($rewardId)) {
            $apiParams['reward_id'] = $rewardId;
        }

        if (!is_null($redemptionId)) {
            $apiParams['redemption_id'] = $redemptionId;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
    public function loyaltyPointsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/point-ledger/{id}'
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
     * What the journeys award_points step calls. Names the member by membership,
     * contact or company (`program_code` when the holder collects in several
     * programmes). A `key` makes a retry book once.
     *
     * @param int $points
     * @param ?string $contactId
     * @param ?string $key
     * @param ?string $membershipId
     * @param ?string $organizationId
     * @param ?string $programCode
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyPointsAward(int $points, ?string $contactId = null, ?string $key = null, ?string $membershipId = null, ?string $organizationId = null, ?string $programCode = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/points/award'
        );

        $apiParams = [];
        $apiParams['points'] = $points;

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

        if (!is_null($programCode)) {
            $apiParams['program_code'] = $programCode;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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