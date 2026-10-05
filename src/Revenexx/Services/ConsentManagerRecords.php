<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Action;
use Revenexx\Enums\Surface;

class ConsentManagerRecords extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every record, filterable by column. There is no route that edits one — an
     * update answers 405.
     *
     * @param ?string $id
     * @param ?string $consentId
     * @param ?Action $action
     * @param ?Surface $surface
     * @param ?string $policyVersionId
     * @param ?int $policyNumber
     * @param ?string $policySha256
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $recordedAt
     * @param ?string $clientTs
     * @param ?string $expiresAt
     * @param ?string $userAgentClass
     * @param ?string $pagePath
     * @param ?string $contactId
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsList(?string $id = null, ?string $consentId = null, ?Action $action = null, ?Surface $surface = null, ?string $policyVersionId = null, ?int $policyNumber = null, ?string $policySha256 = null, ?string $locale = null, ?string $market = null, ?string $recordedAt = null, ?string $clientTs = null, ?string $expiresAt = null, ?string $userAgentClass = null, ?string $pagePath = null, ?string $contactId = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($consentId)) {
            $apiParams['consent_id'] = $consentId;
        }

        if (!is_null($action)) {
            $apiParams['action'] = $action;
        }

        if (!is_null($surface)) {
            $apiParams['surface'] = $surface;
        }

        if (!is_null($policyVersionId)) {
            $apiParams['policy_version_id'] = $policyVersionId;
        }

        if (!is_null($policyNumber)) {
            $apiParams['policy_number'] = $policyNumber;
        }

        if (!is_null($policySha256)) {
            $apiParams['policy_sha256'] = $policySha256;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($recordedAt)) {
            $apiParams['recorded_at'] = $recordedAt;
        }

        if (!is_null($clientTs)) {
            $apiParams['client_ts'] = $clientTs;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }

        if (!is_null($userAgentClass)) {
            $apiParams['user_agent_class'] = $userAgentClass;
        }

        if (!is_null($pagePath)) {
            $apiParams['page_path'] = $pagePath;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
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
     * Stores one decision under the version that was shown. Every purpose of that
     * version is stored explicitly — a consent purpose left out is denied. The
     * contact comes from the identity the gateway injected, never from the body.
     * No IP address, full user agent or query string is stored, whatever the
     * request carries. Two identical decisions in a row under one version answer
     * the existing record with 200 and `deduplicated: true`.
     *
     * @param Action $action
     * @param string $consentId
     * @param string $locale
     * @param string $policyVersionId
     * @param Surface $surface
     * @param ?string $clientTs
     * @param ?array $decisions
     * @param ?string $pagePath
     * @param ?string $userAgentClass
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsCreate(Action $action, string $consentId, string $locale, string $policyVersionId, Surface $surface, ?string $clientTs = null, ?array $decisions = null, ?string $pagePath = null, ?string $userAgentClass = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records'
        );

        $apiParams = [];
        $apiParams['action'] = $action;
        $apiParams['consent_id'] = $consentId;
        $apiParams['locale'] = $locale;
        $apiParams['policy_version_id'] = $policyVersionId;
        $apiParams['surface'] = $surface;
        $apiParams['client_ts'] = $clientTs;

        if (!is_null($decisions)) {
            $apiParams['decisions'] = $decisions;
        }
        $apiParams['page_path'] = $pagePath;
        $apiParams['user_agent_class'] = $userAgentClass;

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
     * Every record of one consent id, oldest first, each naming the version it
     * was shown under.
     *
     * @param string $consentId
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsHistory(string $consentId): array
    {
        $apiPath = str_replace(
            ['{consent_id}'],
            [$consentId],
            '/v1/consent-manager/records/by-consent/{consent_id}'
        );

        $apiParams = [];
        $apiParams['consent_id'] = $consentId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The records received from `from` (inclusive) to `to` (exclusive), oldest
     * first, as rows and as one CSV rendering. Every row names the version and
     * hash it points to. At most 1000 rows per call; continue with `next_offset`.
     *
     * @param ?string $from
     * @param ?string $to
     * @param ?string $market
     * @param ?int $limit
     * @param ?int $offset
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsExport(?string $from = null, ?string $to = null, ?string $market = null, ?int $limit = null, ?int $offset = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records/export'
        );

        $apiParams = [];

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($to)) {
            $apiParams['to'] = $to;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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
     * Deletes records that ended longer ago than `proof_retention_days` (never
     * less than 365): superseded records from the time the same browser decided
     * again, the newest one from its expiry. The newest record of a browser
     * therefore stays while it is current. Previews unless `dry_run: false` is
     * sent; the daily `prune-records` schedule runs it for real. Bounded per call
     * — `has_more` says whether to call again.
     *
     * @param ?bool $dryRun
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsPrune(?bool $dryRun = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records/prune'
        );

        $apiParams = [];

        if (!is_null($dryRun)) {
            $apiParams['dry_run'] = $dryRun;
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
     * Granted, denied and objected counts per purpose and counts per action for
     * one market (`?market=`, else `x-revenexx-market`, else the shop) and an
     * optional period. A statistic: it carries no consent id, record id or
     * contact.
     *
     * @param ?string $market
     * @param ?string $from
     * @param ?string $to
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsSummary(?string $market = null, ?string $from = null, ?string $to = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records/summary'
        );

        $apiParams = [];

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($from)) {
            $apiParams['from'] = $from;
        }

        if (!is_null($to)) {
            $apiParams['to'] = $to;
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
     * An erasure request for a signed-in contact: sets `contact_id` to null on
     * every record of that contact and changes nothing else. The proof stays,
     * because it is kept for legal claims (Art. 17 (3) e GDPR). The only mutation
     * a record ever sees.
     *
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsUnlinkContact(string $contactId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/records/unlink-contact'
        );

        $apiParams = [];
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
     * One record.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerRecordsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/records/{id}'
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
}