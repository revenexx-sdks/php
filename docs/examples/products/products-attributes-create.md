```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Products;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsAttributesCreate(
    code: '',
    type: '',
    config: [], // optional
    entityRef: '', // optional
    entityType: '', // optional
    groupId: '', // optional
    isFilterable: null, // optional
    isUnique: null, // optional
    labels: [], // optional
    localizable: null, // optional
    position: null, // optional
    scopable: null, // optional
    usableInGrid: null, // optional
    validation: [] // optional
);```
