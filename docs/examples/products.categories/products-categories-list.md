```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\RuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: 'cordless_drills', // optional
    parentId: '', // optional
    path: 'tools/power_tools/cordless_drills', // optional
    position: 1, // optional
    labels: '{}', // optional
    values: '{}', // optional
    rules: '{}', // optional
    ruleMatch: RuleMatch::ALL(), // optional
    rulesComputedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
