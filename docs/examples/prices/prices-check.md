```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\Lang;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesCheck(
    at: '2026-10-18T12:00:00Z', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    lang: Lang::DE(), // optional
    market: 'de', // optional
    organizationId: '', // optional
    productId: '', // optional
    quantity: 10, // optional
    segmentCodes: ["dealer"], // optional
    sku: 'ART-1001' // optional
);```
