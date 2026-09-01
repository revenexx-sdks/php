```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersOrganizations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersOrganizations = new CustomersOrganizations($client);

$result = $customersOrganizations->customersOrganizationMetricsRefresh(
    asOf: '2026-01-01T12:00:00Z', // optional
    cursor: '', // optional
    organizationIds: [] // optional
);```
