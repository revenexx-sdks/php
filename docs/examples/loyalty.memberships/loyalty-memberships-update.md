```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyMemberships;
use Revenexx\Enums\LoyaltyMembershipsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyMemberships = new LoyaltyMemberships($client);

$result = $loyaltyMemberships->loyaltyMembershipsUpdate(
    id: '',
    contactId: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    market: '', // optional
    metadata: , // optional
    organizationId: '', // optional
    programId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: LoyaltyMembershipsCreateStatus::ACTIVE() // optional
);```
