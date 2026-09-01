```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\Kind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsGrid(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    q: 'cordless drill', // optional
    kind: Kind::SIMPLE(), // optional
    enabled: true, // optional
    familyId: '' // optional
);```
