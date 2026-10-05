<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class TagManagerContainer extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every container check of this tenant visible in the requested market,
     * paged. Equality filters on plain columns; jsonb columns are answered but
     * not filterable.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $containerVersionId
     * @param ?int $containerVersionNumber
     * @param ?int $policyVersionNumber
     * @param ?string $reason
     * @param ?bool $ok
     * @param ?string $checkedAt
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerChecksList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $containerVersionId = null, ?int $containerVersionNumber = null, ?int $policyVersionNumber = null, ?string $reason = null, ?bool $ok = null, ?string $checkedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container-checks'
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

        if (!is_null($containerVersionId)) {
            $apiParams['container_version_id'] = $containerVersionId;
        }

        if (!is_null($containerVersionNumber)) {
            $apiParams['container_version_number'] = $containerVersionNumber;
        }

        if (!is_null($policyVersionNumber)) {
            $apiParams['policy_version_number'] = $policyVersionNumber;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($ok)) {
            $apiParams['ok'] = $ok;
        }

        if (!is_null($checkedAt)) {
            $apiParams['checked_at'] = $checkedAt;
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
     * One container check by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerChecksGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/container-checks/{id}'
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
     * Every container version of this tenant visible in the requested market,
     * paged. Equality filters on plain columns; jsonb columns are answered but
     * not filterable.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?int $number
     * @param ?string $market
     * @param ?string $sha256
     * @param ?int $policyVersionNumber
     * @param ?string $policySha256
     * @param ?int $rolledBackFrom
     * @param ?string $note
     * @param ?string $publishedBy
     * @param ?string $publishedAt
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerVersionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?int $number = null, ?string $market = null, ?string $sha256 = null, ?int $policyVersionNumber = null, ?string $policySha256 = null, ?int $rolledBackFrom = null, ?string $note = null, ?string $publishedBy = null, ?string $publishedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container-versions'
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

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($sha256)) {
            $apiParams['sha256'] = $sha256;
        }

        if (!is_null($policyVersionNumber)) {
            $apiParams['policy_version_number'] = $policyVersionNumber;
        }

        if (!is_null($policySha256)) {
            $apiParams['policy_sha256'] = $policySha256;
        }

        if (!is_null($rolledBackFrom)) {
            $apiParams['rolled_back_from'] = $rolledBackFrom;
        }

        if (!is_null($note)) {
            $apiParams['note'] = $note;
        }

        if (!is_null($publishedBy)) {
            $apiParams['published_by'] = $publishedBy;
        }

        if (!is_null($publishedAt)) {
            $apiParams['published_at'] = $publishedAt;
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
     * One container version by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerVersionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/container-versions/{id}'
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
     * Freeze the active marketing tags, triggers and variables for the requested
     * market into a new container version, after checking them against the
     * consent manager's published policy. Every violation is answered at once.
     *
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerPublish(?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container/publish'
        );

        $apiParams = [];

        if (!is_null($note)) {
            $apiParams['note'] = $note;
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
     * Check every live container against the consent policy published now and
     * record the result. Also runs on the consent manager's
     * policy_version.published event. Changes no tag.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerRecheck(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container/recheck'
        );

        $apiParams = [];
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
     * Publish the snapshot of an earlier version as a NEW version, after the same
     * checks against the policy published now. The old version is not touched.
     *
     * @param int $version
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerRollback(int $version): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container/rollback'
        );

        $apiParams = [];
        $apiParams['version'] = $version;

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
     * Per market: the live version, its hash and policy version, and the latest
     * check with its violations — what the Studio shows as a notice when a new
     * policy no longer discloses a live vendor.
     *
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerStatus(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container/status'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * A dry run of the publish: builds the draft for the requested market, reads
     * the consent manager's published policy for it and answers every violation.
     * Writes nothing.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerContainerValidate(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/container/validate'
        );

        $apiParams = [];
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
     * Mint a token that lets a storefront load the unpublished draft
     * (`?rvx_tm_preview=<token>`). The token is answered once and stored only as
     * its hash.
     *
     * @param ?int $ttlMinutes
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerPreviewCreate(?int $ttlMinutes = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/preview'
        );

        $apiParams = [];

        if (!is_null($ttlMinutes)) {
            $apiParams['ttl_minutes'] = $ttlMinutes;
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