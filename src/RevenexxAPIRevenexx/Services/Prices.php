<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\PriceListStatus;
use RevenexxAPIRevenexx\Enums\PriceEntryType;

class Prices extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesListsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/prices/lists'
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
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $description
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $marketId
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?int $priority
     * @param ?PriceListStatus $status
     * @param ?bool $taxIncluded
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesListsCreate(string $code, string $name, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $description = null, ?bool $isDefault = null, ?array $labels = null, ?string $marketId = null, ?array $metadata = null, ?string $organizationId = null, ?int $priority = null, ?PriceListStatus $status = null, ?bool $taxIncluded = null, ?string $validFrom = null, ?string $validUntil = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/prices/lists'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;
        $apiParams['market_id'] = $marketId;
        $apiParams['metadata'] = $metadata;
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($taxIncluded)) {
            $apiParams['tax_included'] = $taxIncluded;
        }
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesListsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/prices/lists/defaults'
        );

        $apiParams = [];

        $apiHeaders = [];

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
    public function pricesListsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/prices/lists/{id}'
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
    public function pricesListsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/prices/lists/{id}'
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
     * @param ?string $channelId
     * @param ?string $code
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $description
     * @param ?bool $isDefault
     * @param ?array $labels
     * @param ?string $marketId
     * @param ?array $metadata
     * @param ?string $name
     * @param ?string $organizationId
     * @param ?int $priority
     * @param ?PriceListStatus $status
     * @param ?bool $taxIncluded
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesListsUpdate(string $id, ?string $channelId = null, ?string $code = null, ?string $contactId = null, ?string $currency = null, ?string $description = null, ?bool $isDefault = null, ?array $labels = null, ?string $marketId = null, ?array $metadata = null, ?string $name = null, ?string $organizationId = null, ?int $priority = null, ?PriceListStatus $status = null, ?bool $taxIncluded = null, ?string $validFrom = null, ?string $validUntil = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/prices/lists/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['channel_id'] = $channelId;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['contact_id'] = $contactId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['labels'] = $labels;
        $apiParams['market_id'] = $marketId;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($taxIncluded)) {
            $apiParams['tax_included'] = $taxIncluded;
        }
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;

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
     * @param string $listId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesList(string $listId): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/prices/lists/{list_id}/entries'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $listId
     * @param ?array $metadata
     * @param ?PriceEntryType $priceType
     * @param ?string $productId
     * @param ?float $quantityMin
     * @param ?string $sku
     * @param ?string $unit
     * @param ?float $unitPrice
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesCreate(string $listId, ?array $metadata = null, ?PriceEntryType $priceType = null, ?string $productId = null, ?float $quantityMin = null, ?string $sku = null, ?string $unit = null, ?float $unitPrice = null, ?string $validFrom = null, ?string $validUntil = null): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/prices/lists/{list_id}/entries'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['metadata'] = $metadata;

        if (!is_null($priceType)) {
            $apiParams['price_type'] = $priceType;
        }
        $apiParams['product_id'] = $productId;

        if (!is_null($quantityMin)) {
            $apiParams['quantity_min'] = $quantityMin;
        }
        $apiParams['sku'] = $sku;
        $apiParams['unit'] = $unit;

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
        }
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;

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
     * @param string $listId
     * @param array $entries
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesReplace(string $listId, array $entries): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/prices/lists/{list_id}/entries'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['entries'] = $entries;

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
     * @param string $listId
     * @param array $entries
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesBulk(string $listId, array $entries): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/prices/lists/{list_id}/entries/bulk'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['entries'] = $entries;

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
     * @param string $listId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesDelete(string $listId, string $id): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/prices/lists/{list_id}/entries/{id}'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
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
     * @param string $listId
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesGet(string $listId, string $id): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/prices/lists/{list_id}/entries/{id}'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
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
     * @param string $listId
     * @param string $id
     * @param ?array $metadata
     * @param ?PriceEntryType $priceType
     * @param ?string $productId
     * @param ?float $quantityMin
     * @param ?string $sku
     * @param ?string $unit
     * @param ?float $unitPrice
     * @param ?string $validFrom
     * @param ?string $validUntil
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesEntriesUpdate(string $listId, string $id, ?array $metadata = null, ?PriceEntryType $priceType = null, ?string $productId = null, ?float $quantityMin = null, ?string $sku = null, ?string $unit = null, ?float $unitPrice = null, ?string $validFrom = null, ?string $validUntil = null): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/prices/lists/{list_id}/entries/{id}'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['id'] = $id;
        $apiParams['metadata'] = $metadata;

        if (!is_null($priceType)) {
            $apiParams['price_type'] = $priceType;
        }
        $apiParams['product_id'] = $productId;

        if (!is_null($quantityMin)) {
            $apiParams['quantity_min'] = $quantityMin;
        }
        $apiParams['sku'] = $sku;
        $apiParams['unit'] = $unit;

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
        }
        $apiParams['valid_from'] = $validFrom;
        $apiParams['valid_until'] = $validUntil;

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
     * @param array $items
     * @param ?string $at
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $marketId
     * @param ?string $organizationId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function pricesResolve(array $items, ?string $at = null, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $marketId = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/prices/resolve'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['at'] = $at;
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['market_id'] = $marketId;
        $apiParams['organization_id'] = $organizationId;

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