```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersCreate(
    code: '',
    promotionId: '',
    batchId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    metadata: [], // optional
    organizationId: '', // optional
    reservationLimit: 1, // optional
    reservationRequired: true, // optional
    residualValue: 9.99, // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: PromotionsBatchesCreateStatus::ACTIVE(), // optional
    usageLimit: 1 // optional
);```
