```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Payments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$payments = new Payments($client);

$result = $payments->paymentsGet(
    id: ''
);```
