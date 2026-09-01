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

$result = $markets->marketsTaxClassesCreate(
    marketId: '',
    code: 'standard',
    name: 'Standard rate',
    isDefault: true, // optional
    labels: [
        'de-DE' => 'Regelsatz',
        'en-GB' => 'Standard rate'
    ], // optional
    position: 0, // optional
    rate: 20 // optional
);```
