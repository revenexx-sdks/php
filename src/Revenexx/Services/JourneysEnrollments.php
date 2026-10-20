<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysEnrollments extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?journey_id=`, `?state=`, `?contact_id=`, `?current_step=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $journeyId
     * @param ?string $version
     * @param ?string $journeyVersionId
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $email
     * @param ?string $phone
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $currentStep
     * @param ?string $state
     * @param ?string $exitReason
     * @param ?string $triggerEventId
     * @throws RevenexxException
     * @return array
     */
    public function journeysEnrollmentsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $journeyId = null, ?string $version = null, ?string $journeyVersionId = null, ?string $contactId = null, ?string $organizationId = null, ?string $email = null, ?string $phone = null, ?string $locale = null, ?string $market = null, ?string $currentStep = null, ?string $state = null, ?string $exitReason = null, ?string $triggerEventId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/enrollments'
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

        if (!is_null($journeyVersionId)) {
            $apiParams['journey_version_id'] = $journeyVersionId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($currentStep)) {
            $apiParams['current_step'] = $currentStep;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($exitReason)) {
            $apiParams['exit_reason'] = $exitReason;
        }

        if (!is_null($triggerEventId)) {
            $apiParams['trigger_event_id'] = $triggerEventId;
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
    public function journeysEnrollmentsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/enrollments/{id}'
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
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysEnrollmentsExit(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/enrollments/{id}/exit'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}