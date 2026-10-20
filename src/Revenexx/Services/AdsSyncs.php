<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class AdsSyncs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?ad_account_id=`, `?audience_id=`, `?state=failed`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $adAccountId
     * @param ?string $audienceId
     * @param ?string $audienceCode
     * @param ?string $subscriptionType
     * @param ?string $externalAudienceId
     * @param ?string $state
     * @param ?string $active
     * @param ?string $stale
     * @param ?string $memberCount
     * @param ?string $matchedCount
     * @param ?string $uploadedCount
     * @param ?string $skippedCount
     * @param ?string $lastError
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $adAccountId = null, ?string $audienceId = null, ?string $audienceCode = null, ?string $subscriptionType = null, ?string $externalAudienceId = null, ?string $state = null, ?string $active = null, ?string $stale = null, ?string $memberCount = null, ?string $matchedCount = null, ?string $uploadedCount = null, ?string $skippedCount = null, ?string $lastError = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/audience-syncs'
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

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($audienceCode)) {
            $apiParams['audience_code'] = $audienceCode;
        }

        if (!is_null($subscriptionType)) {
            $apiParams['subscription_type'] = $subscriptionType;
        }

        if (!is_null($externalAudienceId)) {
            $apiParams['external_audience_id'] = $externalAudienceId;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($stale)) {
            $apiParams['stale'] = $stale;
        }

        if (!is_null($memberCount)) {
            $apiParams['member_count'] = $memberCount;
        }

        if (!is_null($matchedCount)) {
            $apiParams['matched_count'] = $matchedCount;
        }

        if (!is_null($uploadedCount)) {
            $apiParams['uploaded_count'] = $uploadedCount;
        }

        if (!is_null($skippedCount)) {
            $apiParams['skipped_count'] = $skippedCount;
        }

        if (!is_null($lastError)) {
            $apiParams['last_error'] = $lastError;
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
     * @param string $audienceId
     * @param string $subscriptionType
     * @param ?bool $active
     * @param ?string $audienceCode
     * @param ?string $externalAudienceId
     * @param ?mixed $metadata
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsCreate(string $adAccountId, string $audienceId, string $subscriptionType, ?bool $active = null, ?string $audienceCode = null, ?string $externalAudienceId = null, mixed $metadata = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/audience-syncs'
        );

        $apiParams = [];
        $apiParams['ad_account_id'] = $adAccountId;
        $apiParams['audience_id'] = $audienceId;
        $apiParams['subscription_type'] = $subscriptionType;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['audience_code'] = $audienceCode;
        $apiParams['external_audience_id'] = $externalAudienceId;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}'
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
    public function adsSyncsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}'
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
     * @param ?string $adAccountId
     * @param ?string $audienceCode
     * @param ?string $audienceId
     * @param ?string $externalAudienceId
     * @param ?mixed $metadata
     * @param ?string $subscriptionType
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsUpdate(string $id, ?bool $active = null, ?string $adAccountId = null, ?string $audienceCode = null, ?string $audienceId = null, ?string $externalAudienceId = null, mixed $metadata = null, ?string $subscriptionType = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($adAccountId)) {
            $apiParams['ad_account_id'] = $adAccountId;
        }
        $apiParams['audience_code'] = $audienceCode;

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }
        $apiParams['external_audience_id'] = $externalAudienceId;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($subscriptionType)) {
            $apiParams['subscription_type'] = $subscriptionType;
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
     * SHA-256 of the trimmed, lower-cased e-mail of every member holding a
     * confirmed subscription of the sync type — by default only consent, not
     * the existing-customer exemption. Members without it are counted as skipped
     * and never served.
     *
     * @param string $id
     * @param ?string $cursor
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsMembers(string $id, ?string $cursor = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}/members'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($cursor)) {
            $apiParams['cursor'] = $cursor;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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
     * Announces `audience_sync.requested` for the workflow of the platform.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsRequest(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}/request'
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
     * @param string $id
     * @param ?string $error
     * @param ?string $externalAudienceId
     * @param ?int $matchedCount
     * @param ?int $memberCount
     * @param ?bool $ok
     * @param ?int $skippedCount
     * @param ?int $uploadedCount
     * @throws RevenexxException
     * @return array
     */
    public function adsSyncsResult(string $id, ?string $error = null, ?string $externalAudienceId = null, ?int $matchedCount = null, ?int $memberCount = null, ?bool $ok = null, ?int $skippedCount = null, ?int $uploadedCount = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/ads/audience-syncs/{id}/result'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($error)) {
            $apiParams['error'] = $error;
        }

        if (!is_null($externalAudienceId)) {
            $apiParams['external_audience_id'] = $externalAudienceId;
        }

        if (!is_null($matchedCount)) {
            $apiParams['matched_count'] = $matchedCount;
        }

        if (!is_null($memberCount)) {
            $apiParams['member_count'] = $memberCount;
        }

        if (!is_null($ok)) {
            $apiParams['ok'] = $ok;
        }

        if (!is_null($skippedCount)) {
            $apiParams['skipped_count'] = $skippedCount;
        }

        if (!is_null($uploadedCount)) {
            $apiParams['uploaded_count'] = $uploadedCount;
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