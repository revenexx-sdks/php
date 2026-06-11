```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Shipping;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shipping = new Shipping($client);

$result = $shipping->shippingMethodsUpdate(
    id: ''
);```
