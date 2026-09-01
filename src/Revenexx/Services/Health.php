<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Health extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Answers as long as the process is running. Never touches a dependency, so
     * it stays 200 while the gateway is degraded — use readiness to decide
     * whether to send traffic.
     *
     * @throws RevenexxException
     * @return array
     */
    public function healthLive(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/live'
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
     * Answers 200 once the gateway's registry source is reachable, 503 until
     * then.
     *
     * @throws RevenexxException
     * @return array
     */
    public function healthReady(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/health/ready'
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
}