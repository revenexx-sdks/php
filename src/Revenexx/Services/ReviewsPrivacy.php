<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ReviewsPrivacy extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Stars and text stay so product figures do not move; name, contact and
     * company are cleared, and the person's review links are removed. The same
     * happens on `customers.contact.deleted` and
     * `marketing_consents.consents.erased`.
     *
     * @param string $contactId
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function reviewsPrivacyAnonymise(string $contactId, array $data): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/reviews/contacts/{contact_id}/anonymise'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
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