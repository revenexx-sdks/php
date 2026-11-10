# inventories.reservations

## inventories-commit

Commit an order's reservations on shipment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesCommit(
    orderRef: 'SO-2026-000123'
);```

## inventories-release

Release an order's reservations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesRelease(
    orderRef: 'SO-2026-000123'
);```

## inventories-reservations-list

List reservations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;
use Revenexx\Enums\InventoriesReservationsListStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesReservationsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    locationId: '', // optional
    productId: '', // optional
    sku: 'ACME-4711-BLK', // optional
    quantity: 2, // optional
    orderRef: 'SO-2026-000123', // optional
    status: InventoriesReservationsListStatus::ACTIVE(), // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## inventories-reservations-sweep

Release every reservation whose hold has run out

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesReservationsSweep(
    data: []
);```

## inventories-reservations-get

Read one reservation

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesReservationsGet(
    id: ''
);```

## inventories-reserve

Reserve stock for an order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesReserve(
    orderRef: 'SO-2026-000123',
    expiresAt: '2026-01-01T12:00:00Z', // optional
    items: [], // optional
    locationCode: 'main', // optional
    productId: '', // optional
    quantity: 2, // optional
    shipTo: [], // optional
    sku: 'ACME-4711-BLK' // optional
);```
