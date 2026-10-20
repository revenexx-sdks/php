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

$result = $productsManufacturers->productsManufacturersLogoSet(
    id: '',
    assetId: '', // optional
    path: 'manufacturers/paul_horn.svg' // optional
);```
