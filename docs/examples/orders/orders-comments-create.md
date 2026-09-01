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

$result = $orders->ordersCommentsCreate(
    id: '',
    body: 'Called the customer, delivery agreed for next week.',
    author: 'service-desk', // optional
    visibility: OrderCommentVisibility::INTERNAL() // optional
);```
