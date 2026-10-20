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

$result = $loyaltyRewards->loyaltyRewardsRedemptionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    membershipId: '', // optional
    rewardId: '', // optional
    points: '', // optional
    voucherCode: '', // optional
    ledgerEntryId: '', // optional
    requestKey: '', // optional
    state: '', // optional
    usedOrderId: '' // optional
);```
