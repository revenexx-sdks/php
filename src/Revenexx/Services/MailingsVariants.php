<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsVariants extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Reserved for the A/B test of a later version. Empty in this one.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $mailingId
     * @param ?string $isWinner
     * @throws RevenexxException
     * @return array
     */
    public function mailingsVariantsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $mailingId = null, ?string $isWinner = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/variants'
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

        if (!is_null($isWinner)) {
            $apiParams['is_winner'] = $isWinner;
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
    public function mailingsVariantsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/mailings/variants/{id}'
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