```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    programId: '', // optional
    code: '', // optional
    description: '', // optional
    pointsCost: '', // optional
    promotionId: '', // optional
    voucherBatchId: '', // optional
    minTierId: '', // optional
    active: '', // optional
    redeemedCount: '', // optional
    externalId: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```
