```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesList(
    id: '', // optional
    code: '', // optional
    requiresDoi: true, // optional
    allowsExistingCustomer: true, // optional
    position: 1, // optional
    archivedAt: '2026-01-01T12:00:00Z', // optional
    externalId: '', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    trashed: Trashed::EXCLUDE(), // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
