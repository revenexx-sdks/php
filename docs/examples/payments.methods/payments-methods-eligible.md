```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsEligible(
    amount: 49.9, // optional
    country: 'DE', // optional
    currency: 'EUR' // optional
);```
