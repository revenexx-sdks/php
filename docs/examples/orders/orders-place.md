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

$result = $orders->ordersPlace(
    items: [],
    billingAddress: [], // optional
    buyer: [], // optional
    cartId: '', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    customerOrderNumber: '', // optional
    grandTotal: null, // optional
    marketId: '', // optional
    metadata: [], // optional
    organizationId: '', // optional
    payment: [], // optional
    shipping: [], // optional
    shippingAddress: [], // optional
    shippingTotal: null, // optional
    userData: [] // optional
);```
