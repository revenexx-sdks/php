<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class LoyaltyJobs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Credits orders of the last 48 hours, books their completed returns and
     * cancellations, expires due points, moves agreement projections on and
     * re-reads tiers — the same as the hourly schedule.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyJobsRecalculate(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/recalculate/run'
        );

        $apiParams = [];
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