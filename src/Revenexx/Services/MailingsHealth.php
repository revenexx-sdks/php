<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsHealth extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Sent, delivered, bounced, complained and unsubscribed over the mailings of
     * the last 30 days, the rates, and `alert` when the complaint rate passes the
     * setting. `bars` are the three rates as bar-list rows in the language of
     * Accept-Language, with the counts behind them and the alert sentence on the
     * complaint row.
     *
     * @throws RevenexxException
     * @return array
     */
    public function mailingsHealthRead(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/health'
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