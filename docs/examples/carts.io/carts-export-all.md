```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartExportFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsExportAll(
    contactId: '', // optional
    createdFrom: '2026-09-01', // optional
    createdTo: '2026-09-30', // optional
    cursor: '', // optional
    format: CartExportFormat::JSON(), // optional
    limit: 1, // optional
    market: 'de', // optional
    profileId: '', // optional
    status:  // optional
);```
