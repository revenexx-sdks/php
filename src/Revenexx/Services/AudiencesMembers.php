<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class AudiencesMembers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Members per market (largest first, at most eight named, the rest summed,
     * members without a market last) and per source (rule, import, by hand), each
     * with its share. Labels follow Accept-Language (de or en).
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersComposition(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/composition'
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
     * Each row names a contact id or a mail address of an existing contact. A row
     * that matches nobody is refused with its reason rather than creating a
     * person. At most 1000 rows per call.
     *
     * @param string $id
     * @param ?string $emails
     * @param ?string $filename
     * @param ?array $rows
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesImport(string $id, ?string $emails = null, ?string $filename = null, ?array $rows = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/import'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($emails)) {
            $apiParams['emails'] = $emails;
        }

        if (!is_null($filename)) {
            $apiParams['filename'] = $filename;
        }

        if (!is_null($rows)) {
            $apiParams['rows'] = $rows;
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
     * The page a send reads: members in contact-id order after `cursor`. Hand
     * `next_cursor` back until `done`. Stable while a recompute runs — a page
     * never repeats or skips a member who stays.
     *
     * @param string $id
     * @param ?string $cursor
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersRead(string $id, ?string $cursor = null, ?int $limit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/members'
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
     * Hand-picked members — also what a journey's "add to audience" step calls.
     * At most 500 contacts per call; a contact that does not exist is refused
     * with its reason.
     *
     * @param string $id
     * @param ?string $contactId
     * @param ?array $contactIds
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersAdd(string $id, ?string $contactId = null, ?array $contactIds = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/members'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($contactIds)) {
            $apiParams['contact_ids'] = $contactIds;
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
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersRemove(string $id, string $contactId): array
    {
        $apiPath = str_replace(
            ['{id}', '{contact_id}'],
            [$id, $contactId],
            '/v1/audiences/audiences/{id}/members/{contact_id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['contact_id'] = $contactId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Joins and leaves per day in Europe/Berlin, from the first change to the
     * last with every day between, at most the latest 90 days. Counted from the
     * join/leave history; `capped` says the history was longer than one read
     * covers.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersTimeline(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/timeline'
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
     * Every import into a static audience, with its counts and refused rows.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $audienceId
     * @param ?string $filename
     * @param ?string $rows
     * @param ?string $accepted
     * @param ?string $rejected
     * @param ?string $state
     * @throws RevenexxException
     * @return array
     */
    public function audiencesImportsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $audienceId = null, ?string $filename = null, ?string $rows = null, ?string $accepted = null, ?string $rejected = null, ?string $state = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/imports'
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

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($filename)) {
            $apiParams['filename'] = $filename;
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
    public function audiencesImportsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/imports/{id}'
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
     * The join/leave history; filter `?audience_id=` or `?contact_id=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $audienceId
     * @param ?string $contactId
     * @param ?string $kind
     * @param ?string $source
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMemberEventsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $audienceId = null, ?string $contactId = null, ?string $kind = null, ?string $source = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/member-events'
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

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
    public function audiencesMemberEventsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/member-events/{id}'
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
     * Membership rows across audiences; filter `?audience_id=` or `?contact_id=`.
     * For a send, read GET /audiences/audiences/{id}/members instead.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $audienceId
     * @param ?string $audienceCode
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $email
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $eligible
     * @param ?string $source
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $audienceId = null, ?string $audienceCode = null, ?string $contactId = null, ?string $organizationId = null, ?string $email = null, ?string $locale = null, ?string $market = null, ?string $eligible = null, ?string $source = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/members'
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

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($audienceCode)) {
            $apiParams['audience_code'] = $audienceCode;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($eligible)) {
            $apiParams['eligible'] = $eligible;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
    public function audiencesMembersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/members/{id}'
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
     * For the storefront's personalisation: the active audiences one logged-in
     * contact belongs to, by id and by code.
     *
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function audiencesMembersMemberships(string $contactId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/memberships'
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
}