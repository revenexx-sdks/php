<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Audit extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Read-only. The values are the tenant's settings in Console; they are
     * changed there, not here. `defaults` is true while Console holds none for
     * the tenant (two years of history, 90 days of trash). An app's trash purge
     * reads `trash_retention_days` here.
     *
     * @throws RevenexxException
     * @return array
     */
    public function auditGetSettings(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audit/settings'
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