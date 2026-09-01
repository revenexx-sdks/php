```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;
use Revenexx\Enums\PaymentFeeType;
use Revenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsCreate(
    code: 'invoice',
    name: 'Invoice',
    countries: ["DE","AT"], // optional
    description: 'Pay within 14 days of the invoice date.', // optional
    enabled: true, // optional
    feeAmount: 2.5, // optional
    feeCurrency: 'EUR', // optional
    feeType: PaymentFeeType::NONE(), // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    maxOrderValue: 2500, // optional
    metadata: [
        'erp_payment_key' => 'ZTRM01'
    ], // optional
    minOrderValue: 10, // optional
    position: 0, // optional
    provider: 'stripe', // optional
    providerMethod: 'card' // optional
);```
