```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;
use Revenexx\Enums\ThresholdKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersCreate(
    code: '',
    labels: ,
    programId: '',
    active: true, // optional
    bonusPercent: 9.99, // optional
    externalId: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    perks: , // optional
    pointsMultiplier: 9.99, // optional
    position: 1, // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    thresholdKind: ThresholdKind::ABSOLUTE(), // optional
    thresholdValue: 9.99 // optional
);```
