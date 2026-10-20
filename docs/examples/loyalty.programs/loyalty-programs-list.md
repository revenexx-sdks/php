```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    description: '', // optional
    kind: '', // optional
    holder: '', // optional
    currency: '', // optional
    period: '', // optional
    autoEnroll: '', // optional
    active: '', // optional
    memberCount: '', // optional
    externalId: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```
