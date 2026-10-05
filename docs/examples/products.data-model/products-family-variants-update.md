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

$result = $productsDataModel->productsFamilyVariantsUpdate(
    id: '',
    axes: [
        '0' => 'colour',
        '1' => 'size'
    ], // optional
    code: 'clothing_by_colour_size', // optional
    externalId: 'EC001234-VAR1', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    familyId: '', // optional
    labels: [
        'de' => 'Nach Farbe und Größe',
        'en' => 'By colour and size'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
