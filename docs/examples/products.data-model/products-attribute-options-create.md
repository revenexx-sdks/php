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

$result = $productsDataModel->productsAttributeOptionsCreate(
    attributeId: '',
    code: 'stainless_steel',
    labels: [
        'de' => 'Edelstahl',
        'en' => 'Stainless steel'
    ], // optional
    position: 1, // optional
    swatch: [
        'hex' => '#c0c0c0'
    ] // optional
);```
