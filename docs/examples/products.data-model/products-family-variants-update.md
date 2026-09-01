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

$result = $productsDataModel->productsFamilyVariantsUpdate(
    id: '',
    axes: [
        '0' => 'colour',
        '1' => 'size'
    ], // optional
    code: 'clothing_by_colour_size', // optional
    familyId: '', // optional
    labels: [
        'de' => 'Nach Farbe und Größe',
        'en' => 'By colour and size'
    ] // optional
);```
