# quotes.quotes

## quotes-quotes-open-items

List the open quote positions that name a product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesOpenItems(
    productId: '',
    status: 'requested,in_review,quoted,partially_accepted', // optional
    limit: 50, // optional
    offset: 0 // optional
);```

## quotes-quotes-list

List quotes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\Origin;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    status: '', // optional
    origin: Origin::BUYER(), // optional
    organizationId: '', // optional
    contactId: '', // optional
    ownerId: '', // optional
    cartId: '', // optional
    number: '', // optional
    externalId: 'ANG-20481' // optional
);```

## quotes-quotes-create

Open a quote at a desk

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesCreate(
    currency: 'EUR',
    items: [],
    billingAddress: [], // optional
    buyer: [], // optional
    contactId: '', // optional
    externalId: 'ANG-20481', // optional
    externalRefs: [
        'cpq' => 'Q-88120',
        'entitys' => '4711'
    ], // optional
    metadata: [], // optional
    organizationId: '', // optional
    ownerId: '', // optional
    reason: '', // optional
    sellerNote: '', // optional
    shippingAddress: [], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK07'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## quotes-quotes-get

Read one quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesGet(
    id: ''
);```

## quotes-quotes-copy

Copy a quote as a new one

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\QuotesQuotesCopyParts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesCopy(
    id: '',
    parts: [QuotesQuotesCopyParts::ITEMS()] // optional
);```

## quotes-quotes-detail

Read a quote with everything on it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\Audience;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesDetail(
    id: '',
    audience: Audience::CUSTOMER() // optional
);```

## quotes-quotes-items

List the positions of a quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesItems(
    id: ''
);```

## quotes-quotes-request

Ask for a quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesRequest(
    currency: 'EUR',
    items: [],
    billingAddress: [], // optional
    buyer: [], // optional
    buyerNote: '', // optional
    cartId: '', // optional
    contactId: '', // optional
    externalId: 'ANG-20481', // optional
    externalRefs: [
        'cpq' => 'Q-88120',
        'entitys' => '4711'
    ], // optional
    metadata: [], // optional
    organizationId: '', // optional
    reason: '', // optional
    shippingAddress: [], // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK07'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## quotes-quotes-vocabularies

Read the closed lists this app enforces

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesVocabularies();
```

## quotes-quotes-vocabulary

Read one list with the words and colours a screen shows

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesQuotes;
use Revenexx\Enums\QuotesQuotesVocabularyName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesQuotes = new QuotesQuotes($client);

$result = $quotesQuotes->quotesQuotesVocabulary(
    name: QuotesQuotesVocabularyName::ACTOR()
);```
