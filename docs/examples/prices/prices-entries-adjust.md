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
