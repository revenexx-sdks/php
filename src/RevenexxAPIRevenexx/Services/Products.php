<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;

class Products extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products'
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
     * @param string $sku
     * @param ?array $attributeValues
     * @param ?array $completeness
     * @param ?string $deletedAt
     * @param ?bool $enabled
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?string $kind
     * @param ?string $parentId
     * @param ?array $quantifiedAssociations
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsCreate(string $sku, ?array $attributeValues = null, ?array $completeness = null, ?string $deletedAt = null, ?bool $enabled = null, ?string $familyId = null, ?string $familyVariantId = null, ?string $kind = null, ?string $parentId = null, ?array $quantifiedAssociations = null): array
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
    public function productsAssetFamiliesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/asset_families'
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
     * @param ?array $labels
     * @param ?array $namingConvention
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?array $namingConvention
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAssetsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/assets'
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
     * @param string $assetFamilyId
     * @param string $code
     * @param ?array $attributeValues
     * @param ?string $mediaUuid
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAssetsCreate(string $assetFamilyId, string $code, ?array $attributeValues = null, ?string $mediaUuid = null): array
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
        $apiParams['media_uuid'] = $mediaUuid;

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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $assetFamilyId
     * @param ?array $attributeValues
     * @param ?string $code
     * @param ?string $mediaUuid
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAssetsUpdate(string $id, ?string $assetFamilyId = null, ?array $attributeValues = null, ?string $code = null, ?string $mediaUuid = null): array
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
        $apiParams['media_uuid'] = $mediaUuid;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAssociationTypesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/association_types'
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
     * @param ?bool $isQuantified
     * @param ?bool $isTwoWay
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?bool $isQuantified
     * @param ?bool $isTwoWay
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAttributeGroupsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_groups'
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
     * @param ?array $labels
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAttributeOptionsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attribute_options'
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
     * @param string $attributeId
     * @param string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?array $swatch
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $attributeId
     * @param ?string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?array $swatch
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsAttributesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/attributes'
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
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsCategoriesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/categories'
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
     * @param ?array $labels
     * @param ?string $parentId
     * @param ?string $xpath
     * @param ?int $position
     * @param ?array $values
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsCategoriesCreate(string $code, ?array $labels = null, ?string $parentId = null, ?string $xpath = null, ?int $position = null, ?array $values = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/categories'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;
        $apiParams['parent_id'] = $parentId;
        $apiParams['path'] = $xpath;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['values'] = $values;

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
    public function productsCategoriesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
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
    public function productsCategoriesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
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
     * @param ?array $labels
     * @param ?string $parentId
     * @param ?string $xpath
     * @param ?int $position
     * @param ?array $values
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsCategoriesUpdate(string $id, ?string $code = null, ?array $labels = null, ?string $parentId = null, ?string $xpath = null, ?int $position = null, ?array $values = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/categories/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;
        $apiParams['parent_id'] = $parentId;
        $apiParams['path'] = $xpath;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['values'] = $values;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsFamiliesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/families'
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
     * @param ?string $imageAttribute
     * @param ?string $labelAttribute
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?string $imageAttribute
     * @param ?string $labelAttribute
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsFamilyAttributesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_attributes'
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
     * @param string $attributeId
     * @param string $familyId
     * @param ?bool $isRequired
     * @param ?int $position
     * @param ?array $requiredChannels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $attributeId
     * @param ?string $familyId
     * @param ?bool $isRequired
     * @param ?int $position
     * @param ?array $requiredChannels
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsFamilyVariantsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/family_variants'
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
     * @param string $familyId
     * @param ?array $axes
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?array $axes
     * @param ?string $code
     * @param ?string $familyId
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsMeasurementFamiliesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/measurement_families'
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
     * @param string $standardUnit
     * @param ?array $labels
     * @param ?array $units
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?string $standardUnit
     * @param ?array $units
     * @throws RevenexxAPIRevenexxException
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

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsProductAssociationsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_associations'
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
     * @param string $associationTypeId
     * @param string $productId
     * @param string $targetProductId
     * @param ?int $position
     * @param ?float $quantity
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $associationTypeId
     * @param ?int $position
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $targetProductId
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsProductCategoriesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_categories'
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
     * @param string $categoryId
     * @param string $productId
     * @param ?int $position
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsProductCategoriesCreate(string $categoryId, string $productId, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/product_categories'
        );

        $apiParams = [];
        $apiParams['category_id'] = $categoryId;
        $apiParams['product_id'] = $productId;

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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsProductCategoriesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
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
    public function productsProductCategoriesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
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
     * @param ?string $categoryId
     * @param ?int $position
     * @param ?string $productId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsProductCategoriesUpdate(string $id, ?string $categoryId = null, ?int $position = null, ?string $productId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/products/product_categories/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($categoryId)) {
            $apiParams['category_id'] = $categoryId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsReferenceEntitiesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entities'
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
     * @param ?string $image
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $code
     * @param ?string $image
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsReferenceEntityRecordsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/products/reference_entity_records'
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
     * @param string $referenceEntityId
     * @param ?array $attributeValues
     * @param ?array $labels
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?array $attributeValues
     * @param ?string $code
     * @param ?array $labels
     * @param ?string $referenceEntityId
     * @throws RevenexxAPIRevenexxException
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

    /**
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?array $attributeValues
     * @param ?array $completeness
     * @param ?string $deletedAt
     * @param ?bool $enabled
     * @param ?string $familyId
     * @param ?string $familyVariantId
     * @param ?string $kind
     * @param ?string $parentId
     * @param ?array $quantifiedAssociations
     * @param ?string $sku
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function productsUpdate(string $id, ?array $attributeValues = null, ?array $completeness = null, ?string $deletedAt = null, ?bool $enabled = null, ?string $familyId = null, ?string $familyVariantId = null, ?string $kind = null, ?string $parentId = null, ?array $quantifiedAssociations = null, ?string $sku = null): array
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