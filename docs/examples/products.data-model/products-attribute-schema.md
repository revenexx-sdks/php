```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsDataModel;
use Revenexx\Enums\EntityType;
use Revenexx\Enums\Kind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsDataModel = new ProductsDataModel($client);

$result = $productsDataModel->productsAttributeSchema(
    familyId: '', // optional
    familyCode: '', // optional
    entityType: EntityType::PRODUCT(), // optional
    entityRef: 'brand', // optional
    locale: 'de_DE', // optional
    channel: 'b2b', // optional
    kind: Kind::SIMPLE() // optional
);```
