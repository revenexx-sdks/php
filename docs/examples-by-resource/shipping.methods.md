# shipping.methods

## shipping-methods-list

List shipping method configurations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;
use Revenexx\Enums\PricingType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'position.asc', // optional
    code: 'express', // optional
    enabled: true, // optional
    pricingType: PricingType::MATRIX(), // optional
    carrierId: '8a4d1c7e-2b93-4f61-b0d2-6c5a9e3f1a44', // optional
    carrier: 'acme-parcel', // optional
    externalId: 'VERSANDART-02', // optional
    taxClass: 'reduced' // optional
);```

## shipping-methods-create

Create a shipping method

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;
use Revenexx\Enums\ShippingMethodMatrixBasis;
use Revenexx\Enums\ShippingMethodPricingType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsCreate(
    code: 'express',
    name: 'Express delivery',
    carrier: 'acme-parcel', // optional
    carrierId: '8a4d1c7e-2b93-4f61-b0d2-6c5a9e3f1a44', // optional
    checkoutNotes: [
        'de' => 'Lieferung nur werktags.',
        'en' => 'Delivered on working days only.'
    ], // optional
    countries: ["DE","AT","CH"], // optional
    currency: 'EUR', // optional
    description: 'Delivered by the next working day when ordered before the cut-off.', // optional
    enabled: true, // optional
    etaDaysMax: 1, // optional
    etaDaysMin: 1, // optional
    externalId: 'VERSANDART-02', // optional
    externalRefs: [
        'business-central' => 'VERSANDART-02',
        'legacy_shop' => 'express'
    ], // optional
    freeAbove: 100, // optional
    labels: [
        'de' => 'Expressversand',
        'en' => 'Express delivery'
    ], // optional
    matrixAttribute: 'volume_litres', // optional
    matrixBasis: ShippingMethodMatrixBasis::WEIGHT(), // optional
    metadata: [
        'erp_key' => 'SHIP-EXPRESS',
        'printer' => 'label-2'
    ], // optional
    position: 1, // optional
    price: 9.9, // optional
    pricingType: ShippingMethodPricingType::FIXED(), // optional
    quoteAbove: 31.5, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Shipping_Agent_Service' => 'NEXTDAY'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    taxClass: 'reduced' // optional
);```

## shipping-methods-defaults

Seed the standard shipping methods

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsDefaults();
```

## shipping-methods-delete

Delete a shipping method

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsDelete(
    id: ''
);```

## shipping-methods-get

Read one shipping method

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsGet(
    id: ''
);```

## shipping-methods-update

Update a shipping method

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;
use Revenexx\Enums\ShippingMethodMatrixBasis;
use Revenexx\Enums\ShippingMethodPricingType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsUpdate(
    id: '',
    carrier: 'acme-parcel', // optional
    carrierId: '8a4d1c7e-2b93-4f61-b0d2-6c5a9e3f1a44', // optional
    checkoutNotes: [
        'de' => 'Lieferung nur werktags.',
        'en' => 'Delivered on working days only.'
    ], // optional
    code: 'express', // optional
    countries: ["DE","AT","CH"], // optional
    currency: 'EUR', // optional
    description: 'Delivered by the next working day when ordered before the cut-off.', // optional
    enabled: true, // optional
    etaDaysMax: 1, // optional
    etaDaysMin: 1, // optional
    externalId: 'VERSANDART-02', // optional
    externalRefs: [
        'business-central' => 'VERSANDART-02',
        'legacy_shop' => 'express'
    ], // optional
    freeAbove: 100, // optional
    labels: [
        'de' => 'Expressversand',
        'en' => 'Express delivery'
    ], // optional
    matrixAttribute: 'volume_litres', // optional
    matrixBasis: ShippingMethodMatrixBasis::WEIGHT(), // optional
    metadata: [
        'erp_key' => 'SHIP-EXPRESS',
        'printer' => 'label-2'
    ], // optional
    name: 'Express delivery', // optional
    position: 1, // optional
    price: 9.9, // optional
    pricingType: ShippingMethodPricingType::FIXED(), // optional
    quoteAbove: 31.5, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Shipping_Agent_Service' => 'NEXTDAY'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    taxClass: 'reduced' // optional
);```

## shipping-tiers-list

List a method's matrix tiers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersList(
    methodId: '',
    limit: 1, // optional
    offset: 1, // optional
    order: 'position.asc', // optional
    fromValue: 10 // optional
);```

## shipping-tiers-create

Add a matrix tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersCreate(
    methodId: '',
    fromValue: 10, // optional
    position: 1, // optional
    price: 6.9 // optional
);```

## shipping-tiers-replace

Replace a method's matrix tiers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersReplace(
    methodId: '',
    tiers: []
);```

## shipping-tiers-ladder

Generate an evenly-stepped tier table

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersLadder(
    methodId: '',
    basePrice: 4.9,
    step: 5,
    toValue: 30,
    fromValue: 0, // optional
    replace: true, // optional
    stepPrice: 2 // optional
);```

## shipping-tiers-delete

Delete a matrix tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersDelete(
    methodId: '',
    id: ''
);```

## shipping-tiers-get

Read one matrix tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersGet(
    methodId: '',
    id: ''
);```

## shipping-tiers-update

Update a matrix tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTiersUpdate(
    methodId: '',
    id: '',
    fromValue: 10, // optional
    position: 1, // optional
    price: 6.9 // optional
);```

## shipping-rates

Resolve the shipping rates for a basket

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingRates(
    at: '2026-01-01T12:00:00Z', // optional
    attributes: [
        'volume_litres' => 48
    ], // optional
    country: 'DE', // optional
    currency: 'EUR', // optional
    marketId: '3f2b6d10-7c41-4c0a-9a35-2f5b8e0d9c11', // optional
    orderValue: 129.9, // optional
    orderValueGross: 129.9, // optional
    orderValueNet: 109.16, // optional
    quantity: 3, // optional
    weight: 12.5, // optional
    weightUnit: 'kg' // optional
);```

## shipping-tax-classes-usage

Count the methods using a tax class

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingTaxClassesUsage(
    code: 'reduced'
);```
