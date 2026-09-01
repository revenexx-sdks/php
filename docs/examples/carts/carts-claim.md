```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\CartMergeStrategy;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsClaim(
    contactId: '',
    sessionKey: 'a1b2c3d4e5f6',
    strategy: CartMergeStrategy::MERGE(), // optional
    targetCartId: '' // optional
);```
