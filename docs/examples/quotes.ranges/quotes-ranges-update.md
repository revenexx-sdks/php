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
    code: '', // optional
    counter: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    idBody: '', // optional
    padding: 1, // optional
    positionStep: 1, // optional
    prefix: '', // optional
    step: 1, // optional
    suffix: '', // optional
    tenantId: '', // optional
    updatedAt: '2026-01-01T12:00:00Z' // optional
);```
