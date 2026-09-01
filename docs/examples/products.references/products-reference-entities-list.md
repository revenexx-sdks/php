```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsReferences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsReferences = new ProductsReferences($client);

$result = $productsReferences->productsReferenceEntitiesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'brand', // optional
    labels: '{}', // optional
    image: 'reference-entities/brand.svg', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
