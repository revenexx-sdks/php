# inventories.locations

## inventories-locations-list

List stock locations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;
use Revenexx\Enums\InventoriesLocationsListType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'main', // optional
    name: 'Main warehouse', // optional
    labels: '{}', // optional
    type: InventoriesLocationsListType::WAREHOUSE(), // optional
    priority: 0, // optional
    enabled: true, // optional
    address: '{}', // optional
    metadata: '{}', // optional
    externalId: 'LAGER-01', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## inventories-locations-create

Create a location

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;
use Revenexx\Enums\LocationType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsCreate(
    code: 'main',
    name: 'Main warehouse',
    address: [
        'address_line1' => 'Industriering 4',
        'country_code' => 'DE',
        'formatted' => [
            '0' => 'Industriering 4',
            '1' => '90402 Nuremberg'
        ],
        'locality' => 'Nuremberg',
        'postal_code' => '90402'
    ], // optional
    enabled: true, // optional
    labels: [
        'de' => 'Hauptlager',
        'en' => 'Main warehouse'
    ], // optional
    metadata: [
        'erp_site' => '1000'
    ], // optional
    priority: 0, // optional
    type: LocationType::WAREHOUSE() // optional
);```

## inventories-locations-defaults

Seed a new tenant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsDefaults();
```

## inventories-locations-delete

Delete a location

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsDelete(
    id: ''
);```

## inventories-locations-get

Read one location

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsGet(
    id: ''
);```

## inventories-locations-update

Update a location

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;
use Revenexx\Enums\LocationType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsUpdate(
    id: '',
    address: [
        'address_line1' => 'Industriering 4',
        'country_code' => 'DE',
        'formatted' => [
            '0' => 'Industriering 4',
            '1' => '90402 Nuremberg'
        ],
        'locality' => 'Nuremberg',
        'postal_code' => '90402'
    ], // optional
    code: 'main', // optional
    enabled: true, // optional
    labels: [
        'de' => 'Hauptlager',
        'en' => 'Main warehouse'
    ], // optional
    metadata: [
        'erp_site' => '1000'
    ], // optional
    name: 'Main warehouse', // optional
    priority: 0, // optional
    type: LocationType::WAREHOUSE() // optional
);```
