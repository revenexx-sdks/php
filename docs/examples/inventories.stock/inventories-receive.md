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

$result = $inventoriesStock->inventoriesReceive(
    items: [], // optional
    locationCode: 'main', // optional
    productId: '', // optional
    quantity: 12, // optional
    reason: 'Delivery note 4711', // optional
    sku: 'ACME-4711-BLK' // optional
);```
