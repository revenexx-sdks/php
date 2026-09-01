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

$result = $markets->marketsClone(
    id: 'northwind',
    code: 'northwind-b2b',
    copyCurrencies: true, // optional
    copyLocales: true, // optional
    copyTaxClasses: true, // optional
    currency: 'EUR', // optional
    name: 'Northwind B2B', // optional
    status: MarketStatus::ACTIVE() // optional
);```
