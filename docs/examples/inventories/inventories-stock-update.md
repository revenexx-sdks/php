```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Inventories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventories = new Inventories($client);

$result = $inventories->inventoriesStockUpdate(
    id: '',
    locationId: '', // optional
    metadata: [], // optional
    onHand: null, // optional
    productId: '', // optional
    reorderPoint: null, // optional
    reserved: null, // optional
    sku: '' // optional
);```
