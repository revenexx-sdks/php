```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\Source;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersList(
    id: '', // optional
    segmentId: '', // optional
    organizationId: '', // optional
    source: Source::MANUAL(), // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
