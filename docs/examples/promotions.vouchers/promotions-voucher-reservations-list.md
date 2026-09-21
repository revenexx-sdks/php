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

$result = $promotionsVouchers->promotionsVoucherReservationsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    voucherId: '', // optional
    contactId: '', // optional
    organizationId: '' // optional
);```
