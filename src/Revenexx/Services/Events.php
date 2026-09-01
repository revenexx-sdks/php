<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Events extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every event type this tenant's installed apps and platform services declare
     * — what can be published and subscribed to, independent of whether one has
     * fired yet. Each entry says what causes it (`trigger`) and what it carries
     * (`sample`, `data_schema`).
     *
     * @param ?string $fields
     * @throws RevenexxException
     * @return array
     */
    public function eventsGetCatalog(?string $fields = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/events/catalog'
        );

        $apiParams = [];

        if (!is_null($fields)) {
            $apiParams['fields'] = $fields;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}