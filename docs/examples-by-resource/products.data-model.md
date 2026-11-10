# products.data-model

## products-asset-families-list

List asset families

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssetFamiliesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'packshots', // optional
    labels: '{}', // optional
    namingConvention: '{}', // optional
    active: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-asset-families-create

Create asset family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssetFamiliesCreate(
    code: 'packshots',
    active: true, // optional
    labels: [
        'de' => 'Packshots',
        'en' => 'Packshots'
    ], // optional
    namingConvention: [
        'allowed_extensions' => [
            '0' => 'jpg',
            '1' => 'png'
        ],
        'pattern' => '{sku}_{index}',
        'source' => 'sku'
    ] // optional
);```

## products-asset-families-delete

Delete asset family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssetFamiliesDelete(
    id: ''
);```

## products-asset-families-get

Get asset family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssetFamiliesGet(
    id: ''
);```

## products-asset-families-update

Update asset family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssetFamiliesUpdate(
    id: '',
    active: true, // optional
    code: 'packshots', // optional
    labels: [
        'de' => 'Packshots',
        'en' => 'Packshots'
    ], // optional
    namingConvention: [
        'allowed_extensions' => [
            '0' => 'jpg',
            '1' => 'png'
        ],
        'pattern' => '{sku}_{index}',
        'source' => 'sku'
    ] // optional
);```

## products-association-types-list

List association types

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssociationTypesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'cross_sell', // optional
    isTwoWay: true, // optional
    isQuantified: true, // optional
    labels: '{}', // optional
    active: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-association-types-create

Create association type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssociationTypesCreate(
    code: 'cross_sell',
    active: true, // optional
    isQuantified: true, // optional
    isTwoWay: true, // optional
    labels: [
        'de' => 'Querverkauf',
        'en' => 'Cross-sell'
    ] // optional
);```

## products-association-types-delete

Delete association type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssociationTypesDelete(
    id: ''
);```

## products-association-types-get

Get association type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssociationTypesGet(
    id: ''
);```

## products-association-types-update

Update association type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAssociationTypesUpdate(
    id: '',
    active: true, // optional
    code: 'cross_sell', // optional
    isQuantified: true, // optional
    isTwoWay: true, // optional
    labels: [
        'de' => 'Querverkauf',
        'en' => 'Cross-sell'
    ] // optional
);```

## products-attribute-schema

Describe a family's fields

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;
use Revenexx\Enums\EntityType;
use Revenexx\Enums\ProductsListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeSchema(
    familyId: '', // optional
    familyCode: '', // optional
    entityType: EntityType::PRODUCT(), // optional
    entityRef: 'brand', // optional
    locale: 'de', // optional
    channel: 'b2b', // optional
    kind: ProductsListKind::SIMPLE() // optional
);```

## products-attribute-groups-list

List attribute groups

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeGroupsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'technical_attributes', // optional
    position: 1, // optional
    labels: '{}', // optional
    active: true, // optional
    externalId: 'GRP-TECHNICAL', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-attribute-groups-create

Create attribute group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeGroupsCreate(
    code: 'technical_attributes',
    active: true, // optional
    externalId: 'GRP-TECHNICAL', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Technische Attribute',
        'en' => 'Technical attributes'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-attribute-groups-delete

Delete attribute group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeGroupsDelete(
    id: ''
);```

## products-attribute-groups-get

Get attribute group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeGroupsGet(
    id: ''
);```

## products-attribute-groups-update

Update attribute group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeGroupsUpdate(
    id: '',
    active: true, // optional
    code: 'technical_attributes', // optional
    externalId: 'GRP-TECHNICAL', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Technische Attribute',
        'en' => 'Technical attributes'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-attribute-options-list

List attribute options

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeOptionsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    attributeId: '', // optional
    code: 'stainless_steel', // optional
    position: 1, // optional
    swatch: '{}', // optional
    labels: '{}', // optional
    active: true, // optional
    externalId: 'EV000456', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-attribute-options-create

Create attribute option

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeOptionsCreate(
    attributeId: '',
    code: 'stainless_steel',
    active: true, // optional
    externalId: 'EV000456', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Edelstahl',
        'en' => 'Stainless steel'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    swatch: [
        'hex' => '#c0c0c0'
    ] // optional
);```

## products-attribute-options-delete

Delete attribute option

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeOptionsDelete(
    id: ''
);```

## products-attribute-options-get

Get attribute option

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeOptionsGet(
    id: ''
);```

## products-attribute-options-update

Update attribute option

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeOptionsUpdate(
    id: '',
    active: true, // optional
    attributeId: '', // optional
    code: 'stainless_steel', // optional
    externalId: 'EV000456', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Edelstahl',
        'en' => 'Stainless steel'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    swatch: [
        'hex' => '#c0c0c0'
    ] // optional
);```

## products-attributes-list

List attributes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'net_weight', // optional
    entityType: 'product', // optional
    entityRef: 'brand', // optional
    type: 'select', // optional
    groupId: '', // optional
    localizable: true, // optional
    scopable: true, // optional
    isUnique: true, // optional
    isFilterable: true, // optional
    usableInGrid: true, // optional
    validation: '{}', // optional
    config: '{}', // optional
    labels: '{}', // optional
    position: 1, // optional
    active: true, // optional
    externalId: 'EF000123', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-attributes-create

Create attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributesCreate(
    code: 'net_weight',
    type: 'select',
    active: true, // optional
    config: [
        'reference_entity' => 'brand'
    ], // optional
    entityRef: 'brand', // optional
    entityType: 'product', // optional
    externalId: 'EF000123', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    groupId: '', // optional
    isFilterable: true, // optional
    isUnique: true, // optional
    labels: [
        'de' => 'Nettogewicht',
        'en' => 'Net weight'
    ], // optional
    localizable: true, // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    scopable: true, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    usableInGrid: true, // optional
    validation: [
        'max_length' => 64,
        'min_length' => 3
    ] // optional
);```

## products-attributes-delete

Delete attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributesDelete(
    id: ''
);```

## products-attributes-get

Get attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributesGet(
    id: ''
);```

## products-attributes-update

Update attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributesUpdate(
    id: '',
    active: true, // optional
    code: 'net_weight', // optional
    config: [
        'reference_entity' => 'brand'
    ], // optional
    entityRef: 'brand', // optional
    entityType: 'product', // optional
    externalId: 'EF000123', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    groupId: '', // optional
    isFilterable: true, // optional
    isUnique: true, // optional
    labels: [
        'de' => 'Nettogewicht',
        'en' => 'Net weight'
    ], // optional
    localizable: true, // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    position: 1, // optional
    scopable: true, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    type: 'select', // optional
    usableInGrid: true, // optional
    validation: [
        'max_length' => 64,
        'min_length' => 3
    ] // optional
);```

## products-defaults-run

Seed the base data model

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsDefaultsRun(
    data: []
);```

## products-families-list

List families

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'power_tools', // optional
    labelAttribute: 'name', // optional
    imageAttribute: 'main_image', // optional
    labels: '{}', // optional
    active: true, // optional
    externalId: 'EC001234', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-families-create

Create family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesCreate(
    code: 'power_tools',
    active: true, // optional
    externalId: 'EC001234', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    imageAttribute: 'main_image', // optional
    labelAttribute: 'name', // optional
    labels: [
        'de' => 'Elektrowerkzeuge',
        'en' => 'Power tools'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-families-delete

Delete family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesDelete(
    id: ''
);```

## products-families-get

Get family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesGet(
    id: ''
);```

## products-families-update

Update family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesUpdate(
    id: '',
    active: true, // optional
    code: 'power_tools', // optional
    externalId: 'EC001234', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    imageAttribute: 'main_image', // optional
    labelAttribute: 'name', // optional
    labels: [
        'de' => 'Elektrowerkzeuge',
        'en' => 'Power tools'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-family-attributes-list

List family attributes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyAttributesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    familyId: '', // optional
    attributeId: '', // optional
    position: 1, // optional
    isRequired: true, // optional
    requiredChannels: '[]', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-family-attributes-create

Create family attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyAttributesCreate(
    attributeId: '',
    familyId: '',
    isRequired: true, // optional
    position: 1, // optional
    requiredChannels: [
        '0' => 'shop',
        '1' => 'b2b'
    ] // optional
);```

## products-family-attributes-delete

Delete family attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyAttributesDelete(
    id: ''
);```

## products-family-attributes-get

Get family attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyAttributesGet(
    id: ''
);```

## products-family-attributes-update

Update family attribute

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyAttributesUpdate(
    id: '',
    attributeId: '', // optional
    familyId: '', // optional
    isRequired: true, // optional
    position: 1, // optional
    requiredChannels: [
        '0' => 'shop',
        '1' => 'b2b'
    ] // optional
);```

## products-family-variants-list

List family variants

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyVariantsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    familyId: '', // optional
    code: 'clothing_by_colour_size', // optional
    labels: '{}', // optional
    axes: '[]', // optional
    active: true, // optional
    externalId: 'EC001234-VAR1', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-family-variants-create

Create family variant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyVariantsCreate(
    code: 'clothing_by_colour_size',
    familyId: '',
    active: true, // optional
    axes: [
        '0' => 'colour',
        '1' => 'size'
    ], // optional
    externalId: 'EC001234-VAR1', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Nach Farbe und Größe',
        'en' => 'By colour and size'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-family-variants-delete

Delete family variant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyVariantsDelete(
    id: ''
);```

## products-family-variants-get

Get family variant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyVariantsGet(
    id: ''
);```

## products-family-variants-update

Update family variant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamilyVariantsUpdate(
    id: '',
    active: true, // optional
    axes: [
        '0' => 'colour',
        '1' => 'size'
    ], // optional
    code: 'clothing_by_colour_size', // optional
    externalId: 'EC001234-VAR1', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    familyId: '', // optional
    labels: [
        'de' => 'Nach Farbe und Größe',
        'en' => 'By colour and size'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-measurement-families-list

List measurement families

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsMeasurementFamiliesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'weight', // optional
    standardUnit: 'kilogram', // optional
    units: '[]', // optional
    labels: '{}', // optional
    active: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-measurement-families-create

Create measurement family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsMeasurementFamiliesCreate(
    code: 'weight',
    standardUnit: 'kilogram',
    active: true, // optional
    labels: [
        'de' => 'Gewicht',
        'en' => 'Weight'
    ], // optional
    units: [
        '0' => [
            'code' => 'kilogram',
            'convert_factor' => 1,
            'symbol' => 'kg'
        ],
        '1' => [
            'code' => 'gram',
            'convert_factor' => 0.001,
            'symbol' => 'g'
        ]
    ] // optional
);```

## products-measurement-families-delete

Delete measurement family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsMeasurementFamiliesDelete(
    id: ''
);```

## products-measurement-families-get

Get measurement family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsMeasurementFamiliesGet(
    id: ''
);```

## products-measurement-families-update

Update measurement family

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsMeasurementFamiliesUpdate(
    id: '',
    active: true, // optional
    code: 'weight', // optional
    labels: [
        'de' => 'Gewicht',
        'en' => 'Weight'
    ], // optional
    standardUnit: 'kilogram', // optional
    units: [
        '0' => [
            'code' => 'kilogram',
            'convert_factor' => 1,
            'symbol' => 'kg'
        ],
        '1' => [
            'code' => 'gram',
            'convert_factor' => 0.001,
            'symbol' => 'g'
        ]
    ] // optional
);```
