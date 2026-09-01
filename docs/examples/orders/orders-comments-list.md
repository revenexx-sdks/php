```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;
use Revenexx\Enums\OrderCommentVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersCommentsList(
    id: '',
    idQuery: '', // optional
    body: 'Called the customer, delivery agreed for next week.', // optional
    visibility: OrderCommentVisibility::INTERNAL(), // optional
    author: 'service-desk', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
