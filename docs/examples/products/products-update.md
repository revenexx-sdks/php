```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsUpdate(
    id: '',
    attributeValues: [
        'channel_locale_specific' => [
            'b2b' => [
                'de_DE' => [
                    'description' => 'Staffelpreise auf Anfrage.'
                ]
            ]
        ],
        'channel_specific' => [
            'b2b' => [
                'minimum_order_quantity' => 6
            ]
        ],
        'common' => [
            'colour' => 'black',
            'manufacturer_aid' => '4711-BLK',
            'net_weight' => 2.4
        ],
        'locale_specific' => [
            'de_DE' => [
                'description' => 'Bürstenloser Motor, 2 Akkus im Set.',
                'name' => 'Akku-Bohrschrauber 18V'
            ],
            'en_GB' => [
                'name' => '18V cordless drill'
            ]
        ]
    ], // optional
    completeness: [
        'computed_at' => '2026-01-01T12:00:00Z',
        'filled' => 9,
        'missing' => [
            '0' => 'net_weight',
            '1' => 'packaging_unit',
            '2' => 'safety_datasheet'
        ],
        'ratio' => 0.75,
        'required' => 12
    ], // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    enabled: true, // optional
    familyId: '', // optional
    familyVariantId: '', // optional
    kind: ProductsKind::SIMPLE(), // optional
    parentId: '', // optional
    quantifiedAssociations: [
        'PRODUCT_SET' => [
            'product_models' => [],
            'products' => [
                '0' => [
                    'identifier' => 'ACME-4711-CASTER',
                    'quantity' => 4
                ]
            ]
        ]
    ], // optional
    sku: 'ACME-4711-BLK', // optional
    taxClass: 'standard' // optional
);```
