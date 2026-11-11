```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsList(
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```
