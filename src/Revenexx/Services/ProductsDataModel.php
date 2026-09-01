<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\EntityType;
use Revenexx\Enums\Kind;

class ProductsDataModel extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A class of media with one shared shape — packshots, datasheets, line
     * drawings. The family decides which attributes an asset of it carries (alt
     * text, copyright, an expiry date) and, through `naming_convention`, how a
     * file of it is named — which is what lets an import bind a file to a
     * product with no mapping table.
     * 
     * Every column of `asset_families` is an exact-match query parameter, `order`
     * sorts by one column, and `limit`/`offset` page through `page.total`. A
     * query key that is NOT a column is dropped rather than refused, and the
     * `filter` object echoes the ones that were understood — that echo is the
     * only way to tell an unfiltered answer from an empty one. It reads rows
     * exactly as they are stored: no join is resolved, no jsonb value is
     * unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $labels
     * @param ?string $namingConvention
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetFamiliesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $labels = null, ?string $namingConvention = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/asset_families'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($namingConvention)) {
            $apiParams['naming_convention'] = $namingConvention;
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
     * Creates one asset family and answers 201 with the stored row, including the
     * id and the timestamps the database filled in — a client never sends an
     * id, it reads one back and uses it in the path of every later call.
     * 
     * A class of media with one shared shape — packshots, datasheets, line
     * drawings. The family decides which attributes an asset of it carries (alt
     * text, copyright, an expiry date) and, through `naming_convention`, how a
     * file of it is named — which is what lets an import bind a file to a
     * product with no mapping table.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?array $labels
     * @param ?array $namingConvention
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetFamiliesCreate(string $code, ?array $labels = null, ?array $namingConvention = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/asset_families'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;
        $apiParams['naming_convention'] = $namingConvention;

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
     * Deletes one asset family by id. It is a hard delete — the row is gone,
     * and the answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: assets (`asset_family_id`) are deleted with it.
     * 
     * An id no asset family of this tenant carries answers 404; there is no 409,
     * because every foreign key pointing at this entity resolves itself on delete
     * rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetFamiliesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/asset_families/{id}'
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
     * Reads one asset family by its id — the whole row, every column, as it is
     * stored.
     * 
     * A class of media with one shared shape — packshots, datasheets, line
     * drawings. The family decides which attributes an asset of it carries (alt
     * text, copyright, an expiry date) and, through `naming_convention`, how a
     * file of it is named — which is what lets an import bind a file to a
     * product with no mapping table.
     * 
     * An id no asset family of this tenant carries answers 404, and so does one
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
    public function productsAssetFamiliesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/asset_families/{id}'
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
     * Updates one asset family by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * A class of media with one shared shape — packshots, datasheets, line
     * drawings. The family decides which attributes an asset of it carries (alt
     * text, copyright, an expiry date) and, through `naming_convention`, how a
     * file of it is named — which is what lets an import bind a file to a
     * product with no mapping table.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?array $namingConvention
     * @throws RevenexxException
     * @return array
     */
    public function productsAssetFamiliesUpdate(string $id, ?string $code = null, ?array $labels = null, ?array $namingConvention = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/asset_families/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;
        $apiParams['naming_convention'] = $namingConvention;

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
     * The KIND of relation two products can have — cross-sell, accessory, spare
     * part, bill of materials. `is_two_way` declares the relation symmetric and
     * `is_quantified` declares that it carries a quantity; both are declarations
     * a client READS rather than behaviour this app performs — it stores one
     * row per direction and never creates the mirror for you.
     * 
     * Every column of `association_types` is an exact-match query parameter,
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
     * @param ?string $code
     * @param ?bool $isTwoWay
     * @param ?bool $isQuantified
     * @param ?string $labels
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAssociationTypesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?bool $isTwoWay = null, ?bool $isQuantified = null, ?string $labels = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/association_types'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isTwoWay)) {
            $apiParams['is_two_way'] = $isTwoWay;
        }

        if (!is_null($isQuantified)) {
            $apiParams['is_quantified'] = $isQuantified;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one association type and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * The KIND of relation two products can have — cross-sell, accessory, spare
     * part, bill of materials. `is_two_way` declares the relation symmetric and
     * `is_quantified` declares that it carries a quantity; both are declarations
     * a client READS rather than behaviour this app performs — it stores one
     * row per direction and never creates the mirror for you.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?bool $isQuantified
     * @param ?bool $isTwoWay
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsAssociationTypesCreate(string $code, ?bool $isQuantified = null, ?bool $isTwoWay = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/association_types'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($isQuantified)) {
            $apiParams['is_quantified'] = $isQuantified;
        }

        if (!is_null($isTwoWay)) {
            $apiParams['is_two_way'] = $isTwoWay;
        }
        $apiParams['labels'] = $labels;

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
     * Deletes one association type by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: product associations (`association_type_id`)
     * are deleted with it.
     * 
     * An id no association type of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAssociationTypesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/association_types/{id}'
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
     * Reads one association type by its id — the whole row, every column, as it
     * is stored.
     * 
     * The KIND of relation two products can have — cross-sell, accessory, spare
     * part, bill of materials. `is_two_way` declares the relation symmetric and
     * `is_quantified` declares that it carries a quantity; both are declarations
     * a client READS rather than behaviour this app performs — it stores one
     * row per direction and never creates the mirror for you.
     * 
     * An id no association type of this tenant carries answers 404, and so does
     * one belonging to another tenant: row-level security makes that row
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
    public function productsAssociationTypesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/association_types/{id}'
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
     * Updates one association type by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * The KIND of relation two products can have — cross-sell, accessory, spare
     * part, bill of materials. `is_two_way` declares the relation symmetric and
     * `is_quantified` declares that it carries a quantity; both are declarations
     * a client READS rather than behaviour this app performs — it stores one
     * row per direction and never creates the mirror for you.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?bool $isQuantified
     * @param ?bool $isTwoWay
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsAssociationTypesUpdate(string $id, ?string $code = null, ?bool $isQuantified = null, ?bool $isTwoWay = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/association_types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($isQuantified)) {
            $apiParams['is_quantified'] = $isQuantified;
        }

        if (!is_null($isTwoWay)) {
            $apiParams['is_two_way'] = $isTwoWay;
        }
        $apiParams['labels'] = $labels;

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
     * Which fields does this family have — one ready-to-render list, not six
     * joined tables. The catalog's SHAPE is tenant data: a product's properties
     * are rows in `attributes`, grouped by `attribute_groups`, selected per
     * family by `family_attributes`, with their permitted values in
     * `attribute_options` and their variant axes in `family_variants`. Reading
     * that shape used to mean five reads, a join, and a private `attributes.type`
     * → input mapping in every client — and that mapping is the part that
     * must live here, because the type list carries no CHECK by design and an
     * integrator extends it. Answers one field list instead, ordered by group
     * then by the family's own ordering. Without a family it answers every
     * attribute declared for `entity_type`/`entity_ref` — the shape of a
     * reference entity's records or an asset family, which have attributes but no
     * family. Writes nothing.
     *
     * @param ?string $familyId
     * @param ?string $familyCode
     * @param ?EntityType $entityType
     * @param ?string $entityRef
     * @param ?string $locale
     * @param ?string $channel
     * @param ?Kind $kind
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeSchema(?string $familyId = null, ?string $familyCode = null, ?EntityType $entityType = null, ?string $entityRef = null, ?string $locale = null, ?string $channel = null, ?Kind $kind = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute-schema'
        );

        $apiParams = [];

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }

        if (!is_null($familyCode)) {
            $apiParams['family_code'] = $familyCode;
        }

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }

        if (!is_null($entityRef)) {
            $apiParams['entity_ref'] = $entityRef;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
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
     * An attribute group is a SECTION of a product form — "Technical
     * attributes", "Logistics" — and the thing every attribute is filed under.
     * It carries a `position`, which is the order the sections appear in, and
     * per-language `labels`, which is what an operator reads; the `code` is what
     * an attribute joins on and is never shown. `GET /products/attribute-schema`
     * already resolves a group's heading onto every field it returns, so these
     * routes are for MANAGING the sections, not for rendering a form.
     * 
     * Every column of `attribute_groups` is an exact-match query parameter,
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
     * @param ?string $code
     * @param ?int $position
     * @param ?string $labels
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeGroupsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?int $position = null, ?string $labels = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_groups'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one attribute group and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * An attribute group is a SECTION of a product form — "Technical
     * attributes", "Logistics" — and the thing every attribute is filed under.
     * It carries a `position`, which is the order the sections appear in, and
     * per-language `labels`, which is what an operator reads; the `code` is what
     * an attribute joins on and is never shown. `GET /products/attribute-schema`
     * already resolves a group's heading onto every field it returns, so these
     * routes are for MANAGING the sections, not for rendering a form.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?array $labels
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeGroupsCreate(string $code, ?array $labels = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_groups'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;

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
     * Deletes one attribute group by id. It is a hard delete — the row is gone,
     * and the answer is a confirmation rather than a result to branch on.
     * 
     * `attributes.group_id` is set to null instead, so the rows that pointed at
     * it survive the delete rather than going with it.
     * 
     * An id no attribute group of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeGroupsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_groups/{id}'
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
     * Reads one attribute group by its id — the whole row, every column, as it
     * is stored.
     * 
     * An attribute group is a SECTION of a product form — "Technical
     * attributes", "Logistics" — and the thing every attribute is filed under.
     * It carries a `position`, which is the order the sections appear in, and
     * per-language `labels`, which is what an operator reads; the `code` is what
     * an attribute joins on and is never shown. `GET /products/attribute-schema`
     * already resolves a group's heading onto every field it returns, so these
     * routes are for MANAGING the sections, not for rendering a form.
     * 
     * An id no attribute group of this tenant carries answers 404, and so does
     * one belonging to another tenant: row-level security makes that row
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
    public function productsAttributeGroupsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_groups/{id}'
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
     * Updates one attribute group by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * An attribute group is a SECTION of a product form — "Technical
     * attributes", "Logistics" — and the thing every attribute is filed under.
     * It carries a `position`, which is the order the sections appear in, and
     * per-language `labels`, which is what an operator reads; the `code` is what
     * an attribute joins on and is never shown. `GET /products/attribute-schema`
     * already resolves a group's heading onto every field it returns, so these
     * routes are for MANAGING the sections, not for rendering a form.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeGroupsUpdate(string $id, ?string $code = null, ?array $labels = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_groups/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;

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
     * The permitted values of one select or multi-select attribute. A record
     * stores the option's CODE and never its label, so renaming an option in
     * every language leaves every product that picked it untouched, and
     * `position` is the order it appears in the dropdown. `GET
     * /products/attribute-schema` republishes these as a field's `options`,
     * already resolved for a locale.
     * 
     * Every column of `attribute_options` is an exact-match query parameter,
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
     * @param ?string $attributeId
     * @param ?string $code
     * @param ?int $position
     * @param ?string $swatch
     * @param ?string $labels
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeOptionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $attributeId = null, ?string $code = null, ?int $position = null, ?string $swatch = null, ?string $labels = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_options'
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

        if (!is_null($attributeId)) {
            $apiParams['attribute_id'] = $attributeId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($swatch)) {
            $apiParams['swatch'] = $swatch;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one attribute option and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * The permitted values of one select or multi-select attribute. A record
     * stores the option's CODE and never its label, so renaming an option in
     * every language leaves every product that picked it untouched, and
     * `position` is the order it appears in the dropdown. `GET
     * /products/attribute-schema` republishes these as a field's `options`,
     * already resolved for a locale.
     * 
     * `attribute_id` and `code` are the only columns the database refuses the row
     * without; everything else has a default or is nullable. A second row with
     * the same `attribute_id` and `code` answers 409.
     *
     * @param string $attributeId
     * @param string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?array $swatch
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeOptionsCreate(string $attributeId, string $code, ?array $labels = null, ?int $position = null, ?array $swatch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_options'
        );

        $apiParams = [];
        $apiParams['attribute_id'] = $attributeId;
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['swatch'] = $swatch;

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
     * Deletes one attribute option by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no attribute option of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeOptionsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_options/{id}'
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
     * Reads one attribute option by its id — the whole row, every column, as it
     * is stored.
     * 
     * The permitted values of one select or multi-select attribute. A record
     * stores the option's CODE and never its label, so renaming an option in
     * every language leaves every product that picked it untouched, and
     * `position` is the order it appears in the dropdown. `GET
     * /products/attribute-schema` republishes these as a field's `options`,
     * already resolved for a locale.
     * 
     * An id no attribute option of this tenant carries answers 404, and so does
     * one belonging to another tenant: row-level security makes that row
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
    public function productsAttributeOptionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_options/{id}'
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
     * Updates one attribute option by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * The permitted values of one select or multi-select attribute. A record
     * stores the option's CODE and never its label, so renaming an option in
     * every language leaves every product that picked it untouched, and
     * `position` is the order it appears in the dropdown. `GET
     * /products/attribute-schema` republishes these as a field's `options`,
     * already resolved for a locale.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `attribute_id` and `code` answers 409.
     *
     * @param string $id
     * @param ?string $attributeId
     * @param ?string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?array $swatch
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributeOptionsUpdate(string $id, ?string $attributeId = null, ?string $code = null, ?array $labels = null, ?int $position = null, ?array $swatch = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attribute_options/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($attributeId)) {
            $apiParams['attribute_id'] = $attributeId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['swatch'] = $swatch;

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
     * An attribute is one property a record can carry, and in an attribute-driven
     * PIM it is a ROW rather than a column: giving the catalog a "net weight" is
     * a create here, not a migration. Its own flags decide everything downstream
     * — `localizable` and `scopable` pick which of the four `attribute_values`
     * buckets its values are written to, `type` picks the editor that renders it,
     * `usable_in_grid` and `is_filterable` are what the product grid reads.
     * `entity_type`/`entity_ref` say which kind of record carries it: a product,
     * one reference entity's records, one asset family, or a category.
     * 
     * Every column of `attributes` is an exact-match query parameter, `order`
     * sorts by one column, and `limit`/`offset` page through `page.total`. A
     * query key that is NOT a column is dropped rather than refused, and the
     * `filter` object echoes the ones that were understood — that echo is the
     * only way to tell an unfiltered answer from an empty one. It reads rows
     * exactly as they are stored: no join is resolved, no jsonb value is
     * unpacked.
     * 
     * Answered from the gateway's tenant cache for up to 30 minutes and dropped
     * the moment this entity is written, because the data model changes weekly at
     * most and every product page asks the same question.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $entityType
     * @param ?string $entityRef
     * @param ?string $type
     * @param ?string $groupId
     * @param ?bool $localizable
     * @param ?bool $scopable
     * @param ?bool $isUnique
     * @param ?bool $isFilterable
     * @param ?bool $usableInGrid
     * @param ?string $validation
     * @param ?string $config
     * @param ?string $labels
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $entityType = null, ?string $entityRef = null, ?string $type = null, ?string $groupId = null, ?bool $localizable = null, ?bool $scopable = null, ?bool $isUnique = null, ?bool $isFilterable = null, ?bool $usableInGrid = null, ?string $validation = null, ?string $config = null, ?string $labels = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attributes'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }

        if (!is_null($entityRef)) {
            $apiParams['entity_ref'] = $entityRef;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($groupId)) {
            $apiParams['group_id'] = $groupId;
        }

        if (!is_null($localizable)) {
            $apiParams['localizable'] = $localizable;
        }

        if (!is_null($scopable)) {
            $apiParams['scopable'] = $scopable;
        }

        if (!is_null($isUnique)) {
            $apiParams['is_unique'] = $isUnique;
        }

        if (!is_null($isFilterable)) {
            $apiParams['is_filterable'] = $isFilterable;
        }

        if (!is_null($usableInGrid)) {
            $apiParams['usable_in_grid'] = $usableInGrid;
        }

        if (!is_null($validation)) {
            $apiParams['validation'] = $validation;
        }

        if (!is_null($config)) {
            $apiParams['config'] = $config;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one attribute and answers 201 with the stored row, including the id
     * and the timestamps the database filled in — a client never sends an id,
     * it reads one back and uses it in the path of every later call.
     * 
     * An attribute is one property a record can carry, and in an attribute-driven
     * PIM it is a ROW rather than a column: giving the catalog a "net weight" is
     * a create here, not a migration. Its own flags decide everything downstream
     * — `localizable` and `scopable` pick which of the four `attribute_values`
     * buckets its values are written to, `type` picks the editor that renders it,
     * `usable_in_grid` and `is_filterable` are what the product grid reads.
     * `entity_type`/`entity_ref` say which kind of record carries it: a product,
     * one reference entity's records, one asset family, or a category.
     * 
     * `code` and `type` are the only columns the database refuses the row
     * without; everything else has a default or is nullable. A second row with
     * the same `entity_type`, `entity_ref`, `code` answers 409.
     *
     * @param string $code
     * @param string $type
     * @param ?array $config
     * @param ?string $entityRef
     * @param ?string $entityType
     * @param ?string $groupId
     * @param ?bool $isFilterable
     * @param ?bool $isUnique
     * @param ?array $labels
     * @param ?bool $localizable
     * @param ?int $position
     * @param ?bool $scopable
     * @param ?bool $usableInGrid
     * @param ?array $validation
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributesCreate(string $code, string $type, ?array $config = null, ?string $entityRef = null, ?string $entityType = null, ?string $groupId = null, ?bool $isFilterable = null, ?bool $isUnique = null, ?array $labels = null, ?bool $localizable = null, ?int $position = null, ?bool $scopable = null, ?bool $usableInGrid = null, ?array $validation = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attributes'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['type'] = $type;
        $apiParams['config'] = $config;
        $apiParams['entity_ref'] = $entityRef;

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }
        $apiParams['group_id'] = $groupId;

        if (!is_null($isFilterable)) {
            $apiParams['is_filterable'] = $isFilterable;
        }

        if (!is_null($isUnique)) {
            $apiParams['is_unique'] = $isUnique;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($localizable)) {
            $apiParams['localizable'] = $localizable;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($scopable)) {
            $apiParams['scopable'] = $scopable;
        }

        if (!is_null($usableInGrid)) {
            $apiParams['usable_in_grid'] = $usableInGrid;
        }
        $apiParams['validation'] = $validation;

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
     * Deletes one attribute by id. It is a hard delete — the row is gone, and
     * the answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: attribute options (`attribute_id`), family
     * attributes (`attribute_id`) are deleted with it.
     * 
     * An id no attribute of this tenant carries answers 404; there is no 409,
     * because every foreign key pointing at this entity resolves itself on delete
     * rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attributes/{id}'
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
     * Reads one attribute by its id — the whole row, every column, as it is
     * stored.
     * 
     * An attribute is one property a record can carry, and in an attribute-driven
     * PIM it is a ROW rather than a column: giving the catalog a "net weight" is
     * a create here, not a migration. Its own flags decide everything downstream
     * — `localizable` and `scopable` pick which of the four `attribute_values`
     * buckets its values are written to, `type` picks the editor that renders it,
     * `usable_in_grid` and `is_filterable` are what the product grid reads.
     * `entity_type`/`entity_ref` say which kind of record carries it: a product,
     * one reference entity's records, one asset family, or a category.
     * 
     * An id no attribute of this tenant carries answers 404, and so does one
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
    public function productsAttributesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attributes/{id}'
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
     * Updates one attribute by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * An attribute is one property a record can carry, and in an attribute-driven
     * PIM it is a ROW rather than a column: giving the catalog a "net weight" is
     * a create here, not a migration. Its own flags decide everything downstream
     * — `localizable` and `scopable` pick which of the four `attribute_values`
     * buckets its values are written to, `type` picks the editor that renders it,
     * `usable_in_grid` and `is_filterable` are what the product grid reads.
     * `entity_type`/`entity_ref` say which kind of record carries it: a product,
     * one reference entity's records, one asset family, or a category.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `entity_type`, `entity_ref`, `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $config
     * @param ?string $entityRef
     * @param ?string $entityType
     * @param ?string $groupId
     * @param ?bool $isFilterable
     * @param ?bool $isUnique
     * @param ?array $labels
     * @param ?bool $localizable
     * @param ?int $position
     * @param ?bool $scopable
     * @param ?string $type
     * @param ?bool $usableInGrid
     * @param ?array $validation
     * @throws RevenexxException
     * @return array
     */
    public function productsAttributesUpdate(string $id, ?string $code = null, ?array $config = null, ?string $entityRef = null, ?string $entityType = null, ?string $groupId = null, ?bool $isFilterable = null, ?bool $isUnique = null, ?array $labels = null, ?bool $localizable = null, ?int $position = null, ?bool $scopable = null, ?string $type = null, ?bool $usableInGrid = null, ?array $validation = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/attributes/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['config'] = $config;
        $apiParams['entity_ref'] = $entityRef;

        if (!is_null($entityType)) {
            $apiParams['entity_type'] = $entityType;
        }
        $apiParams['group_id'] = $groupId;

        if (!is_null($isFilterable)) {
            $apiParams['is_filterable'] = $isFilterable;
        }

        if (!is_null($isUnique)) {
            $apiParams['is_unique'] = $isUnique;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($localizable)) {
            $apiParams['localizable'] = $localizable;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($scopable)) {
            $apiParams['scopable'] = $scopable;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($usableInGrid)) {
            $apiParams['usable_in_grid'] = $usableInGrid;
        }
        $apiParams['validation'] = $validation;

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
     * A family decides WHICH attributes a product has — the set is
     * `family_attributes`, and every family-driven surface follows from it. It
     * also names which attribute carries the display name (`label_attribute`) and
     * which carries the main image. A product with no family has no required
     * attributes at all, so its completeness cannot be measured and its name
     * never resolves past the SKU; `POST /products/{id}/family` is the call that
     * ends that state.
     * 
     * Every column of `families` is an exact-match query parameter, `order` sorts
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
     * @param ?string $code
     * @param ?string $labelAttribute
     * @param ?string $imageAttribute
     * @param ?string $labels
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsFamiliesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $labelAttribute = null, ?string $imageAttribute = null, ?string $labels = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/families'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($labelAttribute)) {
            $apiParams['label_attribute'] = $labelAttribute;
        }

        if (!is_null($imageAttribute)) {
            $apiParams['image_attribute'] = $imageAttribute;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one family and answers 201 with the stored row, including the id
     * and the timestamps the database filled in — a client never sends an id,
     * it reads one back and uses it in the path of every later call.
     * 
     * A family decides WHICH attributes a product has — the set is
     * `family_attributes`, and every family-driven surface follows from it. It
     * also names which attribute carries the display name (`label_attribute`) and
     * which carries the main image. A product with no family has no required
     * attributes at all, so its completeness cannot be measured and its name
     * never resolves past the SKU; `POST /products/{id}/family` is the call that
     * ends that state.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?string $imageAttribute
     * @param ?string $labelAttribute
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamiliesCreate(string $code, ?string $imageAttribute = null, ?string $labelAttribute = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/families'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['image_attribute'] = $imageAttribute;
        $apiParams['label_attribute'] = $labelAttribute;
        $apiParams['labels'] = $labels;

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
     * Deletes one family by id. It is a hard delete — the row is gone, and the
     * answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: family attributes (`family_id`), family
     * variants (`family_id`) are deleted with it. `products.family_id` is set to
     * null instead, so the rows that pointed at it survive the delete rather than
     * going with it.
     * 
     * An id no family of this tenant carries answers 404; there is no 409,
     * because every foreign key pointing at this entity resolves itself on delete
     * rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsFamiliesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/families/{id}'
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
     * Reads one family by its id — the whole row, every column, as it is
     * stored.
     * 
     * A family decides WHICH attributes a product has — the set is
     * `family_attributes`, and every family-driven surface follows from it. It
     * also names which attribute carries the display name (`label_attribute`) and
     * which carries the main image. A product with no family has no required
     * attributes at all, so its completeness cannot be measured and its name
     * never resolves past the SKU; `POST /products/{id}/family` is the call that
     * ends that state.
     * 
     * An id no family of this tenant carries answers 404, and so does one
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
    public function productsFamiliesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/families/{id}'
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
     * Updates one family by id. A partial patch: the body names only the columns
     * to change and every column it leaves out keeps its current value, so there
     * is no read-modify-write and no way to blank a field by forgetting it.
     * 
     * A family decides WHICH attributes a product has — the set is
     * `family_attributes`, and every family-driven surface follows from it. It
     * also names which attribute carries the display name (`label_attribute`) and
     * which carries the main image. A product with no family has no required
     * attributes at all, so its completeness cannot be measured and its name
     * never resolves past the SKU; `POST /products/{id}/family` is the call that
     * ends that state.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $imageAttribute
     * @param ?string $labelAttribute
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamiliesUpdate(string $id, ?string $code = null, ?string $imageAttribute = null, ?string $labelAttribute = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/families/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['image_attribute'] = $imageAttribute;
        $apiParams['label_attribute'] = $labelAttribute;
        $apiParams['labels'] = $labels;

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
     * One link between a family and an attribute — the row that puts an
     * attribute INTO a family's form. It carries the family's own ordering of
     * that attribute, which overrides the attribute's default position, and
     * `is_required`, which is the flag `POST /products/{id}/completeness`
     * measures and nothing else reads. `required_channels` narrows "required" to
     * named channels; null or empty means required EVERYWHERE, not nowhere.
     * 
     * Every column of `family_attributes` is an exact-match query parameter,
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
     * @param ?string $familyId
     * @param ?string $attributeId
     * @param ?int $position
     * @param ?bool $isRequired
     * @param ?string $requiredChannels
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyAttributesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $familyId = null, ?string $attributeId = null, ?int $position = null, ?bool $isRequired = null, ?string $requiredChannels = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_attributes'
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

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }

        if (!is_null($attributeId)) {
            $apiParams['attribute_id'] = $attributeId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($isRequired)) {
            $apiParams['is_required'] = $isRequired;
        }

        if (!is_null($requiredChannels)) {
            $apiParams['required_channels'] = $requiredChannels;
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
     * Creates one family attribute and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * One link between a family and an attribute — the row that puts an
     * attribute INTO a family's form. It carries the family's own ordering of
     * that attribute, which overrides the attribute's default position, and
     * `is_required`, which is the flag `POST /products/{id}/completeness`
     * measures and nothing else reads. `required_channels` narrows "required" to
     * named channels; null or empty means required EVERYWHERE, not nowhere.
     * 
     * `family_id` and `attribute_id` are the only columns the database refuses
     * the row without; everything else has a default or is nullable. A second row
     * with the same `family_id` and `attribute_id` answers 409.
     *
     * @param string $attributeId
     * @param string $familyId
     * @param ?bool $isRequired
     * @param ?int $position
     * @param ?array $requiredChannels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyAttributesCreate(string $attributeId, string $familyId, ?bool $isRequired = null, ?int $position = null, ?array $requiredChannels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_attributes'
        );

        $apiParams = [];
        $apiParams['attribute_id'] = $attributeId;
        $apiParams['family_id'] = $familyId;

        if (!is_null($isRequired)) {
            $apiParams['is_required'] = $isRequired;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['required_channels'] = $requiredChannels;

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
     * Deletes one family attribute by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no family attribute of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyAttributesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_attributes/{id}'
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
     * Reads one family attribute by its id — the whole row, every column, as it
     * is stored.
     * 
     * One link between a family and an attribute — the row that puts an
     * attribute INTO a family's form. It carries the family's own ordering of
     * that attribute, which overrides the attribute's default position, and
     * `is_required`, which is the flag `POST /products/{id}/completeness`
     * measures and nothing else reads. `required_channels` narrows "required" to
     * named channels; null or empty means required EVERYWHERE, not nowhere.
     * 
     * An id no family attribute of this tenant carries answers 404, and so does
     * one belonging to another tenant: row-level security makes that row
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
    public function productsFamilyAttributesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_attributes/{id}'
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
     * Updates one family attribute by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * One link between a family and an attribute — the row that puts an
     * attribute INTO a family's form. It carries the family's own ordering of
     * that attribute, which overrides the attribute's default position, and
     * `is_required`, which is the flag `POST /products/{id}/completeness`
     * measures and nothing else reads. `required_channels` narrows "required" to
     * named channels; null or empty means required EVERYWHERE, not nowhere.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `family_id` and `attribute_id` answers 409.
     *
     * @param string $id
     * @param ?string $attributeId
     * @param ?string $familyId
     * @param ?bool $isRequired
     * @param ?int $position
     * @param ?array $requiredChannels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyAttributesUpdate(string $id, ?string $attributeId = null, ?string $familyId = null, ?bool $isRequired = null, ?int $position = null, ?array $requiredChannels = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_attributes/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($attributeId)) {
            $apiParams['attribute_id'] = $attributeId;
        }

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }

        if (!is_null($isRequired)) {
            $apiParams['is_required'] = $isRequired;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['required_channels'] = $requiredChannels;

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
     * A variant structure of a family: the attribute axes a product model splits
     * its variants on — colour, then size. A product follows one through
     * `family_variant_id`, and an attribute named as an axis becomes read-only on
     * the model and is set on each variant instead, which is what `GET
     * /products/attribute-schema` reports as `readonly_reason`. Two axis shapes
     * are in the wild and both are read: a bare list of codes, or one entry per
     * level.
     * 
     * Every column of `family_variants` is an exact-match query parameter,
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
     * @param ?string $familyId
     * @param ?string $code
     * @param ?string $labels
     * @param ?string $axes
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyVariantsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $familyId = null, ?string $code = null, ?string $labels = null, ?string $axes = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_variants'
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

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($axes)) {
            $apiParams['axes'] = $axes;
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
     * Creates one family variant and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * A variant structure of a family: the attribute axes a product model splits
     * its variants on — colour, then size. A product follows one through
     * `family_variant_id`, and an attribute named as an axis becomes read-only on
     * the model and is set on each variant instead, which is what `GET
     * /products/attribute-schema` reports as `readonly_reason`. Two axis shapes
     * are in the wild and both are read: a bare list of codes, or one entry per
     * level.
     * 
     * `family_id` and `code` are the only columns the database refuses the row
     * without; everything else has a default or is nullable. A second row with
     * the same `code` answers 409.
     *
     * @param string $code
     * @param string $familyId
     * @param ?array $axes
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyVariantsCreate(string $code, string $familyId, ?array $axes = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_variants'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['family_id'] = $familyId;
        $apiParams['axes'] = $axes;
        $apiParams['labels'] = $labels;

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
     * Deletes one family variant by id. It is a hard delete — the row is gone,
     * and the answer is a confirmation rather than a result to branch on.
     * 
     * `products.family_variant_id` is set to null instead, so the rows that
     * pointed at it survive the delete rather than going with it.
     * 
     * An id no family variant of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyVariantsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_variants/{id}'
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
     * Reads one family variant by its id — the whole row, every column, as it
     * is stored.
     * 
     * A variant structure of a family: the attribute axes a product model splits
     * its variants on — colour, then size. A product follows one through
     * `family_variant_id`, and an attribute named as an axis becomes read-only on
     * the model and is set on each variant instead, which is what `GET
     * /products/attribute-schema` reports as `readonly_reason`. Two axis shapes
     * are in the wild and both are read: a bare list of codes, or one entry per
     * level.
     * 
     * An id no family variant of this tenant carries answers 404, and so does one
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
    public function productsFamilyVariantsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_variants/{id}'
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
     * Updates one family variant by id. A partial patch: the body names only the
     * columns to change and every column it leaves out keeps its current value,
     * so there is no read-modify-write and no way to blank a field by forgetting
     * it.
     * 
     * A variant structure of a family: the attribute axes a product model splits
     * its variants on — colour, then size. A product follows one through
     * `family_variant_id`, and an attribute named as an axis becomes read-only on
     * the model and is set on each variant instead, which is what `GET
     * /products/attribute-schema` reports as `readonly_reason`. Two axis shapes
     * are in the wild and both are read: a bare list of codes, or one entry per
     * level.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?array $axes
     * @param ?string $code
     * @param ?string $familyId
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsFamilyVariantsUpdate(string $id, ?array $axes = null, ?string $code = null, ?string $familyId = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/family_variants/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['axes'] = $axes;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($familyId)) {
            $apiParams['family_id'] = $familyId;
        }
        $apiParams['labels'] = $labels;

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
     * A family of units and the standard one they all convert to — weight in
     * kilograms, length in metres. A `measure` attribute names one and then
     * offers exactly that family's units, and each unit's `convert_factor` is
     * what makes two values recorded in different units comparable at all.
     * 
     * Every column of `measurement_families` is an exact-match query parameter,
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
     * @param ?string $code
     * @param ?string $standardUnit
     * @param ?string $units
     * @param ?string $labels
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsMeasurementFamiliesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $standardUnit = null, ?string $units = null, ?string $labels = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/measurement_families'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($standardUnit)) {
            $apiParams['standard_unit'] = $standardUnit;
        }

        if (!is_null($units)) {
            $apiParams['units'] = $units;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one measurement family and answers 201 with the stored row,
     * including the id and the timestamps the database filled in — a client
     * never sends an id, it reads one back and uses it in the path of every later
     * call.
     * 
     * A family of units and the standard one they all convert to — weight in
     * kilograms, length in metres. A `measure` attribute names one and then
     * offers exactly that family's units, and each unit's `convert_factor` is
     * what makes two values recorded in different units comparable at all.
     * 
     * `code` and `standard_unit` are the only columns the database refuses the
     * row without; everything else has a default or is nullable. A second row
     * with the same `code` answers 409.
     *
     * @param string $code
     * @param string $standardUnit
     * @param ?array $labels
     * @param ?array $units
     * @throws RevenexxException
     * @return array
     */
    public function productsMeasurementFamiliesCreate(string $code, string $standardUnit, ?array $labels = null, ?array $units = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/measurement_families'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['standard_unit'] = $standardUnit;
        $apiParams['labels'] = $labels;
        $apiParams['units'] = $units;

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
     * Deletes one measurement family by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no measurement family of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsMeasurementFamiliesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/measurement_families/{id}'
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
     * Reads one measurement family by its id — the whole row, every column, as
     * it is stored.
     * 
     * A family of units and the standard one they all convert to — weight in
     * kilograms, length in metres. A `measure` attribute names one and then
     * offers exactly that family's units, and each unit's `convert_factor` is
     * what makes two values recorded in different units comparable at all.
     * 
     * An id no measurement family of this tenant carries answers 404, and so does
     * one belonging to another tenant: row-level security makes that row
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
    public function productsMeasurementFamiliesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/measurement_families/{id}'
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
     * Updates one measurement family by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * A family of units and the standard one they all convert to — weight in
     * kilograms, length in metres. A `measure` attribute names one and then
     * offers exactly that family's units, and each unit's `convert_factor` is
     * what makes two values recorded in different units comparable at all.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?string $standardUnit
     * @param ?array $units
     * @throws RevenexxException
     * @return array
     */
    public function productsMeasurementFamiliesUpdate(string $id, ?string $code = null, ?array $labels = null, ?string $standardUnit = null, ?array $units = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/measurement_families/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($standardUnit)) {
            $apiParams['standard_unit'] = $standardUnit;
        }
        $apiParams['units'] = $units;

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