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

$result = $productsDataModel->productsAttributeGroupsUpdate(
    id: '',
    code: 'technical_attributes', // optional
    labels: [
        'de' => 'Technische Attribute',
        'en' => 'Technical attributes'
    ], // optional
    position: 1 // optional
);```
