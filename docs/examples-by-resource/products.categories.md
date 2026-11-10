# products.categories

## products-categories-list

List categories

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\ProductsListTrashed;
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
    trashed: ProductsListTrashed::ONLY(), // optional
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
    pathLabel: 'Werkzeug › Elektrowerkzeug › Akku-Bohrschrauber', // optional
    membersDirect: 1, // optional
    membersTotal: 1, // optional
    countsComputedAt: '2026-01-01T12:00:00Z', // optional
    active: true, // optional
    externalId: 'EG000024', // optional
    externalRefs: '{}', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: '{}', // optional
    metadata: '{}', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)' // optional
);```

## products-categories-create

Create category

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\CategoriesRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesCreate(
    code: 'cordless_drills',
    active: true, // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    externalId: 'EG000024', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Akku-Bohrschrauber',
        'en' => 'Cordless drills'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    parentId: '', // optional
    path: 'tools/power_tools/cordless_drills', // optional
    position: 1, // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
    ruleMatch: CategoriesRuleMatch::ALL(), // optional
    rules: [
        'conditions' => [
            '0' => [
                'field' => 'attribute:brand',
                'operator' => 'in',
                'value' => [
                    '0' => 'acme',
                    '1' => 'globex'
                ]
            ],
            '1' => [
                'field' => 'enabled',
                'operator' => 'eq',
                'value' => true
            ]
        ]
    ], // optional
    rulesComputedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    trashBatch: '', // optional
    values: [
        'image' => 'categories/cordless-drills.jpg',
        'seo_title' => 'Cordless drills'
    ] // optional
);```

## products-categories-rules-recompute-all

Recompute every category rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesRulesRecomputeAll(
    data: []
);```

## products-categories-empty-trash

Empty the trash of categories

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesEmptyTrash();
```

## products-categories-rules-preview

Preview a category rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\CategoryRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesRulesPreview(
    categoryId: '',
    conditions: [],
    ruleMatch: CategoryRuleMatch::ALL() // optional
);```

## products-categories-rules-recompute

Recompute a category's rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesRulesRecompute(
    categoryId: '',
    cursor: '' // optional
);```

## products-categories-delete

Move category to the trash, or delete it for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesDelete(
    id: ''
);```

## products-categories-get

Get category

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesGet(
    id: ''
);```

## products-categories-update

Update category

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\CategoriesRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesUpdate(
    id: '',
    active: true, // optional
    code: 'cordless_drills', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'merchant@example.com', // optional
    deletedById: '283746592837465012', // optional
    externalId: 'EG000024', // optional
    externalRefs: [
        'entitys' => '4711',
        'gtin' => '4012345000009'
    ], // optional
    labels: [
        'de' => 'Akku-Bohrschrauber',
        'en' => 'Cordless drills'
    ], // optional
    metadata: [
        'do_not_export' => true,
        'sync_owner' => 'erp-nightly'
    ], // optional
    parentId: '', // optional
    path: 'tools/power_tools/cordless_drills', // optional
    position: 1, // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: ''S1230020C1TI25' still has stock at 2 location(s)', // optional
    ruleMatch: CategoriesRuleMatch::ALL(), // optional
    rules: [
        'conditions' => [
            '0' => [
                'field' => 'attribute:brand',
                'operator' => 'in',
                'value' => [
                    '0' => 'acme',
                    '1' => 'globex'
                ]
            ],
            '1' => [
                'field' => 'enabled',
                'operator' => 'eq',
                'value' => true
            ]
        ]
    ], // optional
    rulesComputedAt: '2026-01-01T12:00:00Z', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'BMECAT_GROUP' => 'EL-4711'
        ],
        'system' => 'pim'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    trashBatch: '', // optional
    values: [
        'image' => 'categories/cordless-drills.jpg',
        'seo_title' => 'Cordless drills'
    ] // optional
);```

## products-categories-restore

Restore category from the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesRestore(
    id: ''
);```

## products-product-categories-list

List product category memberships

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\ProductsProductCategoriesListSource;

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
    source: ProductsProductCategoriesListSource::MANUAL(), // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## products-product-categories-create

Create product category membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\ProductCategoriesSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesCreate(
    categoryId: '',
    productId: '',
    position: 1, // optional
    source: ProductCategoriesSource::MANUAL() // optional
);```

## products-product-categories-delete

Delete product category membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesDelete(
    id: ''
);```

## products-product-categories-get

Get product category membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesGet(
    id: ''
);```

## products-product-categories-update

Update product category membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;
use Revenexx\Enums\ProductCategoriesSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsProductCategoriesUpdate(
    id: '',
    categoryId: '', // optional
    position: 1, // optional
    productId: '', // optional
    source: ProductCategoriesSource::MANUAL() // optional
);```

## products-categories-assign

File a product into a category

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ProductsCategories;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$productsCategories = new ProductsCategories($client);

$result = $productsCategories->productsCategoriesAssign(
    id: '',
    categoryId: '',
    position: 1 // optional
);```
