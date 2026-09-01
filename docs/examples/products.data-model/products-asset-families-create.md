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

$result = $productsDataModel->productsAssetFamiliesCreate(
    code: 'packshots',
    labels: [
        'de' => 'Packshots',
        'en' => 'Packshots'
    ], // optional
    namingConvention: [
        'allowed_extensions' => [
            '0' => 'jpg',
            '1' => 'png'
        ],
        'pattern' => '{sku}_{index}',
        'source' => 'sku'
    ] // optional
);```
