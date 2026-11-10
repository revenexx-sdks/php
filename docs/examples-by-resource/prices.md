# prices

## prices-check

Explain the price an item gets

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\Lang;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesCheck(
    at: '2026-10-18T12:00:00Z', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    lang: Lang::DE(), // optional
    market: 'de', // optional
    organizationId: '', // optional
    productId: '', // optional
    quantity: 10, // optional
    segmentCodes: ["dealer"], // optional
    sku: 'ART-1001' // optional
);```

## prices-lists-list

List price lists

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceListStatus;
use Revenexx\Enums\PriceListTaxBasis;
use Revenexx\Enums\PriceListTrashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsList(
    id: '', // optional
    code: 'standard', // optional
    name: 'Standard prices', // optional
    description: 'The list every buyer falls back to.', // optional
    currency: 'EUR', // optional
    status: PriceListStatus::ACTIVE(), // optional
    priority: 1, // optional
    isDefault: true, // optional
    taxBasis: PriceListTaxBasis::NET(), // optional
    taxIncluded: true, // optional
    requiresAuth: true, // optional
    contactId: '', // optional
    organizationId: '', // optional
    segmentCode: 'wholesale', // optional
    channelId: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    externalId: 'VKPL-2026', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    trashed: PriceListTrashed::ONLY(), // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## prices-lists-create

Create a price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceListStatus;
use Revenexx\Enums\PriceListTaxBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsCreate(
    code: 'dealer-de',
    name: 'Dealer prices',
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    description: 'Contract prices for authorised dealers.', // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Händlerpreise',
        'en' => 'Dealer prices'
    ], // optional
    metadata: [
        'erp_price_group' => 'A1',
        'source_system' => 'erp'
    ], // optional
    organizationId: '', // optional
    priority: 1, // optional
    requiresAuth: true, // optional
    segmentCode: 'wholesale', // optional
    status: PriceListStatus::ACTIVE(), // optional
    taxBasis: PriceListTaxBasis::NET(), // optional
    taxIncluded: true, // optional
    validFrom: '2026-01-01T00:00:00Z', // optional
    validUntil: '2026-12-31T23:59:59Z' // optional
);```

## prices-lists-defaults

Seed the standard price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsDefaults();
```

## prices-lists-empty-trash

Delete every price list in the trash for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsEmptyTrash(
    data: []
);```

## prices-lists-delete

Trash a price list, or delete it for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsDelete(
    id: ''
);```

## prices-lists-get

Read one price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsGet(
    id: ''
);```

## prices-lists-update

Update a price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceListStatus;
use Revenexx\Enums\PriceListTaxBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsUpdate(
    id: '',
    channelId: '', // optional
    code: 'dealer-de', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    description: 'Contract prices for authorised dealers.', // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Händlerpreise',
        'en' => 'Dealer prices'
    ], // optional
    metadata: [
        'erp_price_group' => 'A1',
        'source_system' => 'erp'
    ], // optional
    name: 'Dealer prices', // optional
    organizationId: '', // optional
    priority: 1, // optional
    requiresAuth: true, // optional
    segmentCode: 'wholesale', // optional
    status: PriceListStatus::ACTIVE(), // optional
    taxBasis: PriceListTaxBasis::NET(), // optional
    taxIncluded: true, // optional
    validFrom: '2026-01-01T00:00:00Z', // optional
    validUntil: '2026-12-31T23:59:59Z' // optional
);```

## prices-lists-copy

Copy a price list under a new code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\Parts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsCopy(
    id: '',
    code: 'dealer-de-2027',
    parts: [Parts::PRICES()] // optional
);```

## prices-lists-restore

Take a price list back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsRestore(
    id: '',
    data: []
);```

## prices-entries-list

List price list entries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEntryType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesList(
    listId: '',
    id: '', // optional
    productId: '', // optional
    sku: 'BOLT-M8-30', // optional
    priceType: PriceEntryType::STANDARD(), // optional
    quantityMin: 9.99, // optional
    unitPrice: 9.99, // optional
    unit: 'pcs', // optional
    priceQuantity: 9.99, // optional
    priceQuantityUnit: 'm', // optional
    discountPercent: 9.99, // optional
    description: 'Cable, per 100 m, alloy surcharge included', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    externalId: 'VKPL-2026/10000', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## prices-entries-create

Add a price entry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEntryType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesCreate(
    listId: '',
    description: 'Cable, per 100 m, alloy surcharge included', // optional
    discountPercent: 9.99, // optional
    metadata: [
        'imported_batch' => '2026-02-14',
        'source_system' => 'erp'
    ], // optional
    priceQuantity: 9.99, // optional
    priceQuantityUnit: 'm', // optional
    priceType: PriceEntryType::STANDARD(), // optional
    productId: '', // optional
    quantityMin: 9.99, // optional
    sku: 'BOLT-M8-30', // optional
    unit: 'pcs', // optional
    unitPrice: 9.99, // optional
    validFrom: '2026-03-01T00:00:00Z', // optional
    validUntil: '2026-03-31T23:59:59Z' // optional
);```

## prices-entries-replace

Replace all entries of a price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesReplace(
    listId: '',
    entries: []
);```

## prices-entries-adjust

Bulk-change the prices of a list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEndingRule;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesAdjust(
    listId: '',
    amount: 9.99, // optional
    dryRun: true, // optional
    percent: 9.99, // optional
    rounding: PriceEndingRule::EXACT(), // optional
    skuPrefix: 'BOLT-' // optional
);```

## prices-entries-bulk

Bulk-upsert price entries

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEntriesBulkMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesBulk(
    listId: '',
    entries: [],
    mode: PriceEntriesBulkMode::UPSERT() // optional
);```

## prices-entries-ladder

Generate a quantity ladder for one item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEndingRule;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesLadder(
    listId: '',
    basePrice: 9.99,
    discountPercent: 9.99, // optional
    productId: '', // optional
    quantities: [1,10,50], // optional
    replace: true, // optional
    rounding: PriceEndingRule::EXACT(), // optional
    sku: 'BOLT-M8-30', // optional
    unit: 'pcs' // optional
);```

## prices-entries-delete

Delete a price entry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesDelete(
    listId: '',
    id: ''
);```

## prices-entries-get

Read one price entry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesGet(
    listId: '',
    id: ''
);```

## prices-entries-update

Update a price entry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEntryType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesUpdate(
    listId: '',
    id: '',
    description: 'Cable, per 100 m, alloy surcharge included', // optional
    discountPercent: 9.99, // optional
    metadata: [
        'imported_batch' => '2026-02-14',
        'source_system' => 'erp'
    ], // optional
    priceQuantity: 9.99, // optional
    priceQuantityUnit: 'm', // optional
    priceType: PriceEntryType::STANDARD(), // optional
    productId: '', // optional
    quantityMin: 9.99, // optional
    sku: 'BOLT-M8-30', // optional
    unit: 'pcs', // optional
    unitPrice: 9.99, // optional
    validFrom: '2026-03-01T00:00:00Z', // optional
    validUntil: '2026-03-31T23:59:59Z' // optional
);```

## prices-lists-make-default

Move the default flag to this price list

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsMakeDefault(
    listId: '',
    data: []
);```

## prices-resolve

Resolve prices for a buyer context

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesResolve(
    items: [],
    at: '2026-03-15T09:00:00Z', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    marketId: '', // optional
    organizationId: '', // optional
    segmentCodes: ["wholesale"] // optional
);```

## prices-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesVocabulariesList();
```

## prices-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PricesVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesVocabulariesGet(
    name: PricesVocabulariesGetName::LISTSTATUSES()
);```
