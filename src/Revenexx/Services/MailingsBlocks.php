<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class MailingsBlocks extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The product, voucher and footer blocks: the keys each carries in a design
     * and the variables that fill it per recipient.
     *
     * @throws RevenexxException
     * @return array
     */
    public function mailingsBlocksRead(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/mailings/blocks'
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