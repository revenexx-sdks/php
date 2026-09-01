```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;
use Revenexx\Enums\OrderStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersReportsCustomerRollup(
    asOf: '2026-01-01T12:00:00Z', // optional
    cursor: '', // optional
    organizationIds: [], // optional
    statuses: [OrderStatus::PENDING()] // optional
);```
