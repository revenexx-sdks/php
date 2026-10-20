```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsManufacturers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsManufacturers = new ProductsManufacturers($client);

$result = $productsManufacturers->productsManufacturersProducts(
    id: '',
    limit: 1, // optional
    offset: 1, // optional
    order: 'sku.asc' // optional
);```
