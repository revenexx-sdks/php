<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysStats extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List step counters
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $journeyId
     * @param ?string $version
     * @param ?string $stepKey
     * @param ?string $entered
     * @param ?string $passed
     * @param ?string $sent
     * @param ?string $skipped
     * @param ?string $failed
     * @param ?string $exited
     * @param ?string $clicked
     * @param ?string $goalReached
     * @throws RevenexxException
     * @return array
     */
    public function journeysStatsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $journeyId = null, ?string $version = null, ?string $stepKey = null, ?string $entered = null, ?string $passed = null, ?string $sent = null, ?string $skipped = null, ?string $failed = null, ?string $exited = null, ?string $clicked = null, ?string $goalReached = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/step-stats'
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

        if (!is_null($stepKey)) {
            $apiParams['step_key'] = $stepKey;
        }

        if (!is_null($entered)) {
            $apiParams['entered'] = $entered;
        }

        if (!is_null($passed)) {
            $apiParams['passed'] = $passed;
        }

        if (!is_null($sent)) {
            $apiParams['sent'] = $sent;
        }

        if (!is_null($skipped)) {
            $apiParams['skipped'] = $skipped;
        }

        if (!is_null($failed)) {
            $apiParams['failed'] = $failed;
        }

        if (!is_null($exited)) {
            $apiParams['exited'] = $exited;
        }

        if (!is_null($clicked)) {
            $apiParams['clicked'] = $clicked;
        }

        if (!is_null($goalReached)) {
            $apiParams['goal_reached'] = $goalReached;
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
    public function journeysStatsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/step-stats/{id}'
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