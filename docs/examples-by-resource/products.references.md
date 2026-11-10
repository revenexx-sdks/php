# products.references

## products-reference-entities-list

List reference entities

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'brand', // optional
    labels: '{}', // optional
    image: 'reference-entities/brand.svg', // optional
    active: true, // optional
    externalId: 'REG-BRAND', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-reference-entities-create

Create reference entity

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesCreate(
    code: 'brand',
    active: true, // optional
    externalId: 'REG-BRAND', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    image: 'reference-entities/brand.svg', // optional
    labels: [
        'de' => 'Marke',
        'en' => 'Brand'
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

## products-reference-entities-delete

Delete reference entity

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesDelete(
    id: ''
);```

## products-reference-entities-get

Get reference entity

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesGet(
    id: ''
);```

## products-reference-entities-update

Update reference entity

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesUpdate(
    id: '',
    active: true, // optional
    code: 'brand', // optional
    externalId: 'REG-BRAND', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    image: 'reference-entities/brand.svg', // optional
    labels: [
        'de' => 'Marke',
        'en' => 'Brand'
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

## products-reference-entity-records-list

List reference entity records

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntityRecordsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    referenceEntityId: '', // optional
    code: 'acme_tools', // optional
    labels: '{}', // optional
    attributeValues: '{}', // optional
    active: true, // optional
    externalId: 'MFR-0815', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-reference-entity-records-create

Create reference entity record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntityRecordsCreate(
    code: 'acme_tools',
    referenceEntityId: '',
    active: true, // optional
    attributeValues: [
        'common' => [
            'country' => 'DE',
            'founded' => 1946
        ],
        'locale_specific' => [
            'de' => [
                'description' => 'Werkzeughersteller aus Süddeutschland.'
            ]
        ]
    ], // optional
    externalId: 'MFR-0815', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Acme Tools',
        'en' => 'Acme Tools'
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

## products-reference-entity-records-delete

Delete reference entity record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntityRecordsDelete(
    id: ''
);```

## products-reference-entity-records-get

Get reference entity record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntityRecordsGet(
    id: ''
);```

## products-reference-entity-records-update

Update reference entity record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntityRecordsUpdate(
    id: '',
    active: true, // optional
    attributeValues: [
        'common' => [
            'country' => 'DE',
            'founded' => 1946
        ],
        'locale_specific' => [
            'de' => [
                'description' => 'Werkzeughersteller aus Süddeutschland.'
            ]
        ]
    ], // optional
    code: 'acme_tools', // optional
    externalId: 'MFR-0815', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Acme Tools',
        'en' => 'Acme Tools'
    ], // optional
    referenceEntityId: '', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
