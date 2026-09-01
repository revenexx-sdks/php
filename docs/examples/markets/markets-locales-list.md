```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsLocalesList(
    marketId: '',
    id: '', // optional
    code: 'de-DE', // optional
    language: 'de', // optional
    country: 'DE', // optional
    isDefault: true, // optional
    position: 0, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'position.asc' // optional
);```
