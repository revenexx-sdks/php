<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

class Greetings extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsDigest(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/digest'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/greetings'
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
     * @param ?string $locale
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsCreate(string $name, ?string $locale = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/greetings'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/greetings/{id}'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/greetings/{id}'
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
     * @param string $id
     * @param ?string $locale
     * @param ?string $message
     * @param ?array $metadata
     * @param ?string $name
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function greetingsUpdate(string $id, ?string $locale = null, ?string $message = null, ?array $metadata = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/greetings/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($message)) {
            $apiParams['message'] = $message;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}