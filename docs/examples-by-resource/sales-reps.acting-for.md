# sales-reps.acting-for

## sales-reps-impersonations-list

List every occasion a rep acted for a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsActingFor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsActingFor = new SalesRepsActingFor($client);

$result = $salesRepsActingFor->salesRepsImpersonationsList(
    id: '', // optional
    repCode: 'VK-04711', // optional
    organizationId: '', // optional
    contactId: '', // optional
    startedAt: '2026-01-01T12:00:00Z', // optional
    endedAt: '2026-01-01T12:00:00Z', // optional
    reason: 'placed a telephone order', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## sales-reps-impersonations-create

Record that a rep acted for a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsActingFor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsActingFor = new SalesRepsActingFor($client);

$result = $salesRepsActingFor->salesRepsImpersonationsCreate(
    contactId: '',
    organizationId: '',
    repCode: 'VK-04711',
    endedAt: '2026-09-30T09:48:10.000Z', // optional
    reason: 'placed a telephone order', // optional
    startedAt: '2026-09-30T09:12:44.000Z' // optional
);```

## sales-reps-impersonations-delete

Erase one entry from the log

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsActingFor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsActingFor = new SalesRepsActingFor($client);

$result = $salesRepsActingFor->salesRepsImpersonationsDelete(
    id: ''
);```

## sales-reps-impersonations-get

Read one occasion a rep acted for a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsActingFor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsActingFor = new SalesRepsActingFor($client);

$result = $salesRepsActingFor->salesRepsImpersonationsGet(
    id: ''
);```
