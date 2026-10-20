<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CustomersFollowUps extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A follow-up — a task, or any entry with a due date — is done: `done_at`
     * is set and it leaves every list of open tasks. The entry stays on the
     * timeline as it was filed. Done twice answers the entry as it is.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactEventsDone(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contact_events/{id}/done'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}