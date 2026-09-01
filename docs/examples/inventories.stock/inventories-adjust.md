```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesStock;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesStock = new InventoriesStock($client);

$result = $inventoriesStock->inventoriesAdjust(
    items: [], // optional
    locationCode: 'main', // optional
    productId: '', // optional
    quantity: -3, // optional
    reason: 'Stocktake 2026-03, two units damaged', // optional
    sku: 'ACME-4711-BLK' // optional
);```
