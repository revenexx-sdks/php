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

$result = $promotionsVouchers->promotionsBatchesCreate(
    name: '',
    promotionId: '',
    alphabet: '', // optional
    metadata: [], // optional
    pattern: '', // optional
    requestRef: '', // optional
    requested: 1, // optional
    status: PromotionsBatchesCreateStatus::ACTIVE() // optional
);```
