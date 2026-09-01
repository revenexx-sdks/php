```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesResolve(
    items: [],
    at: '2026-03-15T09:00:00Z', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    marketId: '', // optional
    organizationId: '' // optional
);```
