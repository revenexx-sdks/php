```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersUpdate(
    methodId: '',
    id: '',
    fromValue: 10, // optional
    position: 1, // optional
    price: 6.9 // optional
);```
