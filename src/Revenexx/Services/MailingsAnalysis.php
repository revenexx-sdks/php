<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsAnalysis extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List clicked links of mailings
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $mailingId
     * @param ?string $url
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisListClicks(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $mailingId = null, ?string $url = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/clicks'
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

        if (!is_null($mailingId)) {
            $apiParams['mailing_id'] = $mailingId;
        }

        if (!is_null($url)) {
            $apiParams['url'] = $url;
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
    public function mailingsAnalysisGetClick(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/clicks/{id}'
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
     * The ledger of sequencer announcements, one row per announcement. Read-only.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $mailingId
     * @param ?string $kind
     * @param ?string $email
     * @param ?string $contactId
     * @param ?string $messageId
     * @param ?string $isMachine
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisListEngagements(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $mailingId = null, ?string $kind = null, ?string $email = null, ?string $contactId = null, ?string $messageId = null, ?string $isMachine = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/engagements'
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

        if (!is_null($mailingId)) {
            $apiParams['mailing_id'] = $mailingId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($messageId)) {
            $apiParams['message_id'] = $messageId;
        }

        if (!is_null($isMachine)) {
            $apiParams['is_machine'] = $isMachine;
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
    public function mailingsAnalysisGetEngagement(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/engagements/{id}'
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
     * Every clicked link with clicks, unique clickers and its share of all
     * clicks, the most clicked first. `top` carries the most clicked links as
     * rows of label and value, worded in the caller language.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisClicks(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/clicks'
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
     * Recipient outcomes, deliveries, bounces, opens by people and by machines
     * apart, clicks, click rate, click-to-open, unsubscribes, complaints and
     * revenue. Rates are computed from unique clicks and human opens only.
     * `funnel`, `attention` and `outcomes` carry the same figures as rows of
     * label and value, worded in the caller language.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisStats(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/stats'
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
     * Human opens and clicks per day in the tenant time zone, from the first
     * reaction to the last with every day between, at most the latest 60 days.
     * Machine opens are left out.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisTimeline(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/mailings/{id}/timeline'
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
     * List the figures of mailings
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $mailingId
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisListStats(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $mailingId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/stats'
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

        if (!is_null($mailingId)) {
            $apiParams['mailing_id'] = $mailingId;
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
     * The hourly schedule, callable by hand: recomputes revenue from the
     * campaigns ledger and lifts delivered and clicked figures to what the
     * sequencer messages say.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisSweep(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/stats/sweep'
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
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function mailingsAnalysisGetStats(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/stats/{id}'
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