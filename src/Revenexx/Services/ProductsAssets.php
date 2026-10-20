<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ProductsListTrashed;
use Revenexx\Enums\DocumentsDocumentsListSource;
use Revenexx\Enums\License;
use Revenexx\Enums\AssetsLicense;
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
     * Records in the trash are left out: `trashed=only` reads the trash itself,
     * `trashed=include` both. Any other value of `trashed` is refused with 400.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?ProductsListTrashed $trashed
     * @param ?string $id
     * @param ?string $assetFamilyId
     * @param ?string $code
     * @param ?DocumentsDocumentsListSource $source
     * @param ?string $storageAssetId
     * @param ?string $deliveryPath
     * @param ?string $externalUrl
     * @param ?string $fileName
     * @param ?string $fileFormat
     * @param ?int $fileSize
     * @param ?string $fileSizeLabel
     * @param ?string $rightsHolder
     * @param ?License $license
     * @param ?string $usageRights
     * @param ?string $licenseValidFrom
     * @param ?string $licenseValidUntil
     * @param ?string $copyrightNotice
     * @param ?string $rightsOrigin
     * @param ?string $attributeValues
     * @param ?string $externalId
     * @param ?string $externalRefs
     * @param ?string $sourceSyncedAt
     * @param ?string $sourceData
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?ProductsListTrashed $trashed = null, ?string $id = null, ?string $assetFamilyId = null, ?string $code = null, ?DocumentsDocumentsListSource $source = null, ?string $storageAssetId = null, ?string $deliveryPath = null, ?string $externalUrl = null, ?string $fileName = null, ?string $fileFormat = null, ?int $fileSize = null, ?string $fileSizeLabel = null, ?string $rightsHolder = null, ?License $license = null, ?string $usageRights = null, ?string $licenseValidFrom = null, ?string $licenseValidUntil = null, ?string $copyrightNotice = null, ?string $rightsOrigin = null, ?string $attributeValues = null, ?string $externalId = null, ?string $externalRefs = null, ?string $sourceSyncedAt = null, ?string $sourceData = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null): array
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
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

        if (!is_null($fileName)) {
            $apiParams['file_name'] = $fileName;
        }

        if (!is_null($fileFormat)) {
            $apiParams['file_format'] = $fileFormat;
        }

        if (!is_null($fileSize)) {
            $apiParams['file_size'] = $fileSize;
        }

        if (!is_null($fileSizeLabel)) {
            $apiParams['file_size_label'] = $fileSizeLabel;
        }

        if (!is_null($rightsHolder)) {
            $apiParams['rights_holder'] = $rightsHolder;
        }

        if (!is_null($license)) {
            $apiParams['license'] = $license;
        }

        if (!is_null($usageRights)) {
            $apiParams['usage_rights'] = $usageRights;
        }

        if (!is_null($licenseValidFrom)) {
            $apiParams['license_valid_from'] = $licenseValidFrom;
        }

        if (!is_null($licenseValidUntil)) {
            $apiParams['license_valid_until'] = $licenseValidUntil;
        }

        if (!is_null($copyrightNotice)) {
            $apiParams['copyright_notice'] = $copyrightNotice;
        }

        if (!is_null($rightsOrigin)) {
            $apiParams['rights_origin'] = $rightsOrigin;
        }

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($deletedAt)) {
            $apiParams['deleted_at'] = $deletedAt;
        }

        if (!is_null($deletedBy)) {
            $apiParams['deleted_by'] = $deletedBy;
        }

        if (!is_null($deletedById)) {
            $apiParams['deleted_by_id'] = $deletedById;
        }

        if (!is_null($trashBatch)) {
            $apiParams['trash_batch'] = $trashBatch;
        }

        if (!is_null($purgeAt)) {
            $apiParams['purge_at'] = $purgeAt;
        }

        if (!is_null($purgeBlockedReason)) {
            $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
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
     * @param ?string $copyrightNotice
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $deliveryPath
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $externalUrl
     * @param ?string $fileFormat
     * @param ?string $fileName
     * @param ?int $fileSize
     * @param ?AssetsLicense $license
     * @param ?string $licenseValidFrom
     * @param ?string $licenseValidUntil
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?string $rightsHolder
     * @param ?string $rightsOrigin
     * @param ?AssetsSource $source
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $storageAssetId
     * @param ?string $trashBatch
     * @param ?string $usageRights
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsCreate(string $assetFamilyId, string $code, ?array $attributeValues = null, ?string $copyrightNotice = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $deliveryPath = null, ?string $externalId = null, ?array $externalRefs = null, ?string $externalUrl = null, ?string $fileFormat = null, ?string $fileName = null, ?int $fileSize = null, ?AssetsLicense $license = null, ?string $licenseValidFrom = null, ?string $licenseValidUntil = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?string $rightsHolder = null, ?string $rightsOrigin = null, ?AssetsSource $source = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $storageAssetId = null, ?string $trashBatch = null, ?string $usageRights = null): array
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
        $apiParams['copyright_notice'] = $copyrightNotice;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['external_url'] = $externalUrl;
        $apiParams['file_format'] = $fileFormat;
        $apiParams['file_name'] = $fileName;
        $apiParams['file_size'] = $fileSize;
        $apiParams['license'] = $license;
        $apiParams['license_valid_from'] = $licenseValidFrom;
        $apiParams['license_valid_until'] = $licenseValidUntil;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['rights_holder'] = $rightsHolder;
        $apiParams['rights_origin'] = $rightsOrigin;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['storage_asset_id'] = $storageAssetId;
        $apiParams['trash_batch'] = $trashBatch;
        $apiParams['usage_rights'] = $usageRights;

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
     * Deletes the assets in the trash for good, oldest first, up to 200 per call,
     * each through the same checks as a second `DELETE`. One that is held is
     * reported with its reason and the rest go on; `more` says another call has
     * work left. Refused with 403 for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/assets/trash/empty'
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
     * Moves one asset to the trash — or, called on one that is already there,
     * deletes it for good.
     * 
     * The first call stamps the asset, and nothing goes with it; all of them
     * share one `trash_batch` and come back together on `POST …/{id}/restore`.
     * Nothing that points at it changes: its assignments stay and stop acting,
     * and the answer lists them as warnings with a count. Its code (within its
     * asset family) stays reserved while it is in the trash.
     * 
     * The second call deletes it for good, with the rows of its group, and only
     * then do the cascades and `*.deleted` happen. It is refused with 409 while a
     * blocker holds: nothing in the catalog holds an asset — products,
     * categories and manufacturers that name it keep their reference and are
     * counted as warnings. Its stored file is removed through the storage service
     * first (`DELETE /v1/storage/assets/{id}`), unless another asset row uses the
     * same file; a storage that does not answer holds the delete
     * (`storage_unreachable`). A blocker that could not be checked counts as one.
     * It is refused with 403 for a storefront contact — deleting for good is
     * back-office work.
     * 
     * An id no asset of this tenant carries answers 404.
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
     * @param ?string $copyrightNotice
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $deliveryPath
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $externalUrl
     * @param ?string $fileFormat
     * @param ?string $fileName
     * @param ?int $fileSize
     * @param ?AssetsLicense $license
     * @param ?string $licenseValidFrom
     * @param ?string $licenseValidUntil
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?string $rightsHolder
     * @param ?string $rightsOrigin
     * @param ?AssetsSource $source
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?string $storageAssetId
     * @param ?string $trashBatch
     * @param ?string $usageRights
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsUpdate(string $id, ?string $assetFamilyId = null, ?array $attributeValues = null, ?string $code = null, ?string $copyrightNotice = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $deliveryPath = null, ?string $externalId = null, ?array $externalRefs = null, ?string $externalUrl = null, ?string $fileFormat = null, ?string $fileName = null, ?int $fileSize = null, ?AssetsLicense $license = null, ?string $licenseValidFrom = null, ?string $licenseValidUntil = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?string $rightsHolder = null, ?string $rightsOrigin = null, ?AssetsSource $source = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?string $storageAssetId = null, ?string $trashBatch = null, ?string $usageRights = null): array
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
        $apiParams['copyright_notice'] = $copyrightNotice;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['delivery_path'] = $deliveryPath;
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['external_url'] = $externalUrl;
        $apiParams['file_format'] = $fileFormat;
        $apiParams['file_name'] = $fileName;
        $apiParams['file_size'] = $fileSize;
        $apiParams['license'] = $license;
        $apiParams['license_valid_from'] = $licenseValidFrom;
        $apiParams['license_valid_until'] = $licenseValidUntil;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['rights_holder'] = $rightsHolder;
        $apiParams['rights_origin'] = $rightsOrigin;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;
        $apiParams['storage_asset_id'] = $storageAssetId;
        $apiParams['trash_batch'] = $trashBatch;
        $apiParams['usage_rights'] = $usageRights;

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
     * Brings a asset back from the trash, together with every record that went
     * with it (its `trash_batch`). A record trashed on its own before stays in
     * the trash. Everything that pointed at it acts again as it did, because
     * nothing was changed when it went.
     * 
     * Restoring needs the same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/assets/{id}/restore'
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