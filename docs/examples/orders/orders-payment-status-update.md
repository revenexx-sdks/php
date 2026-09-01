```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;
use Revenexx\Enums\OrderPaymentStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersPaymentStatusUpdate(
    id: '',
    status: OrderPaymentStatus::OPEN(),
    paymentId: 'pay_000000000001' // optional
);```
