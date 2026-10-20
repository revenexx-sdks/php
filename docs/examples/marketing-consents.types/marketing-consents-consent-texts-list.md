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

$result = $marketingConsentsTypes->marketingConsentsConsentTextsList(
    id: '', // optional
    subscriptionTypeId: '', // optional
    version: 1, // optional
    locale: '', // optional
    wording: '', // optional
    publishedAt: '2026-01-01T12:00:00Z', // optional
    publishedBy: '', // optional
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
