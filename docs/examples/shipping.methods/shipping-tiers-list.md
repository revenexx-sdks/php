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

$result = $shippingMethods->shippingTiersList(
    methodId: '',
    limit: 1, // optional
    offset: 1, // optional
    order: 'position.asc', // optional
    fromValue: 10 // optional
);```
