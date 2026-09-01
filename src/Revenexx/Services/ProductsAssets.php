<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ProductsAssetsListSource;
use Revenexx\Enums\AssetsSource;

class ProductsAssets extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * One piece of media in the decoupled asset domain. The bytes live either in
     * this platform's object store (`source: "storage"` with a `storage_asset_id`
     * that survives a rename) or on somebody else's host (`source: "external"`
     * with an `external_url`), and the database enforces the pair so neither half
     * can be stored alone. A product points at an asset by its code through a
     * media attribute; there is no product-to-asset link table in this app.
     * 
     * Every column of `assets` is an exact-match query parameter, `order` sorts
     * by one column, and `limit`/`offset` page through `page.total`. A query key
     * that is NOT a column is dropped rather than refused, and the `filter`
     * object echoes the ones that were understood — that echo is the only way
     * to tell an unfiltered answer from an empty one. It reads rows exactly as
     * they are stored: no join is resolved, no jsonb value is unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $assetFamilyId
     * @param ?string $code
     * @param ?ProductsAssetsListSource $source
     * @param ?string $storageAssetId
     * @param ?string $deliveryPath
     * @param ?string $externalUrl
     * @param ?string $attributeValues
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $assetFamilyId = null, ?string $code = null, ?ProductsAssetsListSource $source = null, ?string $storageAssetId = null, ?string $deliveryPath = null, ?string $externalUrl = null, ?string $attributeValues = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/assets'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($assetFamilyId)) {
            $apiParams['asset_family_id'] = $assetFamilyId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($storageAssetId)) {
            $apiParams['storage_asset_id'] = $storageAssetId;
        }

        if (!is_null($deliveryPath)) {
            $apiParams['delivery_path'] = $deliveryPath;
        }

        if (!is_null($externalUrl)) {
            $apiParams['external_url'] = $externalUrl;
        }

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Creates one asset and answers 201 with the stored row, including the id and
     * the timestamps the database filled in — a client never sends an id, it
     * reads one back and uses it in the path of every later call.
     * 
     * One piece of media in the decoupled asset domain. The bytes live either in
     * this platform's object store (`source: "storage"` with a `storage_asset_id`
     * that survives a rename) or on somebody else's host (`source: "external"`
     * with an `external_url`), and the database enforces the pair so neither half
     * can be stored alone. A product points at an asset by its code through a
     * media attribute; there is no product-to-asset link table in this app.
     * 
     * `asset_family_id` and `code` are the only columns the database refuses the
     * row without; everything else has a default or is nullable. A second row
     * with the same `asset_family_id` and `code` answers 409. This app owns the
     * create, because it is the only place an external URL can enter the catalog:
     * an asset with no family falls back to the `default_asset_family` setting,
     * and an `external` one is refused unless the tenant allows external media
     * and the URL's host is on its allow-list.
     *
     * @param string $assetFamilyId
     * @param string $code
     * @param ?array $attributeValues
     * @param ?string $deliveryPath
     * @param ?string $externalUrl
     * @param ?AssetsSource $source
     * @param ?string $storageAssetId
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsCreate(string $assetFamilyId, string $code, ?array $attributeValues = null, ?string $deliveryPath = null, ?string $externalUrl = null, ?AssetsSource $source = null, ?string $storageAssetId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/assets'
        );

        $apiParams = [];
        $apiParams['asset_family_id'] = $assetFamilyId;
        $apiParams['code'] = $code;

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['external_url'] = $externalUrl;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['storage_asset_id'] = $storageAssetId;

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
     * Deletes one asset by id. It is a hard delete — the row is gone, and the
     * answer is a confirmation rather than a result to branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no asset of this tenant carries answers 404; there is no 409, because
     * every foreign key pointing at this entity resolves itself on delete rather
     * than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/assets/{id}'
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
     * Reads one asset by its id — the whole row, every column, as it is stored.
     * 
     * One piece of media in the decoupled asset domain. The bytes live either in
     * this platform's object store (`source: "storage"` with a `storage_asset_id`
     * that survives a rename) or on somebody else's host (`source: "external"`
     * with an `external_url`), and the database enforces the pair so neither half
     * can be stored alone. A product points at an asset by its code through a
     * media attribute; there is no product-to-asset link table in this app.
     * 
     * An id no asset of this tenant carries answers 404, and so does one
     * belonging to another tenant: row-level security makes that row invisible
     * rather than forbidden. A malformed id answers 400 before the route is
     * reached.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/assets/{id}'
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
     * Updates one asset by id. A partial patch: the body names only the columns
     * to change and every column it leaves out keeps its current value, so there
     * is no read-modify-write and no way to blank a field by forgetting it.
     * 
     * One piece of media in the decoupled asset domain. The bytes live either in
     * this platform's object store (`source: "storage"` with a `storage_asset_id`
     * that survives a rename) or on somebody else's host (`source: "external"`
     * with an `external_url`), and the database enforces the pair so neither half
     * can be stored alone. A product points at an asset by its code through a
     * media attribute; there is no product-to-asset link table in this app.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `asset_family_id` and `code` answers 409.
     *
     * @param string $id
     * @param ?string $assetFamilyId
     * @param ?array $attributeValues
     * @param ?string $code
     * @param ?string $deliveryPath
     * @param ?string $externalUrl
     * @param ?AssetsSource $source
     * @param ?string $storageAssetId
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsUpdate(string $id, ?string $assetFamilyId = null, ?array $attributeValues = null, ?string $code = null, ?string $deliveryPath = null, ?string $externalUrl = null, ?AssetsSource $source = null, ?string $storageAssetId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/assets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($assetFamilyId)) {
            $apiParams['asset_family_id'] = $assetFamilyId;
        }

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['external_url'] = $externalUrl;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['storage_asset_id'] = $storageAssetId;

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