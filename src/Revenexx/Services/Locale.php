<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class Locale extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get the current user location based on IP. Returns an object with user
     * country code, country name, continent name, continent code, ip address and
     * suggested currency. You can use the locale header to get the data in a
     * supported language.
     * 
     * ([IP Geolocation by DB-IP](https://db-ip.com))
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeGet(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale'
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
     * List of all locale codes in [ISO
     * 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListCodes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/codes'
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
     * List of all continents. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListContinents(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/continents'
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
     * List of all countries. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListCountries(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/countries'
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
     * List of all countries that are currently members of the EU. You can use the
     * locale header to get the data in a supported language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListCountriesEU(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/countries/eu'
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
     * List of all countries phone codes. You can use the locale header to get the
     * data in a supported language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListCountriesPhones(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/countries/phones'
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
     * List of all currencies, including currency symbol, name, plural, and
     * decimal digits for all major and minor currencies. You can use the locale
     * header to get the data in a supported language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListCurrencies(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/currencies'
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
     * List of all languages classified by ISO 639-1 including 2-letter code, name
     * in English, and name in the respective language.
     *
     * @throws RevenexxException
     * @return array
     */
    public function localeListLanguages(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/locale/languages'
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