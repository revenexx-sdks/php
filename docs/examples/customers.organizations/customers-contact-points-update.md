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

$result = $customersOrganizations->customersContactPointsUpdate(
    id: '',
    addressId: '', // optional
    email: 'rechnungen@example.com', // optional
    externalId: 'DSP-000047', // optional
    isPrimary: true, // optional
    kind: 'invoice', // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    position: 1 // optional
);```
