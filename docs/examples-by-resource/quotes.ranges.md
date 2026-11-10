# quotes.ranges

## quotes-ranges-list

List number ranges

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    active: true // optional
);```

## quotes-ranges-create

Create a number range

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesCreate(
    code: '',
    active: true, // optional
    counter: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    id: '', // optional
    labels: [], // optional
    padding: 1, // optional
    positionStep: 1, // optional
    prefix: '', // optional
    step: 1, // optional
    suffix: '', // optional
    tenantId: '', // optional
    title: '', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```

## quotes-ranges-defaults

Seed the standard number range

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;
use Revenexx\Enums\PagesSeedMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesDefaults(
    library: [], // optional
    menus: [], // optional
    mode: PagesSeedMode::FILL(), // optional
    pages: [], // optional
    settings: [] // optional
);```

## quotes-ranges-delete

Remove a number range

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesDelete(
    id: ''
);```

## quotes-ranges-get

Read one number range

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesGet(
    id: ''
);```

## quotes-ranges-update

Change a number range

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesRanges;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesRanges = new QuotesRanges($client);

$result = $quotesRanges->quotesRangesUpdate(
    id: '',
    active: true, // optional
    code: '', // optional
    counter: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    idBody: '', // optional
    labels: [], // optional
    padding: 1, // optional
    positionStep: 1, // optional
    prefix: '', // optional
    step: 1, // optional
    suffix: '', // optional
    tenantId: '', // optional
    title: '', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
