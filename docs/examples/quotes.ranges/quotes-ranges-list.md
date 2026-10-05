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
    order: 'created_at.desc' // optional
);```
