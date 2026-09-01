```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;
use Revenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    code: 'invoice', // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    enabled: true, // optional
    provider: 'stripe' // optional
);```
