```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsHeldCodes(
    code: 'FRUEHJAHR25,B2B-10', // optional
    status: 'active,abandoned', // optional
    limit: 1, // optional
    offset: 1 // optional
);```
