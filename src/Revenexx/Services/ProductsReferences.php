<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ProductsReferences extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A domain of records the catalog POINTS AT instead of duplicating —
     * brands, manufacturers, care instructions. Declaring one is how a brand
     * comes to be edited in one place rather than on nine thousand products. A
     * reference entity has attributes of its own (`attributes` rows with
     * `entity_type: "reference_entity"` and this entity's code as `entity_ref`),
     * which is what makes its records more than a label.
     * 
     * Every column of `reference_entities` is an exact-match query parameter,
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
     * @param ?string $labels
     * @param ?string $image
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntitiesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $labels = null, ?string $image = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entities'
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

        if (!is_null($image)) {
            $apiParams['image'] = $image;
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
     * Creates one reference entity and answers 201 with the stored row, including
     * the id and the timestamps the database filled in — a client never sends
     * an id, it reads one back and uses it in the path of every later call.
     * 
     * A domain of records the catalog POINTS AT instead of duplicating —
     * brands, manufacturers, care instructions. Declaring one is how a brand
     * comes to be edited in one place rather than on nine thousand products. A
     * reference entity has attributes of its own (`attributes` rows with
     * `entity_type: "reference_entity"` and this entity's code as `entity_ref`),
     * which is what makes its records more than a label.
     * 
     * `code` is the only column the database refuses the row without; everything
     * else has a default or is nullable. A second row with the same `code`
     * answers 409.
     *
     * @param string $code
     * @param ?string $image
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntitiesCreate(string $code, ?string $image = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entities'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['image'] = $image;
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
     * Deletes one reference entity by id. It is a hard delete — the row is
     * gone, and the answer is a confirmation rather than a result to branch on.
     * 
     * It takes what hangs off it: reference entity records
     * (`reference_entity_id`) are deleted with it.
     * 
     * An id no reference entity of this tenant carries answers 404; there is no
     * 409, because every foreign key pointing at this entity resolves itself on
     * delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntitiesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entities/{id}'
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
     * Reads one reference entity by its id — the whole row, every column, as it
     * is stored.
     * 
     * A domain of records the catalog POINTS AT instead of duplicating —
     * brands, manufacturers, care instructions. Declaring one is how a brand
     * comes to be edited in one place rather than on nine thousand products. A
     * reference entity has attributes of its own (`attributes` rows with
     * `entity_type: "reference_entity"` and this entity's code as `entity_ref`),
     * which is what makes its records more than a label.
     * 
     * An id no reference entity of this tenant carries answers 404, and so does
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
    public function productsReferenceEntitiesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entities/{id}'
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
     * Updates one reference entity by id. A partial patch: the body names only
     * the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * A domain of records the catalog POINTS AT instead of duplicating —
     * brands, manufacturers, care instructions. Declaring one is how a brand
     * comes to be edited in one place rather than on nine thousand products. A
     * reference entity has attributes of its own (`attributes` rows with
     * `entity_type: "reference_entity"` and this entity's code as `entity_ref`),
     * which is what makes its records more than a label.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `code` answers 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $image
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntitiesUpdate(string $id, ?string $code = null, ?string $image = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entities/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['image'] = $image;
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
     * One record of a reference entity — one brand, one manufacturer. A product
     * that points at it stores this record's CODE, exactly the way a select
     * stores an option code, and the record's own properties live in its scoped
     * `attribute_values` document. `GET /products/attribute-schema` offers these
     * records as the `options` of any attribute that points at their entity, so a
     * picker needs no second call.
     * 
     * Every column of `reference_entity_records` is an exact-match query
     * parameter, `order` sorts by one column, and `limit`/`offset` page through
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
     * @param ?string $referenceEntityId
     * @param ?string $code
     * @param ?string $labels
     * @param ?string $attributeValues
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntityRecordsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $referenceEntityId = null, ?string $code = null, ?string $labels = null, ?string $attributeValues = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entity_records'
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

        if (!is_null($referenceEntityId)) {
            $apiParams['reference_entity_id'] = $referenceEntityId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
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
     * Creates one reference entity record and answers 201 with the stored row,
     * including the id and the timestamps the database filled in — a client
     * never sends an id, it reads one back and uses it in the path of every later
     * call.
     * 
     * One record of a reference entity — one brand, one manufacturer. A product
     * that points at it stores this record's CODE, exactly the way a select
     * stores an option code, and the record's own properties live in its scoped
     * `attribute_values` document. `GET /products/attribute-schema` offers these
     * records as the `options` of any attribute that points at their entity, so a
     * picker needs no second call.
     * 
     * `reference_entity_id` and `code` are the only columns the database refuses
     * the row without; everything else has a default or is nullable. A second row
     * with the same `reference_entity_id` and `code` answers 409.
     *
     * @param string $code
     * @param string $referenceEntityId
     * @param ?array $attributeValues
     * @param ?array $labels
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntityRecordsCreate(string $code, string $referenceEntityId, ?array $attributeValues = null, ?array $labels = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entity_records'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['reference_entity_id'] = $referenceEntityId;

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
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
     * Deletes one reference entity record by id. It is a hard delete — the row
     * is gone, and the answer is a confirmation rather than a result to branch
     * on.
     * 
     * Nothing in this schema references it, so nothing else changes.
     * 
     * An id no reference entity record of this tenant carries answers 404; there
     * is no 409, because every foreign key pointing at this entity resolves
     * itself on delete rather than blocking one.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntityRecordsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entity_records/{id}'
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
     * Reads one reference entity record by its id — the whole row, every
     * column, as it is stored.
     * 
     * One record of a reference entity — one brand, one manufacturer. A product
     * that points at it stores this record's CODE, exactly the way a select
     * stores an option code, and the record's own properties live in its scoped
     * `attribute_values` document. `GET /products/attribute-schema` offers these
     * records as the `options` of any attribute that points at their entity, so a
     * picker needs no second call.
     * 
     * An id no reference entity record of this tenant carries answers 404, and so
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
    public function productsReferenceEntityRecordsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entity_records/{id}'
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
     * Updates one reference entity record by id. A partial patch: the body names
     * only the columns to change and every column it leaves out keeps its current
     * value, so there is no read-modify-write and no way to blank a field by
     * forgetting it.
     * 
     * One record of a reference entity — one brand, one manufacturer. A product
     * that points at it stores this record's CODE, exactly the way a select
     * stores an option code, and the record's own properties live in its scoped
     * `attribute_values` document. `GET /products/attribute-schema` offers these
     * records as the `options` of any attribute that points at their entity, so a
     * picker needs no second call.
     * 
     * A body that names nothing writable is refused with 400 rather than answered
     * as a no-op, an id nobody carries answers 404, and a value that collides on
     * `reference_entity_id` and `code` answers 409.
     *
     * @param string $id
     * @param ?array $attributeValues
     * @param ?string $code
     * @param ?array $labels
     * @param ?string $referenceEntityId
     * @throws RevenexxException
     * @return array
     */
    public function productsReferenceEntityRecordsUpdate(string $id, ?array $attributeValues = null, ?string $code = null, ?array $labels = null, ?string $referenceEntityId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/reference_entity_records/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($attributeValues)) {
            $apiParams['attribute_values'] = $attributeValues;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($referenceEntityId)) {
            $apiParams['reference_entity_id'] = $referenceEntityId;
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