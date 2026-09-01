```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsAssets;
use Revenexx\Enums\ProductsAssetsListSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsAssets = new ProductsAssets($client);

$result = $productsAssets->productsAssetsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    assetFamilyId: '', // optional
    code: 'acme-4711-blk_packshot_1', // optional
    source: ProductsAssetsListSource::STORAGE(), // optional
    storageAssetId: 'ast_01J8ZQ0000000000000000', // optional
    deliveryPath: 'packshots/acme-4711-blk_1.jpg', // optional
    externalUrl: 'https://cdn.example.com/packshots/acme-4711-blk_1.jpg', // optional
    attributeValues: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
