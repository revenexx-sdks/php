<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsConsentEventsListKind;
use Revenexx\Enums\MarketingConsentsConsentEventsListSource;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;
use Revenexx\Enums\MarketingConsentsImportsListLegalBasis;
use Revenexx\Enums\State;

class MarketingConsentsEvidence extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The proof, newest last when ordered by `at`. Filter by `subscription_id`,
     * `contact_id`, `kind`, `source`. Read only — no address answers PUT or
     * DELETE.
     *
     * @param ?string $id
     * @param ?string $subscriptionId
     * @param ?string $contactId
     * @param ?string $subscriptionTypeId
     * @param ?Channel $channel
     * @param ?string $addressHash
     * @param ?MarketingConsentsConsentEventsListKind $kind
     * @param ?MarketingConsentsConsentEventsListSource $source
     * @param ?string $sourceRef
     * @param ?MarketingConsentsConsentEventsListLegalBasis $legalBasis
     * @param ?string $consentTextId
     * @param ?string $campaignRef
     * @param ?string $pageUrl
     * @param ?string $ip
     * @param ?string $userAgent
     * @param ?string $ipTruncatedAt
     * @param ?string $at
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentEventsList(?string $id = null, ?string $subscriptionId = null, ?string $contactId = null, ?string $subscriptionTypeId = null, ?Channel $channel = null, ?string $addressHash = null, ?MarketingConsentsConsentEventsListKind $kind = null, ?MarketingConsentsConsentEventsListSource $source = null, ?string $sourceRef = null, ?MarketingConsentsConsentEventsListLegalBasis $legalBasis = null, ?string $consentTextId = null, ?string $campaignRef = null, ?string $pageUrl = null, ?string $ip = null, ?string $userAgent = null, ?string $ipTruncatedAt = null, ?string $at = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/consent-events'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($subscriptionId)) {
            $apiParams['subscription_id'] = $subscriptionId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($subscriptionTypeId)) {
            $apiParams['subscription_type_id'] = $subscriptionTypeId;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($addressHash)) {
            $apiParams['address_hash'] = $addressHash;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($sourceRef)) {
            $apiParams['source_ref'] = $sourceRef;
        }

        if (!is_null($legalBasis)) {
            $apiParams['legal_basis'] = $legalBasis;
        }

        if (!is_null($consentTextId)) {
            $apiParams['consent_text_id'] = $consentTextId;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($pageUrl)) {
            $apiParams['page_url'] = $pageUrl;
        }

        if (!is_null($ip)) {
            $apiParams['ip'] = $ip;
        }

        if (!is_null($userAgent)) {
            $apiParams['user_agent'] = $userAgent;
        }

        if (!is_null($ipTruncatedAt)) {
            $apiParams['ip_truncated_at'] = $ipTruncatedAt;
        }

        if (!is_null($at)) {
            $apiParams['at'] = $at;
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
     * One fact of the proof by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsConsentEventsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/consent-events/{id}'
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
     * What the contact agreed to, when, where, under which wording and from which
     * IP — every subscription with its full history.
     *
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsContactsGet(string $contactId): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/marketing-consents/contacts/{contact_id}'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * An erasure request (Art. 17 GDPR). Withdraws every open subscription first
     * (so the sequencer suppresses), then removes address, contact, IP, browser
     * and page from every row and keeps type, basis, times and the address hash
     * — so eligibility answers `erased` and an import cannot bring the address
     * back. Publishes `consents.erased` per address.
     *
     * @param string $contactId
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsContactsErase(string $contactId, array $data): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/marketing-consents/contacts/{contact_id}/erase'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
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
     * The record as one document: addresses, subscriptions, events and the exact
     * wording of every consent text they point at — for a data-subject request
     * or a dispute.
     *
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsContactsExport(string $contactId): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/marketing-consents/contacts/{contact_id}/export'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every list import with its basis, proof note and counts.
     *
     * @param ?string $id
     * @param ?string $subscriptionTypeId
     * @param ?Channel $channel
     * @param ?MarketingConsentsImportsListLegalBasis $legalBasis
     * @param ?string $fileRef
     * @param ?string $proofNote
     * @param ?int $rows
     * @param ?int $accepted
     * @param ?int $rejected
     * @param ?State $state
     * @param ?string $createdBy
     * @param ?string $finishedAt
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsImportsList(?string $id = null, ?string $subscriptionTypeId = null, ?Channel $channel = null, ?MarketingConsentsImportsListLegalBasis $legalBasis = null, ?string $fileRef = null, ?string $proofNote = null, ?int $rows = null, ?int $accepted = null, ?int $rejected = null, ?State $state = null, ?string $createdBy = null, ?string $finishedAt = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/imports'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($subscriptionTypeId)) {
            $apiParams['subscription_type_id'] = $subscriptionTypeId;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($legalBasis)) {
            $apiParams['legal_basis'] = $legalBasis;
        }

        if (!is_null($fileRef)) {
            $apiParams['file_ref'] = $fileRef;
        }

        if (!is_null($proofNote)) {
            $apiParams['proof_note'] = $proofNote;
        }

        if (!is_null($rows)) {
            $apiParams['rows'] = $rows;
        }

        if (!is_null($accepted)) {
            $apiParams['accepted'] = $accepted;
        }

        if (!is_null($rejected)) {
            $apiParams['rejected'] = $rejected;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($createdBy)) {
            $apiParams['created_by'] = $createdBy;
        }

        if (!is_null($finishedAt)) {
            $apiParams['finished_at'] = $finishedAt;
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
     * Up to 1000 rows per call. Every accepted row becomes a confirmed
     * subscription on the basis the import claims — consent_single or
     * existing_customer, never double opt-in — with an `imported` proof
     * pointing at the import. Unknown addresses become `customers` contacts
     * first. An address that withdrew or was erased is refused: an import never
     * overrules an objection.
     *
     * @param MarketingConsentsImportsListLegalBasis $legalBasis
     * @param string $proofNote
     * @param array $rows
     * @param string $subscriptionType
     * @param ?Channel $channel
     * @param ?string $fileRef
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsImportsCreate(MarketingConsentsImportsListLegalBasis $legalBasis, string $proofNote, array $rows, string $subscriptionType, ?Channel $channel = null, ?string $fileRef = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/imports'
        );

        $apiParams = [];
        $apiParams['legal_basis'] = $legalBasis;
        $apiParams['proof_note'] = $proofNote;
        $apiParams['rows'] = $rows;
        $apiParams['subscription_type'] = $subscriptionType;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($fileRef)) {
            $apiParams['file_ref'] = $fileRef;
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
     * One import with its refused rows.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsImportsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/marketing-consents/imports/{id}'
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
     * Shortens the IP address of every consent event older than
     * `ip_retention_days` (last IPv4 octet, last 80 IPv6 bits). The event stays.
     * Bounded per call; the nightly `ip-retention` schedule runs it.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsIpRetentionRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/ip-retention/run'
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
     * Turns every pending subscription whose link expired into lapsed — no
     * reminder is sent — and retries suppressions the sequencer did not
     * receive. Bounded per call; the hourly `lapse-pending` schedule runs it.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsLapseRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/lapse/run'
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
     * Until the platform delivers other apps' events (PE-748), this reads them
     * from their owners: the sequencer's newest unsubscribe and complaint
     * suppressions (48 h) become withdrawals — rows this app wrote itself are
     * skipped; orders placed in the last three hours open the existing-customer
     * basis; subscriptions without a contact are linked to the customers contact
     * of their address. Idempotent; the hourly `sweep-events` schedule runs it.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function marketingConsentsSweepRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/marketing-consents/sweep/run'
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
}