```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Customers;
use RevenexxAPIRevenexx\Enums\AddressType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersAddressesCreate(
    city: '',
    country: '',
    street: '',
    zip: '',
    company: '', // optional
    contactId: '', // optional
    isDefault: null, // optional
    name: '', // optional
    organizationId: '', // optional
    phone: '', // optional
    region: '', // optional
    street2: '', // optional
    type: AddressType::BILLING() // optional
);```
