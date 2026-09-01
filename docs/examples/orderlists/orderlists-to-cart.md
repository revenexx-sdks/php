```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orderlists;
use Revenexx\Enums\OrderListCartMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orderlists = new Orderlists($client);

$result = $orderlists->orderlistsToCart(
    id: '',
    cartId: '', // optional
    currency: '', // optional
    mode: OrderListCartMode::APPEND() // optional
);```
