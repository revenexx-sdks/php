```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsList(
    id: '', // optional
    repCode: 'VK-04711', // optional
    organizationId: '', // optional
    role: 'field_sales', // optional
    isPrimary: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
