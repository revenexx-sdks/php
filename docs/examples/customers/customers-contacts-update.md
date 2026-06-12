```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Customers;
use RevenexxAPIRevenexx\Enums\ContactRole;
use RevenexxAPIRevenexx\Enums\ContactStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customers = new Customers($client);

$result = $customers->customersContactsUpdate(
    id: '',
    email: '', // optional
    firstName: '', // optional
    isPrimary: null, // optional
    lastName: '', // optional
    locale: '', // optional
    organizationId: '', // optional
    phone: '', // optional
    role: ContactRole::BUYER(), // optional
    status: ContactStatus::INVITED() // optional
);```
