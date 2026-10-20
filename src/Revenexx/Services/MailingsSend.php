<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsSend extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The five-minute schedule, callable by hand: prepares due and unfinished
     * mailings chunk by chunk until the time budget is spent.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function mailingsSendRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/send/run'
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