```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;
use Revenexx\Enums\PaymentStatus;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentDunningStage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    cartId: '', // optional
    contactId: '', // optional
    status: PaymentStatus::CREATED(), // optional
    orderRef: 'ORD-10042', // optional
    methodCode: 'invoice', // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    provider: 'stripe', // optional
    dunningStage: PaymentDunningStage::NONE(), // optional
    idempotencyKey: 'checkout-2f9c41' // optional
);```
