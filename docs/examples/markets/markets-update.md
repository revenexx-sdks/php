```php
<?php

use Revenexx\Client;
use Revenexx\Services\Markets;
use Revenexx\Enums\MarketStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsUpdate(
    id: '',
    code: 'northwind', // optional
    currency: 'EUR', // optional
    isDefault: false, // optional
    labels: [
        'de-DE' => 'Nordwind',
        'en-GB' => 'Northwind'
    ], // optional
    name: 'Northwind', // optional
    position: 0, // optional
    status: MarketStatus::ACTIVE() // optional
);```
