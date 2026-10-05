```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsActingFor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsActingFor = new SalesRepsActingFor($client);

$result = $salesRepsActingFor->salesRepsImpersonationsList(
    id: '', // optional
    repCode: 'VK-04711', // optional
    organizationId: '', // optional
    contactId: '', // optional
    startedAt: '2026-01-01T12:00:00Z', // optional
    endedAt: '2026-01-01T12:00:00Z', // optional
    reason: 'placed a telephone order', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
