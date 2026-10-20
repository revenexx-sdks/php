```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsCreate(
    code: '',
    labels: ,
    pointsCost: 1,
    programId: '',
    promotionId: '',
    active: true, // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    minTierId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    voucherBatchId: '' // optional
);```
