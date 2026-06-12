```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Customers;
use RevenexxAPIRevenexx\Enums\OrganizationStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersOrganizationsCreate(
    name: '',
    settings: [], // optional
    status: OrganizationStatus::ACTIVE(), // optional
    vatId: '' // optional
);```
