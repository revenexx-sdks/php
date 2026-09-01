```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\Source;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    productId: '', // optional
    categoryId: '', // optional
    position: 1, // optional
    source: Source::MANUAL(), // optional
    createdAt: '2026-01-01T12:00:00Z' // optional
);```
