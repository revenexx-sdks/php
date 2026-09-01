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
