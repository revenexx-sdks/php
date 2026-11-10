# customers.leads

## customers-consent-mirror-run

Bring the marketing consent flag up to date

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersLeads;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersLeads = new CustomersLeads($client);

$result = $customersLeads->customersConsentMirrorRun();
```

## customers-contacts-handover

Hand a lead to a sales rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersLeads;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersLeads = new CustomersLeads($client);

$result = $customersLeads->customersContactsHandover(
    contactId: '',
    ownerId: 'AD-07',
    actor: '', // optional
    dueAt: '2026-01-01T12:00:00Z', // optional
    note: '', // optional
    subject: '' // optional
);```

## customers-contacts-lifecycle

Move a person to another funnel stage

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
