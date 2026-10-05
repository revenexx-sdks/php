```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesList(
    id: '', // optional
    code: 'field_sales', // optional
    title: 'Field sales', // optional
    description: 'Visits the customer. The rep who travels to the account.', // optional
    isDefault: true, // optional
    tone: Tone::NEUTRAL(), // optional
    position: 1, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
