```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersLeads;
use Revenexx\Enums\LeadSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersLeads = new CustomersLeads($client);

$result = $customersLeads->customersContactsLifecycle(
    contactId: '',
    stage: 'mql',
    actor: '', // optional
    leadSource: LeadSource::FORM(), // optional
    leadSourceRef: '', // optional
    reason: 'Downloaded the catalogue twice' // optional
);```
