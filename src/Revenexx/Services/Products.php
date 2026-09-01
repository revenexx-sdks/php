<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Kind;
use Revenexx\Enums\ProductsKind;

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
     * they are stored: no join is resolved, no jsonb value is unpacked, and
     * soft-deleted products are included — filter on `deleted_at` to read the
     * live catalog, or use `GET /products/grid`, which excludes them.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $sku
     * @param ?Kind $kind
     * @param ?string $parentId
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?bool $enabled
     * @param ?string $taxClass
     * @param ?string $attributeValues
     * @param ?string $label
     * @param ?string $quantifiedAssociations
     * @param ?string $completeness
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?string $deletedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $sku = null, ?Kind $kind = null, ?string $parentId = null, ?string $familyId = null, ?string $familyVariantId = null, ?bool $enabled = null, ?string $taxClass = null, ?string $attributeValues = null, ?string $label = null, ?string $quantifiedAssociations = null, ?string $completeness = null, ?string $createdAt = null, ?string $updatedAt = null, ?string $deletedAt = null): array
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

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($taxClass)) {
            $apiParams['tax_class'] = $taxClass;
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

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($deletedAt)) {
            $apiParams['deleted_at'] = $deletedAt;
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
     * over both.
     *
     * @param string $sku
     * @param ?array $attributeValues
     * @param ?array $completeness
     * @param ?string $deletedAt
     * @param ?bool $enabled
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?ProductsKind $kind
     * @param ?string $parentId
     * @param ?array $quantifiedAssociations
     * @param ?string $taxClass
     * @throws RevenexxException
     * @return array
     */
    public function productsCreate(string $sku, ?array $attributeValues = null, ?array $completeness = null, ?string $deletedAt = null, ?bool $enabled = null, ?string $familyId = null, ?string $familyVariantId = null, ?ProductsKind $kind = null, ?string $parentId = null, ?array $quantifiedAssociations = null, ?string $taxClass = null): array
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
        $apiParams['completeness'] = $completeness;
        $apiParams['deleted_at'] = $deletedAt;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['family_id'] = $familyId;
        $apiParams['family_variant_id'] = $familyVariantId;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['parent_id'] = $parentId;
        $apiParams['quantified_associations'] = $quantifiedAssociations;
        $apiParams['tax_class'] = $taxClass;

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
     * back once.
     * 
     * It answers what it FOUND: an id or SKU that names nothing is simply absent
     * from `items` rather than an error, so compare the length of what you sent
     * with what came back if a miss matters. It is not a general product read —
     * for the whole row use `GET /products/{id}`, and for a scannable list use
     * `GET /products/grid`.
     *
     * @param ?array $ids
     * @param ?array $skus
     * @throws RevenexxException
     * @return array
     */
    public function productsBatch(?array $ids = null, ?array $skus = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/batch'
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
     * @param ?Kind $kind
     * @param ?bool $enabled
     * @param ?string $familyId
     * @throws RevenexxException
     * @return array
     */
    public function productsGrid(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $q = null, ?Kind $kind = null, ?bool $enabled = null, ?string $familyId = null): array
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
     * @throws RevenexxException
     * @return array
     */
    public function productsProductAssociationsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $productId = null, ?string $associationTypeId = null, ?string $targetProductId = null, ?float $quantity = null, ?int $position = null, ?string $createdAt = null): array
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
     * The index of the enums this app ENFORCES — `product-kinds`,
     * `membership-sources`, `rule-matches`, `asset-sources` — served by the app
     * that owns the CHECK constraint each one is parsed out of, so a UI never has
     * to keep its own copy of a status map and watch it drift. Names and titles
     * only: fetch one by name for its values, badge tones and descriptions.
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
     * Deletes one product by id. It is a hard delete — the row is gone, and the
     * answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: product category memberships (`product_id`),
     * product associations (`product_id` and `target_product_id`) are deleted
     * with it. `products.parent_id` is set to null instead, so the rows that
     * pointed at it survive the delete rather than going with it.
     * 
     * An id no product of this tenant carries answers 404; there is no 409,
     * because every foreign key pointing at this entity resolves itself on delete
     * rather than blocking one. `products.deleted_at` is a SOFT-delete marker
     * that the grid and every category-rule evaluation honour, but no route in
     * this app ever writes it — to soft-delete instead, `PUT /products/{id}`
     * with a `deleted_at`.
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
     * @param ?array $completeness
     * @param ?string $deletedAt
     * @param ?bool $enabled
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?ProductsKind $kind
     * @param ?string $parentId
     * @param ?array $quantifiedAssociations
     * @param ?string $sku
     * @param ?string $taxClass
     * @throws RevenexxException
     * @return array
     */
    public function productsUpdate(string $id, ?array $attributeValues = null, ?array $completeness = null, ?string $deletedAt = null, ?bool $enabled = null, ?string $familyId = null, ?string $familyVariantId = null, ?ProductsKind $kind = null, ?string $parentId = null, ?array $quantifiedAssociations = null, ?string $sku = null, ?string $taxClass = null): array
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
        $apiParams['completeness'] = $completeness;
        $apiParams['deleted_at'] = $deletedAt;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['family_id'] = $familyId;
        $apiParams['family_variant_id'] = $familyVariantId;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['parent_id'] = $parentId;
        $apiParams['quantified_associations'] = $quantifiedAssociations;

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }
        $apiParams['tax_class'] = $taxClass;

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
}