```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    provider: 'stripe', // optional
    enabled: true, // optional
    testMode: true // optional
);```
