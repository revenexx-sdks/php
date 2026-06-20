<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\OrderListKind;

class Orderlists extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orderlists'
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
     * @param string $name
     * @param string $ownerId
     * @param string $ownerName
     * @param ?array $items
     * @param ?OrderListKind $kind
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?bool $shared
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsCreate(string $name, string $ownerId, string $ownerName, ?array $items = null, ?OrderListKind $kind = null, ?array $metadata = null, ?string $organizationId = null, ?bool $shared = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orderlists'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['owner_id'] = $ownerId;
        $apiParams['owner_name'] = $ownerName;

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['metadata'] = $metadata;
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($shared)) {
            $apiParams['shared'] = $shared;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orderlists/defaults'
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
    public function orderlistsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orderlists/{id}'
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
    public function orderlistsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orderlists/{id}'
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
     * @param ?OrderListKind $kind
     * @param ?array $metadata
     * @param ?string $name
     * @param ?bool $shared
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsUpdate(string $id, ?OrderListKind $kind = null, ?array $metadata = null, ?string $name = null, ?bool $shared = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orderlists/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($shared)) {
            $apiParams['shared'] = $shared;
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
     * @param string $listId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsItemsList(string $listId): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/orderlists/{list_id}/items'
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
     * @param string $name
     * @param ?string $categorySlug
     * @param ?string $costCenterId
     * @param ?string $customSku
     * @param ?string $image
     * @param ?array $metadata
     * @param ?int $position
     * @param ?array $positionTexts
     * @param ?float $price
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?string $subcategorySlug
     * @param ?float $taxRate
     * @param ?string $unit
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsItemsCreate(string $listId, string $name, ?string $categorySlug = null, ?string $costCenterId = null, ?string $customSku = null, ?string $image = null, ?array $metadata = null, ?int $position = null, ?array $positionTexts = null, ?float $price = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?string $subcategorySlug = null, ?float $taxRate = null, ?string $unit = null): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/orderlists/{list_id}/items'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['name'] = $name;
        $apiParams['category_slug'] = $categorySlug;
        $apiParams['cost_center_id'] = $costCenterId;
        $apiParams['custom_sku'] = $customSku;
        $apiParams['image'] = $image;
        $apiParams['metadata'] = $metadata;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['position_texts'] = $positionTexts;
        $apiParams['price'] = $price;
        $apiParams['product_id'] = $productId;

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }
        $apiParams['sku'] = $sku;
        $apiParams['subcategory_slug'] = $subcategorySlug;
        $apiParams['tax_rate'] = $taxRate;
        $apiParams['unit'] = $unit;

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
     * @param array $items
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsItemsReplace(string $listId, array $items): array
    {
        $apiPath = str_replace(
            ['{list_id}'],
            [$listId],
            '/v1/orderlists/{list_id}/items'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['items'] = $items;

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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsItemsDelete(string $listId, string $id): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/orderlists/{list_id}/items/{id}'
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
    public function orderlistsItemsGet(string $listId, string $id): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/orderlists/{list_id}/items/{id}'
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
     * @param ?string $categorySlug
     * @param ?string $costCenterId
     * @param ?string $customSku
     * @param ?string $image
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?array $positionTexts
     * @param ?float $price
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?string $subcategorySlug
     * @param ?float $taxRate
     * @param ?string $unit
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function orderlistsItemsUpdate(string $listId, string $id, ?string $categorySlug = null, ?string $costCenterId = null, ?string $customSku = null, ?string $image = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?array $positionTexts = null, ?float $price = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null, ?string $subcategorySlug = null, ?float $taxRate = null, ?string $unit = null): array
    {
        $apiPath = str_replace(
            ['{list_id}', '{id}'],
            [$listId, $id],
            '/v1/orderlists/{list_id}/items/{id}'
        );

        $apiParams = [];
        $apiParams['list_id'] = $listId;
        $apiParams['id'] = $id;
        $apiParams['category_slug'] = $categorySlug;
        $apiParams['cost_center_id'] = $costCenterId;
        $apiParams['custom_sku'] = $customSku;
        $apiParams['image'] = $image;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['position_texts'] = $positionTexts;
        $apiParams['price'] = $price;
        $apiParams['product_id'] = $productId;

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }
        $apiParams['sku'] = $sku;
        $apiParams['subcategory_slug'] = $subcategorySlug;
        $apiParams['tax_rate'] = $taxRate;
        $apiParams['unit'] = $unit;

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