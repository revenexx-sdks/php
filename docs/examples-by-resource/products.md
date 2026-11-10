# products

## products-list

List products

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsListTrashed;
use Revenexx\Enums\ProductsListKind;
use Revenexx\Enums\ProductsListStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    trashed: ProductsListTrashed::ONLY(), // optional
    id: '', // optional
    sku: 'ACME-4711-BLK', // optional
    kind: ProductsListKind::SIMPLE(), // optional
    parentId: '', // optional
    familyId: '', // optional
    familyVariantId: '', // optional
    manufacturerId: '', // optional
    enabled: true, // optional
    status: ProductsListStatus::DRAFT(), // optional
    statusChangedAt: '2026-01-01T12:00:00Z', // optional
    channelRelease: '{}', // optional
    channels: '{webshop-de,punchout}', // optional
    taxClass: 'standard', // optional
    baseValues: '{}', // optional
    attributeValues: '{}', // optional
    label: 'Akku-Bohrschrauber 18V', // optional
    quantifiedAssociations: '{}', // optional
    completeness: '{}', // optional
    manufacturerGpsrComplete: true, // optional
    externalId: 'ART-4711', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)' // optional
);```

## products-create

Create product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsKind;
use Revenexx\Enums\ProductsStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsCreate(
    sku: 'ACME-4711-BLK',
    attributeValues: [
        'channel_locale_specific' => [
            'b2b' => [
                'de' => [
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
            'de' => [
                'description' => 'Bürstenloser Motor, 2 Akkus im Set.',
                'name' => 'Akku-Bohrschrauber 18V'
            ],
            'en' => [
                'name' => '18V cordless drill'
            ]
        ]
    ], // optional
    baseValues: [
        'country_of_origin' => 'DE',
        'customs_tariff_number' => '82055980',
        'gtin' => '4012345000009',
        'min_order_quantity' => 10,
        'order_interval' => 5,
        'unit' => 'piece'
    ], // optional
    categoryId: '', // optional
    channelRelease: [
        'marketplace' => 'in_review',
        'webshop-de' => 'released'
    ], // optional
    channels: ["webshop-de","punchout"], // optional
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
    copyFrom: '', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    enabled: true, // optional
    externalId: 'ART-4711', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    familyId: '', // optional
    familyVariantId: '', // optional
    kind: ProductsKind::SIMPLE(), // optional
    manufacturerId: '', // optional
    name: 'Akku-Bohrschrauber 18V', // optional
    parentId: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
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
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: ProductsStatus::DRAFT(), // optional
    taxClass: 'standard', // optional
    trashBatch: '' // optional
);```

## products-batch

Resolve many products at once

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

$result = $products->productsBatch(
    full: true, // optional
    ids: [], // optional
    skus: [] // optional
);```

## products-grid

Browse the product grid

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsGrid(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    q: 'cordless drill', // optional
    kind: ProductsListKind::SIMPLE(), // optional
    enabled: true, // optional
    familyId: '' // optional
);```

## products-labels

Resolve product display names

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

$result = $products->productsLabels(
    ids: [], // optional
    skus: [] // optional
);```

## products-product-associations-list

List product associations

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
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-product-associations-create

Create product association

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

$result = $products->productsProductAssociationsCreate(
    associationTypeId: '',
    productId: '',
    targetProductId: '',
    position: 1, // optional
    quantity: 4 // optional
);```

## products-product-associations-delete

Delete product association

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

$result = $products->productsProductAssociationsDelete(
    id: ''
);```

## products-product-associations-get

Get product association

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

$result = $products->productsProductAssociationsGet(
    id: ''
);```

## products-product-associations-update

Update product association

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

$result = $products->productsProductAssociationsUpdate(
    id: '',
    associationTypeId: '', // optional
    position: 1, // optional
    productId: '', // optional
    quantity: 4, // optional
    targetProductId: '' // optional
);```

## products-setup

Read the setup checklist

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

$result = $products->productsSetup();
```

## products-tax-classes-usage

Count the products using a tax class

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

$result = $products->productsTaxClassesUsage(
    code: 'reduced'
);```

## products-empty-trash

Empty the trash of products

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

$result = $products->productsEmptyTrash();
```

## products-vocabularies-list

List vocabularies

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

$result = $products->productsVocabulariesList();
```

## products-vocabularies-get

Get vocabulary

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

$result = $products->productsVocabulariesGet(
    name: 'product-kinds'
);```

## products-delete

Move product to the trash, or delete it for good

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

$result = $products->productsDelete(
    id: ''
);```

## products-get

Get product

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

$result = $products->productsGet(
    id: ''
);```

## products-update

Update product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsKind;
use Revenexx\Enums\ProductsStatus;

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
                'de' => [
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
            'de' => [
                'description' => 'Bürstenloser Motor, 2 Akkus im Set.',
                'name' => 'Akku-Bohrschrauber 18V'
            ],
            'en' => [
                'name' => '18V cordless drill'
            ]
        ]
    ], // optional
    baseValues: [
        'country_of_origin' => 'DE',
        'customs_tariff_number' => '82055980',
        'gtin' => '4012345000009',
        'min_order_quantity' => 10,
        'order_interval' => 5,
        'unit' => 'piece'
    ], // optional
    channelRelease: [
        'marketplace' => 'in_review',
        'webshop-de' => 'released'
    ], // optional
    channels: ["webshop-de","punchout"], // optional
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
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    enabled: true, // optional
    externalId: 'ART-4711', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    familyId: '', // optional
    familyVariantId: '', // optional
    kind: ProductsKind::SIMPLE(), // optional
    manufacturerId: '', // optional
    parentId: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
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
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: ProductsStatus::DRAFT(), // optional
    taxClass: 'standard', // optional
    trashBatch: '' // optional
);```

## products-attribute-set

Set one attribute value on a product

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

$result = $products->productsAttributeSet(
    id: '',
    attribute: 'material',
    value: ,
    locale: 'de' // optional
);```

## products-channels-assign

Assign sales channels to a product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsChannelsAssignMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsChannelsAssign(
    id: '',
    channels: ["webshop-de","punchout"],
    mode: ProductsChannelsAssignMode::ADD() // optional
);```

## products-completeness

Compute product completeness

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

$result = $products->productsCompleteness(
    id: '',
    data: []
);```

## products-copy

Copy a product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Products;
use Revenexx\Enums\ProductsCopyParts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$products = new Products($client);

$result = $products->productsCopy(
    id: '',
    sku: 'ACME-4712-BLK',
    parts: [ProductsCopyParts::ATTRIBUTES(), ProductsCopyParts::IMAGES()] // optional
);```

## products-family-assign

Assign a family to a product

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

## products-manufacturer-assign

Link a product to a manufacturer

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

$result = $products->productsManufacturerAssign(
    id: '',
    manufacturerId: ''
);```

## products-restore

Restore product from the trash

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

$result = $products->productsRestore(
    id: ''
);```
