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

$result = $orders->ordersNumberRangesCreate(
    code: 'order',
    channelId: '', // optional
    counter: 123, // optional
    metadata: [
        'owner' => 'erp-sync'
    ], // optional
    padding: 6, // optional
    positionStep: 10, // optional
    prefix: 'ORD-', // optional
    step: 1, // optional
    suffix: '' // optional
);```
