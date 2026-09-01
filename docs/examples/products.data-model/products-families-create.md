```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsFamiliesCreate(
    code: 'power_tools',
    imageAttribute: 'main_image', // optional
    labelAttribute: 'name', // optional
    labels: [
        'de' => 'Elektrowerkzeuge',
        'en' => 'Power tools'
    ] // optional
);```
