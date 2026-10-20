```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Holder;
use Revenexx\Enums\Period;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsCreate(
    code: '',
    kind: LoyaltyProgramsCreateKind::POINTS(),
    labels: ,
    active: true, // optional
    autoEnroll: true, // optional
    currency: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    holder: Holder::CONTACT(), // optional
    metadata: , // optional
    period: Period::CALENDARYEAR(), // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
