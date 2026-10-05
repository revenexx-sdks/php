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
