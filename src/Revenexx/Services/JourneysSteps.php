<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysSteps extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?journey_version_id=` or `?journey_id=&version=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $journeyVersionId
     * @param ?string $journeyId
     * @param ?string $version
     * @param ?string $key
     * @param ?string $kind
     * @param ?string $label
     * @param ?string $nextKey
     * @param ?string $yesKey
     * @param ?string $noKey
     * @param ?string $position
     * @throws RevenexxException
     * @return array
     */
    public function journeysStepsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $journeyVersionId = null, ?string $journeyId = null, ?string $version = null, ?string $key = null, ?string $kind = null, ?string $label = null, ?string $nextKey = null, ?string $yesKey = null, ?string $noKey = null, ?string $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/steps'
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

        if (!is_null($journeyVersionId)) {
            $apiParams['journey_version_id'] = $journeyVersionId;
        }

        if (!is_null($journeyId)) {
            $apiParams['journey_id'] = $journeyId;
        }

        if (!is_null($version)) {
            $apiParams['version'] = $version;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($nextKey)) {
            $apiParams['next_key'] = $nextKey;
        }

        if (!is_null($yesKey)) {
            $apiParams['yes_key'] = $yesKey;
        }

        if (!is_null($noKey)) {
            $apiParams['no_key'] = $noKey;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
    public function journeysStepsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/steps/{id}'
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