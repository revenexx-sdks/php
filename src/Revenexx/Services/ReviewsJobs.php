<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ReviewsJobs extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Expires review links past their date — the same as the hourly schedule.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function reviewsJobsMaintain(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/maintenance/run'
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