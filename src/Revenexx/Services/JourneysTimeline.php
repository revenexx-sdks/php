<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysTimeline extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?enrollment_id=` for one person's timeline.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $enrollmentId
     * @param ?string $journeyId
     * @param ?string $version
     * @param ?string $stepKey
     * @param ?string $kind
     * @param ?string $outcome
     * @param ?string $eventKey
     * @throws RevenexxException
     * @return array
     */
    public function journeysTimelineList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $enrollmentId = null, ?string $journeyId = null, ?string $version = null, ?string $stepKey = null, ?string $kind = null, ?string $outcome = null, ?string $eventKey = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/enrollment-events'
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

        if (!is_null($enrollmentId)) {
            $apiParams['enrollment_id'] = $enrollmentId;
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

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($outcome)) {
            $apiParams['outcome'] = $outcome;
        }

        if (!is_null($eventKey)) {
            $apiParams['event_key'] = $eventKey;
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
    public function journeysTimelineGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/enrollment-events/{id}'
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