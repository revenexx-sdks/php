```php
<?php

use Revenexx\Client;
use Revenexx\Services\Customers;
use Revenexx\Enums\Factor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAuthMfaChallenge(
    userId: '',
    factor: Factor::EMAIL() // optional
);```
