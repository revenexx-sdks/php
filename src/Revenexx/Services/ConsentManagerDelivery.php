<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ConsentManagerDelivery extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The latest version published for the market in `x-revenexx-market`, else
     * the shop's. Cached at the gateway for the whole tenant per market and
     * dropped on every publish. With nothing published it answers 404
     * `no_policy_published` with `details.reason: nothing_published`, which the
     * storefront treats as everything denied: no banner, nothing optional loads.
     *
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerDeliveryPolicy(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/delivery/policy'
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
     * A rendered draft, shaped like the delivered policy, with `version.preview:
     * true` and no version id. Not cached.
     *
     * @param string $token
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerDeliveryPreview(string $token): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/consent-manager/delivery/preview/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}