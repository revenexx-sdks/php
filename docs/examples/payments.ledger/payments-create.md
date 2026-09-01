```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsCreate(
    amount: 49.9,
    methodCode: 'invoice',
    cartId: '', // optional
    contactId: '', // optional
    country: 'DE', // optional
    currency: 'EUR', // optional
    idempotencyKey: 'checkout-2f9c41', // optional
    metadata: [
        'order_source' => 'web'
    ], // optional
    orderRef: 'ORD-10042', // optional
    returnUrl: 'https://shop.example.com/checkout/return' // optional
);```
