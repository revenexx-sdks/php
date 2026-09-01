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

$result = $carts->cartsUpdate(
    id: '',
    channelId: '', // optional
    currency: 'EUR', // optional
    metadata: [
        'campaign' => 'spring-catalogue',
        'locale' => 'de-DE',
        'source' => 'storefront'
    ], // optional
    name: 'Weekly order' // optional
);```
