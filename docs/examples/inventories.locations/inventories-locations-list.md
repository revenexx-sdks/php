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
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
