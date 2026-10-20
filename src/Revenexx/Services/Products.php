<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ProductsListTrashed;
use Revenexx\Enums\ProductsListKind;
use Revenexx\Enums\ProductsListStatus;
use Revenexx\Enums\ProductsKind;
use Revenexx\Enums\ProductsStatus;
use Revenexx\Enums\ProductsChannelsAssignMode;
use Revenexx\Enums\ProductsCopyParts;

class Products extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The catalog itself. A product row carries only what every product has —
     * SKU, kind, family, enabled, tax class — and everything the tenant
     * modelled lives in the `attribute_values` jsonb document, keyed by attribute
     * CODE inside one of four scope buckets (common, per locale, per channel, per
     * channel and locale). `label` is a generated column, maintained by the
     * database so a grid of twenty thousand rows can sort and filter on a name
     * with no join. `kind` says where the row sits in the variant hierarchy: a
     * `model` carries what its variants share and is never sold itself.
     * 
     * Every column of `products` is an exact-match query parameter, `order` sorts
     * by one column, and `limit`/`offset` page through `page.total`. A query key
     * that is NOT a column is dropped rather than refused, and the `filter`
     * object echoes the ones that were understood — that echo is the only way
     * to tell an unfiltered answer from an empty one. It reads rows exactly as
     * they are stored: no join is resolved, no jsonb value is unpacked.
     * 
     * Records in the trash are left out: `trashed=only` reads the trash itself,
     * `trashed=include` both. Any other value of `trashed` is refused with 400.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?ProductsListTrashed $trashed
     * @param ?string $id
     * @param ?string $sku
     * @param ?ProductsListKind $kind
     * @param ?string $parentId
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?string $manufacturerId
     * @param ?bool $enabled
     * @param ?ProductsListStatus $status
     * @param ?string $statusChangedAt
     * @param ?string $channelRelease
     * @param ?string $channels
     * @param ?string $taxClass
     * @param ?string $baseValues
     * @param ?string $attributeValues
     * @param ?string $label
     * @param ?string $quantifiedAssociations
     * @param ?string $completeness
     * @param ?bool $manufacturerGpsrComplete
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
    public function productsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?ProductsListTrashed $trashed = null, ?string $id = null, ?string $sku = null, ?ProductsListKind $kind = null, ?string $parentId = null, ?string $familyId = null, ?string $familyVariantId = null, ?string $manufacturerId = null, ?bool $enabled = null, ?ProductsListStatus $status = null, ?string $statusChangedAt = null, ?string $channelRelease = null, ?string $channels = null, ?string $taxClass = null, ?string $baseValues = null, ?string $attributeValues = null, ?string $label = null, ?string $quantifiedAssociations = null, ?string $completeness = null, ?bool $manufacturerGpsrComplete = null, ?string $externalId = null, ?string $externalRefs = null, ?string $sourceSyncedAt = null, ?string $sourceData = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products'
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

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }

        if (!is_null($familyVariantId)) {
            $apiParams['family_variant_id'] = $familyVariantId;
        }

        if (!is_null($manufacturerId)) {
            $apiParams['manufacturer_id'] = $manufacturerId;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($statusChangedAt)) {
            $apiParams['status_changed_at'] = $statusChangedAt;
        }

        if (!is_null($channelRelease)) {
            $apiParams['channel_release'] = $channelRelease;
        }

        if (!is_null($channels)) {
            $apiParams['channels'] = $channels;
        }

        if (!is_null($taxClass)) {
            $apiParams['tax_class'] = $taxClass;
        }

        if (!is_null($baseValues)) {
            $apiParams['base_values'] = $baseValues;
        }

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($label)) {
            $apiParams['label'] = $label;
        }

        if (!is_null($quantifiedAssociations)) {
            $apiParams['quantified_associations'] = $quantifiedAssociations;
        }

        if (!is_null($completeness)) {
            $apiParams['completeness'] = $completeness;
        }

        if (!is_null($manufacturerGpsrComplete)) {
            $apiParams['manufacturer_gpsr_complete'] = $manufacturerGpsrComplete;
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
     * Creates one product and answers 201 with the stored row, including the id
     * and the timestamps the database filled in — a client never sends an id,
     * it reads one back and uses it in the path of every later call.
     * 
     * The catalog itself. A product row carries only what every product has —
     * SKU, kind, family, enabled, tax class — and everything the tenant
     * modelled lives in the `attribute_values` jsonb document, keyed by attribute
     * CODE inside one of four scope buckets (common, per locale, per channel, per
     * channel and locale). `label` is a generated column, maintained by the
     * database so a grid of twenty thousand rows can sort and filter on a name
     * with no join. `kind` says where the row sits in the variant hierarchy: a
     * `model` carries what its variants share and is never sold itself.
     * 
     * `sku` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `sku` answers
     * 409. This app owns the create: `enabled` defaults from the
     * `new_products_enabled_by_default` tenant setting rather than blindly to
     * true, so an import cannot publish twenty thousand unfinished products the
     * moment it lands, and a product that names no family gets the
     * `default_product_family` one. An explicit value in the body always wins
     * over both. It also takes three keys that are no column — `name`,
     * `category_id` and `copy_from` — for the two-step create, and stamps
     * `status_changed_at`.
     *
     * @param string $sku
     * @param ?array $attributeValues
     * @param ?array $baseValues
     * @param ?string $categoryId
     * @param ?array $channelRelease
     * @param ?array $channels
     * @param ?array $completeness
     * @param ?string $copyFrom
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?bool $enabled
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?ProductsKind $kind
     * @param ?string $manufacturerId
     * @param ?string $name
     * @param ?string $parentId
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?array $quantifiedAssociations
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?ProductsStatus $status
     * @param ?string $taxClass
     * @param ?string $trashBatch
     * @throws RevenexxException
     * @return array
     */
    public function productsCreate(string $sku, ?array $attributeValues = null, ?array $baseValues = null, ?string $categoryId = null, ?array $channelRelease = null, ?array $channels = null, ?array $completeness = null, ?string $copyFrom = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?bool $enabled = null, ?string $externalId = null, ?array $externalRefs = null, ?string $familyId = null, ?string $familyVariantId = null, ?ProductsKind $kind = null, ?string $manufacturerId = null, ?string $name = null, ?string $parentId = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?array $quantifiedAssociations = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?ProductsStatus $status = null, ?string $taxClass = null, ?string $trashBatch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products'
        );

        $apiParams = [];
        $apiParams['sku'] = $sku;

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($baseValues)) {
            $apiParams['base_values'] = $baseValues;
        }

        if (!is_null($categoryId)) {
            $apiParams['category_id'] = $categoryId;
        }
        $apiParams['channel_release'] = $channelRelease;

        if (!is_null($channels)) {
            $apiParams['channels'] = $channels;
        }
        $apiParams['completeness'] = $completeness;

        if (!is_null($copyFrom)) {
            $apiParams['copy_from'] = $copyFrom;
        }
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['family_id'] = $familyId;
        $apiParams['family_variant_id'] = $familyVariantId;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['manufacturer_id'] = $manufacturerId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['parent_id'] = $parentId;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['quantified_associations'] = $quantifiedAssociations;
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['tax_class'] = $taxClass;
        $apiParams['trash_batch'] = $trashBatch;

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
     * Answers four fields — id, sku, tax_class and the resolved display name
     * — for a list of ids and/or SKUs in ONE call. It exists for the app on the
     * other side of a product reference: the prices app holds SKUs and needs a
     * tax class, a feed builder holds ids and needs names, and neither should
     * page through the catalog or fire a request per line. Ask by either
     * identifier or both; the two are unioned and a product named twice comes
     * back once. At most 500 of each per call; more is refused with 400 rather
     * than cut short.
     * 
     * With `full: true` each item is the whole row instead — what `GET
     * /products/{id}` answers, every column and the complete `attribute_values`
     * document, with `label` still the resolved name. That mode is for a caller
     * that has to hand a product on and cannot know in advance which fields it
     * will need: punchout's hand-back writes whatever columns and attribute codes
     * a merchant's field mappings name, for every line of a cart, and needs them
     * in one read. Leave it off when four fields will do; the short shape is
     * unchanged by it.
     * 
     * Either way it answers what it FOUND: an id or SKU that names nothing is
     * simply absent from `items` rather than an error, so compare the length of
     * what you sent with what came back if a miss matters. For a scannable list
     * use `GET /products/grid`.
     *
     * @param ?bool $full
     * @param ?array $ids
     * @param ?array $skus
     * @throws RevenexxException
     * @return array
     */
    public function productsBatch(?bool $full = null, ?array $ids = null, ?array $skus = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/batch'
        );

        $apiParams = [];

        if (!is_null($full)) {
            $apiParams['full'] = $full;
        }

        if (!is_null($ids)) {
            $apiParams['ids'] = $ids;
        }

        if (!is_null($skus)) {
            $apiParams['skus'] = $skus;
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
     * The list a merchant can actually scan, as opposed to `GET /products`, which
     * answers SKUs and a jsonb blob. Every row arrives already flattened: its
     * resolved display name and where that name came from, its family code, its
     * stored completeness, and the value of every attribute the catalog marks
     * `usable_in_grid` — no join, no second call. `q` is a case-insensitive
     * substring of the stored `label` column, which falls back to the SKU, so one
     * box finds a product by either. Soft-deleted products are excluded here,
     * unlike `GET /products`.
     * 
     * It filters on `q`, `kind`, `enabled` and `family_id`, and on NOTHING ELSE
     * — a query parameter it does not accept is refused with 400 rather than
     * dropped. That matters because of `filters`: the array reports the
     * attributes marked `is_filterable`, which is what a filter bar should OFFER,
     * and it is not a query surface. Filtering on an attribute value is not
     * offered by this API at all — the values live inside a four-bucket jsonb
     * document and are read through a fallback chain, so it is a feature with a
     * design of its own rather than a parameter that was forgotten.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $q
     * @param ?ProductsListKind $kind
     * @param ?bool $enabled
     * @param ?string $familyId
     * @throws RevenexxException
     * @return array
     */
    public function productsGrid(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $q = null, ?ProductsListKind $kind = null, ?bool $enabled = null, ?string $familyId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/grid'
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

        if (!is_null($q)) {
            $apiParams['q'] = $q;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
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
     * What is this product CALLED? A product's name is an attribute rather than a
     * column, and which attribute it is, is per family — so no plain read can
     * answer it. This resolves up to 500 products at once, by id and/or SKU: it
     * reads families.label_attribute (falling back to the default_label_attribute
     * setting, then to the conventional `name`) and looks the value up through
     * the scoped attribute_values document — common, then locale_specific in
     * the label_locales order, then the channel buckets.
     * 
     * It reports WHERE the name was found, which is the half that matters:
     * `source: "sku"` means the catalog holds no name for this product and the
     * SKU is standing in for one, so show it as a missing name rather than as a
     * name. Writes nothing, and answers only what it found.
     *
     * @param ?array $ids
     * @param ?array $skus
     * @throws RevenexxException
     * @return array
     */
    public function productsLabels(?array $ids = null, ?array $skus = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/labels'
        );

        $apiParams = [];

        if (!is_null($ids)) {
            $apiParams['ids'] = $ids;
        }

        if (!is_null($skus)) {
            $apiParams['skus'] = $skus;
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
     * One relation from one product to another, of a declared type: this drill's
     * accessories, this bundle's parts, this article's cross-sells. `quantity` is
     * the number in "this bundle contains 4 casters" and is meaningful only when
     * the association type carries `is_quantified`. This relational surface is
     * the one this app serves; the `products.quantified_associations` column is
     * an importer's blob that no route here reads or writes.
     * 
     * Every column of `product_associations` is an exact-match query parameter,
     * `order` sorts by one column, and `limit`/`offset` page through
     * `page.total`. A query key that is NOT a column is dropped rather than
     * refused, and the `filter` object echoes the ones that were understood —
     * that echo is the only way to tell an unfiltered answer from an empty one.
     * It reads rows exactly as they are stored: no join is resolved, no jsonb
     * value is unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $productId
     * @param ?string $associationTypeId
     * @param ?string $targetProductId
     * @param ?float $quantity
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $productId = null, ?string $associationTypeId = null, ?string $targetProductId = null, ?float $quantity = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_associations'
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

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($associationTypeId)) {
            $apiParams['association_type_id'] = $associationTypeId;
        }

        if (!is_null($targetProductId)) {
            $apiParams['target_product_id'] = $targetProductId;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Creates one product association and answers 201 with the stored row,
     * including the id and the timestamps the database filled in — a client
     * never sends an id, it reads one back and uses it in the path of every later
     * call.
     * 
     * One relation from one product to another, of a declared type: this drill's
     * accessories, this bundle's parts, this article's cross-sells. `quantity` is
     * the number in "this bundle contains 4 casters" and is meaningful only when
     * the association type carries `is_quantified`. This relational surface is
     * the one this app serves; the `products.quantified_associations` column is
     * an importer's blob that no route here reads or writes.
     * 
     * `product_id`, `association_type_id`, `target_product_id` are the only
     * columns the database refuses the row without; everything else has a default
     * or is nullable. A second row with the same `product_id`,
     * `association_type_id`, `target_product_id` answers 409.
     *
     * @param string $associationTypeId
     * @param string $productId
     * @param string $targetProductId
     * @param ?int $position
     * @param ?float $quantity
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsCreate(string $associationTypeId, string $productId, string $targetProductId, ?int $position = null, ?float $quantity = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_associations'
        );

        $apiParams = [];
        $apiParams['association_type_id'] = $associationTypeId;
        $apiParams['product_id'] = $productId;
        $apiParams['target_product_id'] = $targetProductId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['quantity'] = $quantity;

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
     * Deletes one product association by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no product association of this tenant carries answers 404; there is
     * no 409, because every foreign key pointing at this entity resolves itself
     * on delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_associations/{id}'
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
     * Reads one product association by its id — the whole row, every column, as
     * it is stored.
     * 
     * One relation from one product to another, of a declared type: this drill's
     * accessories, this bundle's parts, this article's cross-sells. `quantity` is
     * the number in "this bundle contains 4 casters" and is meaningful only when
     * the association type carries `is_quantified`. This relational surface is
     * the one this app serves; the `products.quantified_associations` column is
     * an importer's blob that no route here reads or writes.
     * 
     * An id no product association of this tenant carries answers 404, and so
     * does one belonging to another tenant: row-level security makes that row
     * invisible rather than forbidden. A malformed id answers 400 before the
     * route is reached.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_associations/{id}'
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
     * Updates one product association by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * One relation from one product to another, of a declared type: this drill's
     * accessories, this bundle's parts, this article's cross-sells. `quantity` is
     * the number in "this bundle contains 4 casters" and is meaningful only when
     * the association type carries `is_quantified`. This relational surface is
     * the one this app serves; the `products.quantified_associations` column is
     * an importer's blob that no route here reads or writes.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `product_id`, `association_type_id`, `target_product_id` answers 409.
     *
     * @param string $id
     * @param ?string $associationTypeId
     * @param ?int $position
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $targetProductId
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsUpdate(string $id, ?string $associationTypeId = null, ?int $position = null, ?string $productId = null, ?float $quantity = null, ?string $targetProductId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_associations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($associationTypeId)) {
            $apiParams['association_type_id'] = $associationTypeId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }
        $apiParams['quantity'] = $quantity;

        if (!is_null($targetProductId)) {
            $apiParams['target_product_id'] = $targetProductId;
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
     * What this app needs once before it is ready, as the checklist the Cockpit's
     * „Einrichtung“ shows: every step of `cockpit.json#setup`, done or not. A
     * step is done when what it names exists — at least one live row of a
     * table, or a setting with a value.
     *
     * @throws RevenexxException
     * @return array
     */
    public function productsSetup(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/setup'
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
     * Deletes the products in the trash for good, oldest first, up to 200 per
     * call, each through the same checks as a second `DELETE`. One that is held
     * is reported with its reason and the rest go on; `more` says another call
     * has work left. Refused with 403 for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function productsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/trash/empty'
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
     * The index of the enums this app ENFORCES — `product-kinds`,
     * `product-status`, `membership-sources`, `rule-matches`, `asset-sources`,
     * `asset-licenses` — served by the app that owns the CHECK constraint each
     * one is parsed out of, so a UI never has to keep its own copy of a status
     * map and watch it drift. Names and titles only: fetch one by name for its
     * values, badge tones and descriptions.
     * 
     * The set is a fixed property of this app rather than tenant data, so it is
     * the same list for every tenant. `attributes.type` is deliberately absent:
     * it carries no CHECK, because the whole point of an attribute-driven PIM is
     * that the type list is data an integrator extends.
     *
     * @throws RevenexxException
     * @return array
     */
    public function productsVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/vocabularies'
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
     * One vocabulary with every value it admits, each with a title, a description
     * and the badge tone a UI should paint it in. The value set is parsed out of
     * the CHECK constraint in schema.json, so what is served IS what is enforced.
     * Labels are curated on top and can only add words and colour — a permitted
     * value nobody labelled still appears, titled from its own key.
     *
     * @param string $name
     * @throws RevenexxException
     * @return array
     */
    public function productsVocabulariesGet(string $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/products/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Moves one product to the trash — or, called on one that is already there,
     * deletes it for good.
     * 
     * The first call stamps the product, and the variants of a model go with it;
     * all of them share one `trash_batch` and come back together on `POST
     * …/{id}/restore`. Nothing that points at it changes: its assignments stay
     * and stop acting, and the answer lists them as warnings with a count. Its
     * sku stays reserved while it is in the trash.
     * 
     * The second call deletes it for good, with the rows of its group, and only
     * then do the cascades and `*.deleted` happen. It is refused with 409 while a
     * blocker holds: stock on hand or an active reservation in inventories, a
     * position of an open quote in quotes, or a line of an open purchase request
     * in procurement holds it; price entries are a warning, because prices
     * removes them when the product is deleted. A blocker that could not be
     * checked counts as one. It is refused with 403 for a storefront contact —
     * deleting for good is back-office work.
     * 
     * An id no product of this tenant carries answers 404.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}'
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
     * Reads one product by its id — the whole row, every column, as it is
     * stored.
     * 
     * The catalog itself. A product row carries only what every product has —
     * SKU, kind, family, enabled, tax class — and everything the tenant
     * modelled lives in the `attribute_values` jsonb document, keyed by attribute
     * CODE inside one of four scope buckets (common, per locale, per channel, per
     * channel and locale). `label` is a generated column, maintained by the
     * database so a grid of twenty thousand rows can sort and filter on a name
     * with no join. `kind` says where the row sits in the variant hierarchy: a
     * `model` carries what its variants share and is never sold itself.
     * 
     * An id no product of this tenant carries answers 404, and so does one
     * belonging to another tenant: row-level security makes that row invisible
     * rather than forbidden. A malformed id answers 400 before the route is
     * reached. Nothing is resolved for you here — for the display name, the
     * family code and the grid attributes already unpacked, use `GET
     * /products/grid` or `POST /products/labels`.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}'
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
     * Updates one product by id. A partial patch: the body names only the columns
     * to change and every column it leaves out keeps its current value, so there
     * is no read-modify-write and no way to blank a field by forgetting it.
     * 
     * The catalog itself. A product row carries only what every product has —
     * SKU, kind, family, enabled, tax class — and everything the tenant
     * modelled lives in the `attribute_values` jsonb document, keyed by attribute
     * CODE inside one of four scope buckets (common, per locale, per channel, per
     * channel and locale). `label` is a generated column, maintained by the
     * database so a grid of twenty thousand rows can sort and filter on a name
     * with no join. `kind` says where the row sits in the variant hierarchy: a
     * `model` carries what its variants share and is never sold itself.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `sku` answers 409. `label` is a generated column: naming it is dropped
     * rather than refused, and `completeness` is written by the two metadata
     * routes, not here.
     *
     * @param string $id
     * @param ?array $attributeValues
     * @param ?array $baseValues
     * @param ?array $channelRelease
     * @param ?array $channels
     * @param ?array $completeness
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?bool $enabled
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?ProductsKind $kind
     * @param ?string $manufacturerId
     * @param ?string $parentId
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?array $quantifiedAssociations
     * @param ?string $sku
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?ProductsStatus $status
     * @param ?string $taxClass
     * @param ?string $trashBatch
     * @throws RevenexxException
     * @return array
     */
    public function productsUpdate(string $id, ?array $attributeValues = null, ?array $baseValues = null, ?array $channelRelease = null, ?array $channels = null, ?array $completeness = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?bool $enabled = null, ?string $externalId = null, ?array $externalRefs = null, ?string $familyId = null, ?string $familyVariantId = null, ?ProductsKind $kind = null, ?string $manufacturerId = null, ?string $parentId = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?array $quantifiedAssociations = null, ?string $sku = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?ProductsStatus $status = null, ?string $taxClass = null, ?string $trashBatch = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($baseValues)) {
            $apiParams['base_values'] = $baseValues;
        }
        $apiParams['channel_release'] = $channelRelease;

        if (!is_null($channels)) {
            $apiParams['channels'] = $channels;
        }
        $apiParams['completeness'] = $completeness;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['external_id'] = $externalId;
        $apiParams['external_refs'] = $externalRefs;
        $apiParams['family_id'] = $familyId;
        $apiParams['family_variant_id'] = $familyVariantId;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['manufacturer_id'] = $manufacturerId;
        $apiParams['parent_id'] = $parentId;
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        $apiParams['quantified_associations'] = $quantifiedAssociations;

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }
        $apiParams['source_data'] = $sourceData;
        $apiParams['source_synced_at'] = $sourceSyncedAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['tax_class'] = $taxClass;
        $apiParams['trash_batch'] = $trashBatch;

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
     * Sets one attribute's value on one product — what a bulk „Attribute
     * bearbeiten“ over a selection calls once per product. With `locale` the
     * value goes under that language (re-keyed to the tenant's write key like any
     * write); with `locale: "all"` or none it goes into the common bucket, the
     * same in every language. The rest of the product's values stay as they are.
     *
     * @param string $id
     * @param string $attribute
     * @param mixed $value
     * @param ?string $locale
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeSet(string $id, string $attribute, mixed $value, ?string $locale = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/attribute-value'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['attribute'] = $attribute;
        $apiParams['value'] = $value;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
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
     * Adds, removes or replaces channel codes on one product's `channels` —
     * what a bulk „Kanäle zuordnen“ over a selection calls once per product.
     * The codes are the channels app's; this app stores them as sent, trimmed,
     * each once, and does not ask the channels app whether they exist.
     *
     * @param string $id
     * @param array $channels
     * @param ?ProductsChannelsAssignMode $mode
     * @throws RevenexxException
     * @return array
     */
    public function productsChannelsAssign(string $id, array $channels, ?ProductsChannelsAssignMode $mode = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/channels'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['channels'] = $channels;

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
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
     * How much of what its family REQUIRES does this product actually carry —
     * the number a merchandiser works down. products.completeness is jsonb that
     * nothing had ever written. This computes it from family_attributes
     * (is_required) against the product's own scoped attribute_values and stores
     * the result. A product with no family answers 400 rather than an invented 0
     * % — it has nothing to be measured against.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function productsCompleteness(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/completeness'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
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

    /**
     * Creates a copy of one product under a new SKU and answers 201 with the new
     * row. The copy keeps the name and starts as a switched-off draft without a
     * GTIN, release or completeness. `parts` adds what else comes along:
     * `attributes` (every value but files and images), `images` (the file and
     * image values), `variants` (each variant copied under the new model, its SKU
     * prefixed with the new one) and `categories` (the hand-picked memberships;
     * rule memberships follow from the next recompute). Movement data is never
     * copied, and prices live in the prices app. There is no transaction across
     * rows: if a later step fails, what this call created is deleted again.
     *
     * @param string $id
     * @param string $sku
     * @param ?array $parts
     * @throws RevenexxException
     * @return array
     */
    public function productsCopy(string $id, string $sku, ?array $parts = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/copy'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['sku'] = $sku;

        if (!is_null($parts)) {
            $apiParams['parts'] = $parts;
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
     * Names the family in the body — by `family_id` or by `family_code`,
     * whichever the caller holds — and computes the product's completeness in
     * the same call. The step every family-driven surface waits on: a product
     * with no family has no required attributes, so its completeness cannot be
     * computed and its family's label attribute never resolves. Assigning the
     * family recomputes and STORES products.completeness immediately, so the
     * metadata cannot go stale between the two operations.
     *
     * @param string $id
     * @param ?string $familyCode
     * @param ?string $familyId
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyAssign(string $id, ?string $familyCode = null, ?string $familyId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/family'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($familyCode)) {
            $apiParams['family_code'] = $familyCode;
        }

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
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
     * Links one product to a manufacturer record and copies the manufacturer's
     * GPSR state onto the product (`manufacturer_gpsr_complete`) — what a bulk
     * „Hersteller setzen“ calls once per product. A plain `PUT
     * /products/{id}` with `manufacturer_id` does the same; this route exists so
     * a bulk action has a body of one field and an answer that names the
     * manufacturer. It does not create a manufacturer.
     *
     * @param string $id
     * @param string $manufacturerId
     * @throws RevenexxException
     * @return array
     */
    public function productsManufacturerAssign(string $id, string $manufacturerId): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/manufacturer'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['manufacturer_id'] = $manufacturerId;

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
     * Brings a product back from the trash, together with every record that went
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
    public function productsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/{id}/restore'
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