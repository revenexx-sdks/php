```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentMemberSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersUpdate(
    id: '',
    organizationId: '', // optional
    segmentId: '', // optional
    source: SegmentMemberSource::MANUAL() // optional
);```
