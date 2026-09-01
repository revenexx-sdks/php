```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersReturn(
    id: '',
    metadata: [
        'rma_portal_case' => 'C-2026-0917'
    ], // optional
    positions: [], // optional
    reason: 'Damaged on arrival', // optional
    restock: true // optional
);```
