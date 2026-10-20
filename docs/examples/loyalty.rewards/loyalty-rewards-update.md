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

$result = $loyaltyRewards->loyaltyRewardsUpdate(
    id: '',
    active: true, // optional
    code: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    labels: , // optional
    metadata: , // optional
    minTierId: '', // optional
    pointsCost: 1, // optional
    programId: '', // optional
    promotionId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    voucherBatchId: '' // optional
);```
