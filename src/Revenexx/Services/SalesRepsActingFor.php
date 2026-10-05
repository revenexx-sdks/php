<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class SalesRepsActingFor extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * An impersonation entry records that a rep acted for a buyer — which rep,
     * in which organization, as which contact, from when until when, and why. It
     * is the only record anywhere that somebody else was behind a buyer's
     * actions, and it is append-only. This list is the answer to three different
     * questions, each one a filter: `?rep_code=` is what one rep has been doing,
     * `?organization_id=` is what happened inside one customer — the question a
     * buyer asks when an order appears that nobody there remembers placing —
     * and `?contact_id=` is every occasion somebody acted as one person, which is
     * what an erasure request is served by. Sort with `order=started_at.desc` for
     * the most recent first. An entry with no `ended_at` is a session nobody
     * closed, which is a fact rather than a missing value.
     *
     * @param ?string $id
     * @param ?string $repCode
     * @param ?string $organizationId
     * @param ?string $contactId
     * @param ?string $startedAt
     * @param ?string $endedAt
     * @param ?string $reason
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsImpersonationsList(?string $id = null, ?string $repCode = null, ?string $organizationId = null, ?string $contactId = null, ?string $startedAt = null, ?string $endedAt = null, ?string $reason = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/impersonations'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($repCode)) {
            $apiParams['rep_code'] = $repCode;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($startedAt)) {
            $apiParams['started_at'] = $startedAt;
        }

        if (!is_null($endedAt)) {
            $apiParams['ended_at'] = $endedAt;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * An impersonation entry records that a rep acted for a buyer — which rep,
     * in which organization, as which contact, from when until when, and why. It
     * is the only record anywhere that somebody else was behind a buyer's
     * actions, and it is append-only. ⚠ Write this BEFORE the buyer session is
     * minted, not after. The session such a handover creates is a BUYER session,
     * so from the moment it exists every other app sees the contact and not the
     * rep — and an entry written afterwards is an entry that a crash in between
     * loses, leaving an order nobody can attribute. Three fields are owed.
     * `started_at` defaults to the moment of the write and may be sent
     * explicitly, because a system that noticed afterwards has to be able to say
     * when it really began. `ended_at` and `reason` are optional and are written
     * HERE or never: there is no route that fills them in later.
     *
     * @param string $contactId
     * @param string $organizationId
     * @param string $repCode
     * @param ?string $endedAt
     * @param ?string $reason
     * @param ?string $startedAt
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsImpersonationsCreate(string $contactId, string $organizationId, string $repCode, ?string $endedAt = null, ?string $reason = null, ?string $startedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/sales-reps/impersonations'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['rep_code'] = $repCode;
        $apiParams['ended_at'] = $endedAt;
        $apiParams['reason'] = $reason;

        if (!is_null($startedAt)) {
            $apiParams['started_at'] = $startedAt;
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
     * An impersonation entry records that a rep acted for a buyer — which rep,
     * in which organization, as which contact, from when until when, and why. It
     * is the only record anywhere that somebody else was behind a buyer's
     * actions, and it is append-only. This route exists for ONE reason and it is
     * not editing: `contact_id` names a person, so an erasure request has to be
     * able to reach these rows. Everything else about the log is append-only —
     * there is no update route, and this is a removal rather than a correction.
     * Deleting an entry destroys the only record that the session happened at
     * all, so an operator reaching for it to tidy a list is reaching for the
     * wrong thing.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsImpersonationsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/impersonations/{id}'
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
     * An impersonation entry records that a rep acted for a buyer — which rep,
     * in which organization, as which contact, from when until when, and why. It
     * is the only record anywhere that somebody else was behind a buyer's
     * actions, and it is append-only. The route that turns an id back into an
     * entry, which is what an audit trail on another record links to. What is NOT
     * here is a route that edits it: the entry says what happened, and a log that
     * could be corrected afterwards is an opinion.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function salesRepsImpersonationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/sales-reps/impersonations/{id}'
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