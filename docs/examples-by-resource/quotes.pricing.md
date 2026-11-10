# quotes.pricing

## quotes-pricing-expire

Expire what has run out

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingExpire(
    data: []
);```

## quotes-pricing-remove-item

Take a position off a quote being shaped

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingRemoveItem(
    id: '',
    data: []
);```

## quotes-pricing-follow-up

Set the day the desk looks at a quote again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingFollowUp(
    id: '',
    followUpAt: '2026-10-25' // optional
);```

## quotes-pricing-add-item

Add a position to a quote being shaped

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;
use Revenexx\Enums\PriceReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingAddItem(
    id: '',
    configuration: [], // optional
    discountPercent: 5, // optional
    externalId: 'ANG-20481', // optional
    externalRefs: [
        'cpq' => 'Q-88120',
        'entitys' => '4711'
    ], // optional
    leadTimeDays: 1, // optional
    listPrice: 1088, // optional
    metadata: [], // optional
    name: '', // optional
    position: 1, // optional
    priceReason: PriceReason::VOLUME(), // optional
    productId: '', // optional
    quantity: 10, // optional
    quotedPrice: 9.99, // optional
    sku: '', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK07'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    taxRate: 19, // optional
    unit: '' // optional
);```

## quotes-pricing-item

Price one position

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;
use Revenexx\Enums\PriceReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingItem(
    id: '',
    itemId: '',
    discountPercent: 8, // optional
    leadTimeDays: 1, // optional
    priceReason: PriceReason::VOLUME(), // optional
    quantity: 12, // optional
    quotedPrice: 980 // optional
);```

## quotes-pricing-price

Put prices on a quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingPrice(
    id: '',
    externalId: 'ANG-20481', // optional
    externalRefs: [
        'cpq' => 'Q-88120',
        'entitys' => '4711'
    ], // optional
    items: [], // optional
    sellerNote: '', // optional
    senderCountry: 'DE', // optional
    shippingAmount: 9.99, // optional
    shippingTaxRate: 9.99, // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK07'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z' // optional
);```

## quotes-pricing-review

Take a request onto the desk

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;
use Revenexx\Enums\QuotesPricingReviewState;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingReview(
    id: '',
    contactId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    idBody: '', // optional
    issuedCount: 1, // optional
    items: , // optional
    journeyRef: '', // optional
    locale: '', // optional
    market: '', // optional
    metadata: , // optional
    orderId: '', // optional
    orderNumber: '', // optional
    organizationId: '', // optional
    productIds: , // optional
    reviewedCount: 1, // optional
    state: QuotesPricingReviewState::ISSUED(), // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    usedAt: '2026-01-01T12:00:00Z' // optional
);```

## quotes-pricing-remind

Remind the buyer of a sent quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingRemind(
    id: '',
    data: []
);```
