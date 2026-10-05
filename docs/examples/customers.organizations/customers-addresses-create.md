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

$result = $customersOrganizations->customersAddressesCreate(
    city: 'Berlin',
    country: 'DE',
    zip: '10115',
    company: 'Beispiel Industrietechnik GmbH', // optional
    contactId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    externalId: 'R_ADD000005', // optional
    isDefault: true, // optional
    name: 'Anna Berger', // optional
    name2: 'Abteilung Einkauf', // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    region: 'Berlin', // optional
    street: 'Musterstraße 12', // optional
    street2: 'Gebäude C, 2. OG', // optional
    type: 'shipping' // optional
);```
