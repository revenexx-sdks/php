<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsRecipients extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?mailing_id=` for one mailing, `?outcome=` for one outcome. Written
     * by the send pipeline only.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $mailingId
     * @param ?string $contactId
     * @param ?string $email
     * @param ?string $outcome
     * @param ?string $reason
     * @param ?string $market
     * @param ?string $messageId
     * @throws RevenexxException
     * @return array
     */
    public function mailingsRecipientsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $mailingId = null, ?string $contactId = null, ?string $email = null, ?string $outcome = null, ?string $reason = null, ?string $market = null, ?string $messageId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/recipients'
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

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($outcome)) {
            $apiParams['outcome'] = $outcome;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($messageId)) {
            $apiParams['message_id'] = $messageId;
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
    public function mailingsRecipientsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/recipients/{id}'
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