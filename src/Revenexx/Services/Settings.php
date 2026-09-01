<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Settings extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The tenant's effective settings for the app — the declared schema's
     * defaults merged with stored tenant/market values. Sensitive settings are
     * masked (listed in `masked`, omitted from `settings`).
     *
     * @param string $app
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function settingsGetAppSettings(string $app, ?string $market = null): array
    {
        $apiPath = str_replace(
            ['{app}'],
            [$app],
            '/v1/settings/apps/{app}'
        );

        $apiParams = [];
        $apiParams['app'] = $app;

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}