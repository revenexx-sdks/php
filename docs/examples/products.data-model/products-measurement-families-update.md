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

$result = $productsDataModel->productsMeasurementFamiliesUpdate(
    id: '',
    code: 'weight', // optional
    labels: [
        'de' => 'Gewicht',
        'en' => 'Weight'
    ], // optional
    standardUnit: 'kilogram', // optional
    units: [
        '0' => [
            'code' => 'kilogram',
            'convert_factor' => 1,
            'symbol' => 'kg'
        ],
        '1' => [
            'code' => 'gram',
            'convert_factor' => 0.001,
            'symbol' => 'g'
        ]
    ] // optional
);```
