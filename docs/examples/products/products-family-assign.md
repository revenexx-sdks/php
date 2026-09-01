```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsFamilyAssign(
    id: '',
    familyCode: '', // optional
    familyId: '' // optional
);```
