<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsVocabularies extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxException
     * @return array
     */
    public function mailingsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/vocabularies'
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
    public function mailingsVocabulariesGet(string $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/mailings/vocabularies/{name}'
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