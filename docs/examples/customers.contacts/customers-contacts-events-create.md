```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersContacts;
use Revenexx\Enums\ContactActivityKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersContacts = new CustomersContacts($client);

$result = $customersContacts->customersContactsEventsCreate(
    contactId: '',
    subject: 'Called about the annual requirement',
    actor: 'vertrieb@example.com', // optional
    kind: ContactActivityKind::NOTE(), // optional
    note: 'Asked for a quote on the annual bolt requirement; call back in week 34.', // optional
    occurredAt: '2026-01-01T12:00:00Z' // optional
);```
