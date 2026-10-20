<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class LoyaltyVocabularies extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/vocabularies'
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
     * @param string $name
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyVocabulariesGet(string $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/loyalty/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}