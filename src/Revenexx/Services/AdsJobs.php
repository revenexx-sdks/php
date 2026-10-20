<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class AdsJobs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Records conversions of orders placed in the last three hours, requests
     * audience uploads that are due, books spend that waited for campaigns,
     * recounts the totals of each account — the same as the hourly schedule.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function adsJobsRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/ads/run'
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