```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsChannelsAssignMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsChannelsAssign(
    id: '',
    channels: ["webshop-de","punchout"],
    mode: ProductsChannelsAssignMode::ADD() // optional
);```
