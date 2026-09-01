```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\CustomersContactsCreateRegistrationStatus;
use Revenexx\Enums\ContactStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsUpdate(
    id: '',
    email: 'einkauf@example.com', // optional
    firstName: 'Anna', // optional
    isPrimary: true, // optional
    jobTitle: 'Einkaufsleitung', // optional
    lastName: 'Berger', // optional
    locale: 'de-DE', // optional
    orderApprovalLimit: 25000, // optional
    organizationId: '', // optional
    phone: '+49 30 5550123', // optional
    registrationStatus: CustomersContactsCreateRegistrationStatus::PENDING(), // optional
    role: 'buyer', // optional
    status: ContactStatus::INVITED() // optional
);```
