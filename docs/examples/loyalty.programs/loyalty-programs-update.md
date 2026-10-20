```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\Holder;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Period;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsUpdate(
    id: '',
    active: true, // optional
    autoEnroll: true, // optional
    code: '', // optional
    currency: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    holder: Holder::CONTACT(), // optional
    kind: LoyaltyProgramsCreateKind::POINTS(), // optional
    labels: , // optional
    metadata: , // optional
    period: Period::CALENDARYEAR(), // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
