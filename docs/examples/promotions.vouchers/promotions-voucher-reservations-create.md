```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsCreate(
    voucherId: '',
    contactId: '', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    organizationId: '' // optional
);```
