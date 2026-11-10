# products.manufacturers

## products-manufacturers-list

List manufacturers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;
use Revenexx\Enums\ProductsListTrashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    trashed: ProductsListTrashed::ONLY(), // optional
    id: '', // optional
    code: 'paul_horn', // optional
    name: 'Paul Horn', // optional
    descriptions: '{}', // optional
    logo: 'paul_horn_logo', // optional
    website: 'https://www.phorn.de', // optional
    legalName: 'Paul Horn GmbH', // optional
    street: 'Unter dem Holz 33-35', // optional
    postalCode: '72072', // optional
    city: 'Tübingen', // optional
    country: 'DE', // optional
    email: 'info@phorn.de', // optional
    eeaResponsibleName: 'Acme Europe B.V.', // optional
    eeaResponsibleStreet: 'Keizersgracht 1', // optional
    eeaResponsiblePostalCode: '1015 CJ', // optional
    eeaResponsibleCity: 'Amsterdam', // optional
    eeaResponsibleCountry: 'NL', // optional
    eeaResponsibleEmail: 'safety@acme.eu', // optional
    postalAddress: '{}', // optional
    eeaResponsibleAddress: '{}', // optional
    gpsrComplete: true, // optional
    active: true, // optional
    externalId: 'MFR-0815', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)' // optional
);```

## products-manufacturers-create

Create manufacturer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersCreate(
    code: 'paul_horn',
    country: 'DE',
    name: 'Paul Horn',
    active: true, // optional
    city: 'Tübingen', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    descriptions: [
        'de' => 'Präzisionswerkzeuge aus Tübingen.',
        'en' => 'Precision tools from Tübingen.'
    ], // optional
    eeaResponsibleAddress: [
        'address_line1' => 'Keizersgracht 1',
        'country_code' => 'NL',
        'formatted' => [
            '0' => 'Acme Europe B.V.',
            '1' => 'Keizersgracht 1',
            '2' => '1015 CJ AMSTERDAM',
            '3' => 'NETHERLANDS'
        ],
        'locality' => 'Amsterdam',
        'organization_name' => 'Acme Europe B.V.',
        'postal_code' => '1015 CJ'
    ], // optional
    eeaResponsibleCity: 'Amsterdam', // optional
    eeaResponsibleCountry: 'NL', // optional
    eeaResponsibleEmail: 'safety@acme.eu', // optional
    eeaResponsibleName: 'Acme Europe B.V.', // optional
    eeaResponsiblePostalCode: '1015 CJ', // optional
    eeaResponsibleStreet: 'Keizersgracht 1', // optional
    email: 'info@phorn.de', // optional
    externalId: 'MFR-0815', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    legalName: 'Paul Horn GmbH', // optional
    logo: 'paul_horn_logo', // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    postalAddress: [
        'address_line1' => 'Unter dem Holz 33-35',
        'country_code' => 'DE',
        'formatted' => [
            '0' => 'Paul Horn GmbH',
            '1' => 'Unter dem Holz 33-35',
            '2' => '72072 TÜBINGEN',
            '3' => 'GERMANY'
        ],
        'locality' => 'Tübingen',
        'organization_name' => 'Paul Horn GmbH',
        'postal_code' => '72072'
    ], // optional
    postalCode: '72072', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    street: 'Unter dem Holz 33-35', // optional
    trashBatch: '', // optional
    website: 'https://www.phorn.de' // optional
);```

## products-manufacturers-migrate

Move free-text manufacturers onto records

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersMigrate(
    cursor: '', // optional
    dryRun: true // optional
);```

## products-manufacturers-empty-trash

Empty the trash of manufacturers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersEmptyTrash();
```

## products-manufacturers-delete

Move manufacturer to the trash, or delete it for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersDelete(
    id: ''
);```

## products-manufacturers-get

Get manufacturer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersGet(
    id: ''
);```

## products-manufacturers-update

Update manufacturer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersUpdate(
    id: '',
    active: true, // optional
    city: 'Tübingen', // optional
    code: 'paul_horn', // optional
    country: 'DE', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    descriptions: [
        'de' => 'Präzisionswerkzeuge aus Tübingen.',
        'en' => 'Precision tools from Tübingen.'
    ], // optional
    eeaResponsibleAddress: [
        'address_line1' => 'Keizersgracht 1',
        'country_code' => 'NL',
        'formatted' => [
            '0' => 'Acme Europe B.V.',
            '1' => 'Keizersgracht 1',
            '2' => '1015 CJ AMSTERDAM',
            '3' => 'NETHERLANDS'
        ],
        'locality' => 'Amsterdam',
        'organization_name' => 'Acme Europe B.V.',
        'postal_code' => '1015 CJ'
    ], // optional
    eeaResponsibleCity: 'Amsterdam', // optional
    eeaResponsibleCountry: 'NL', // optional
    eeaResponsibleEmail: 'safety@acme.eu', // optional
    eeaResponsibleName: 'Acme Europe B.V.', // optional
    eeaResponsiblePostalCode: '1015 CJ', // optional
    eeaResponsibleStreet: 'Keizersgracht 1', // optional
    email: 'info@phorn.de', // optional
    externalId: 'MFR-0815', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    legalName: 'Paul Horn GmbH', // optional
    logo: 'paul_horn_logo', // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    name: 'Paul Horn', // optional
    postalAddress: [
        'address_line1' => 'Unter dem Holz 33-35',
        'country_code' => 'DE',
        'formatted' => [
            '0' => 'Paul Horn GmbH',
            '1' => 'Unter dem Holz 33-35',
            '2' => '72072 TÜBINGEN',
            '3' => 'GERMANY'
        ],
        'locality' => 'Tübingen',
        'organization_name' => 'Paul Horn GmbH',
        'postal_code' => '72072'
    ], // optional
    postalCode: '72072', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    street: 'Unter dem Holz 33-35', // optional
    trashBatch: '', // optional
    website: 'https://www.phorn.de' // optional
);```

## products-manufacturers-gpsr

Check a manufacturer's GPSR data

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersGpsr(
    id: ''
);```

## products-manufacturers-logo-remove

Remove a manufacturer's logo

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersLogoRemove(
    id: ''
);```

## products-manufacturers-logo-set

Set a manufacturer's logo

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersLogoSet(
    id: '',
    assetId: '', // optional
    path: 'manufacturers/paul_horn.svg' // optional
);```

## products-manufacturers-products

List the products of a manufacturer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersProducts(
    id: '',
    limit: 1, // optional
    offset: 1, // optional
    order: 'sku.asc' // optional
);```

## products-manufacturers-restore

Restore manufacturer from the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersRestore(
    id: ''
);```
