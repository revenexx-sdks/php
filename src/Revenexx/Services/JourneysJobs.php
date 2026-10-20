<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class JourneysJobs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Executes due steps of all live journeys, oldest first, in chunks, within
     * the budget (setting step_budget_ms). Also the five-minute schedule
     * run-steps.
     *
     * @param ?int $budgetMs
     * @throws RevenexxException
     * @return array
     */
    public function journeysJobsSteps(?int $budgetMs = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/steps/run'
        );

        $apiParams = [];

        if (!is_null($budgetMs)) {
            $apiParams['budget_ms'] = $budgetMs;
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
     * Date triggers that are due today, then the three-hour sweep over carts,
     * orders, subscriptions and audience joins standing in for undelivered
     * announcements (PE-748). Also the hourly schedule run-triggers.
     *
     * @param ?bool $force
     * @throws RevenexxException
     * @return array
     */
    public function journeysJobsTriggers(?bool $force = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/triggers/run'
        );

        $apiParams = [];

        if (!is_null($force)) {
            $apiParams['force'] = $force;
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
}