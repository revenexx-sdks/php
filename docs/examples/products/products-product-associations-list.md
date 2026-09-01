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

$result = $products->productsProductAssociationsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    productId: '', // optional
    associationTypeId: '', // optional
    targetProductId: '', // optional
    quantity: 9.99, // optional
    position: 1, // optional
    createdAt: '2026-01-01T12:00:00Z' // optional
);```
