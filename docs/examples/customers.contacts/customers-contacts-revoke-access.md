```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\Reason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsRevokeAccess(
    contactId: '',
    reason: Reason::LEFTCOMPANY(),
    actor: '', // optional
    note: '' // optional
);```
