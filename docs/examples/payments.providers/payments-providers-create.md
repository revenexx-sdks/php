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

$result = $paymentsProviders->paymentsProvidersCreate(
    provider: 'stripe',
    credentials: [], // optional
    enabled: true, // optional
    name: 'Stripe', // optional
    options: [
        'capture_method' => 'automatic',
        'logo_url' => 'https://apps.example.com/payments/logos/stripe',
        'three_ds' => false
    ], // optional
    testMode: true, // optional
    webhookSecret: '' // optional
);```
