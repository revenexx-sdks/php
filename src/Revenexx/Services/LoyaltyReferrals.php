<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class LoyaltyReferrals extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?membership_id=`, `?contact_id=`, `?code=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $membershipId
     * @param ?string $contactId
     * @param ?string $code
     * @param ?string $uses
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsCodesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $membershipId = null, ?string $contactId = null, ?string $code = null, ?string $uses = null, ?string $active = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/referral-codes'
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

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($uses)) {
            $apiParams['uses'] = $uses;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
    public function loyaltyReferralsCodesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/referral-codes/{id}'
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
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsCodesDeactivate(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/referral-codes/{id}/deactivate'
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

    /**
     * Filter `?state=`, `?referrer_contact_id=`, `?referee_contact_id=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $referralCodeId
     * @param ?string $referrerMembershipId
     * @param ?string $referrerContactId
     * @param ?string $refereeContactId
     * @param ?string $state
     * @param ?string $orderId
     * @param ?string $reason
     * @param ?string $refereeVoucherCode
     * @param ?string $referrerVoucherCode
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $referralCodeId = null, ?string $referrerMembershipId = null, ?string $referrerContactId = null, ?string $refereeContactId = null, ?string $state = null, ?string $orderId = null, ?string $reason = null, ?string $refereeVoucherCode = null, ?string $referrerVoucherCode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/referrals'
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

        if (!is_null($referralCodeId)) {
            $apiParams['referral_code_id'] = $referralCodeId;
        }

        if (!is_null($referrerMembershipId)) {
            $apiParams['referrer_membership_id'] = $referrerMembershipId;
        }

        if (!is_null($referrerContactId)) {
            $apiParams['referrer_contact_id'] = $referrerContactId;
        }

        if (!is_null($refereeContactId)) {
            $apiParams['referee_contact_id'] = $refereeContactId;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($refereeVoucherCode)) {
            $apiParams['referee_voucher_code'] = $refereeVoucherCode;
        }

        if (!is_null($referrerVoucherCode)) {
            $apiParams['referrer_voucher_code'] = $referrerVoucherCode;
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
     * The storefront calls it at sign-up. Records the referral and, when the
     * tenant set one, issues a welcome voucher. Claiming the same code again
     * answers the first claim.
     *
     * @param string $code
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsClaim(string $code, string $contactId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/referrals/claim'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['contact_id'] = $contactId;

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
    public function loyaltyReferralsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/referrals/{id}'
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
     * @param string $reason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsReject(string $id, string $reason): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/referrals/{id}/reject'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;

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
     * For a referral that qualified while promotions could not issue the voucher.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyReferralsReward(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/referrals/{id}/reward'
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