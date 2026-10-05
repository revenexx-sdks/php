<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class TagManagerDelivery extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The latest published container for the requested market (its own, else the
     * one for every market), with active marketing tags only and the market's tag
     * settings. Answers an empty container when nothing is published.
     * Gateway-cached per tenant and market; a publish invalidates it.
     *
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerDeliveryContainer(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/delivery/container'
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
     * The unpublished draft, built now, for a valid preview token. Never cached.
     * An unknown and an expired token are answered alike, with 404.
     *
     * @param string $token
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerDeliveryPreview(string $token): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/tag-manager/delivery/preview/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}