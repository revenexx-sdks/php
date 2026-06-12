```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Orders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersUpdate(
    id: '',
    billingAddress: [], // optional
    buyer: [], // optional
    customerOrderNumber: '', // optional
    metadata: [], // optional
    shippingAddress: [], // optional
    userData: [] // optional
);```
