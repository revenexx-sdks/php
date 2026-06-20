<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\MarketStatus;

class Markets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
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
     * @param string $code
     * @param string $name
     * @param ?string $currency
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?MarketStatus $status
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCreate(string $code, string $name, ?string $currency = null, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?MarketStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/markets'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param ?string $code
     * @param ?string $currency
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $name
     * @param ?int $position
     * @param ?MarketStatus $status
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsUpdate(string $id, ?string $code = null, ?string $currency = null, ?bool $isDefault = null, ?array $labels = null, ?string $name = null, ?int $position = null, ?MarketStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsContext(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/markets/{id}/context'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCurrenciesList(string $marketId): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/currencies'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $code
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCurrenciesCreate(string $marketId, string $code, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/currencies'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCurrenciesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCurrenciesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsCurrenciesUpdate(string $marketId, string $id, ?string $code = null, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/currencies/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesList(string $marketId): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $code
     * @param string $country
     * @param string $language
     * @param ?bool $isDefault
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesCreate(string $marketId, string $code, string $country, string $language, ?bool $isDefault = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/locales'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;
        $apiParams['country'] = $country;
        $apiParams['language'] = $language;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?string $country
     * @param ?bool $isDefault
     * @param ?string $language
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsLocalesUpdate(string $marketId, string $id, ?string $code = null, ?string $country = null, ?bool $isDefault = null, ?string $language = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/locales/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($language)) {
            $apiParams['language'] = $language;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesList(string $marketId): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $code
     * @param string $name
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?int $position
     * @param ?float $rate
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesCreate(string $marketId, string $code, string $name, ?bool $isDefault = null, ?array $labels = null, ?int $position = null, ?float $rate = null): array
    {
        $apiPath = str_replace(
            ['{market_id}'],
            [$marketId],
            '/v1/markets/{market_id}/tax_classes'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rate)) {
            $apiParams['rate'] = $rate;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesDelete(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesGet(string $marketId, string $id): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $marketId
     * @param string $id
     * @param ?string $code
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $name
     * @param ?int $position
     * @param ?float $rate
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function marketsTaxClassesUpdate(string $marketId, string $id, ?string $code = null, ?bool $isDefault = null, ?array $labels = null, ?string $name = null, ?int $position = null, ?float $rate = null): array
    {
        $apiPath = str_replace(
            ['{market_id}', '{id}'],
            [$marketId, $id],
            '/v1/markets/{market_id}/tax_classes/{id}'
        );

        $apiParams = [];
        $apiParams['market_id'] = $marketId;
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rate)) {
            $apiParams['rate'] = $rate;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}