```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Payments;
use RevenexxAPIRevenexx\Enums\PaymentFeeType;
use RevenexxAPIRevenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$payments = new Payments($client);

$result = $payments->paymentsMethodsCreate(
    code: '',
    name: '',
    countries: [], // optional
    description: '', // optional
    enabled: null, // optional
    feeAmount: null, // optional
    feeCurrency: '', // optional
    feeType: PaymentFeeType::NONE(), // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    labels: [], // optional
    maxOrderValue: null, // optional
    metadata: [], // optional
    minOrderValue: null, // optional
    position: null, // optional
    provider: '', // optional
    providerMethod: '' // optional
);```
