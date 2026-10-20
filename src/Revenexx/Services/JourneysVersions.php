<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysVersions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?journey_id=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $journeyId
     * @param ?string $version
     * @param ?string $state
     * @param ?string $entryKey
     * @param ?string $stepCount
     * @param ?string $publishedBy
     * @param ?string $notes
     * @throws RevenexxException
     * @return array
     */
    public function journeysVersionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $journeyId = null, ?string $version = null, ?string $state = null, ?string $entryKey = null, ?string $stepCount = null, ?string $publishedBy = null, ?string $notes = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/versions'
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

        if (!is_null($journeyId)) {
            $apiParams['journey_id'] = $journeyId;
        }

        if (!is_null($version)) {
            $apiParams['version'] = $version;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($entryKey)) {
            $apiParams['entry_key'] = $entryKey;
        }

        if (!is_null($stepCount)) {
            $apiParams['step_count'] = $stepCount;
        }

        if (!is_null($publishedBy)) {
            $apiParams['published_by'] = $publishedBy;
        }

        if (!is_null($notes)) {
            $apiParams['notes'] = $notes;
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
    public function journeysVersionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/versions/{id}'
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