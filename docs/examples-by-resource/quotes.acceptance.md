# quotes.acceptance

## quotes-acceptance-accept

Accept a quote, whole or line by line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesAcceptance;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesAcceptance = new QuotesAcceptance($client);

$result = $quotesAcceptance->quotesAcceptanceAccept(
    id: '',
    items: [] // optional
);```

## quotes-acceptance-decline

Decline a quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesAcceptance;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesAcceptance = new QuotesAcceptance($client);

$result = $quotesAcceptance->quotesAcceptanceDecline(
    id: '',
    reason: '' // optional
);```

## quotes-acceptance-ordered

Record the order a quote produced

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesAcceptance;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesAcceptance = new QuotesAcceptance($client);

$result = $quotesAcceptance->quotesAcceptanceOrdered(
    id: '',
    orderId: '',
    itemIds: [] // optional
);```

## quotes-acceptance-reject

Refuse to quote

```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesAcceptance;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesAcceptance = new QuotesAcceptance($client);

$result = $quotesAcceptance->quotesAcceptanceReject(
    id: '',
    reason: ''
);```
