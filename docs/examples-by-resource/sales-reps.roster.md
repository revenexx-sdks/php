# sales-reps.roster

## sales-reps-reps-list

List the field sales reps this merchant employs

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsList(
    id: '', // optional
    code: 'VK-04711', // optional
    name: 'Sabine Vogt', // optional
    email: 's.vogt@example.test', // optional
    phone: '+49 921 897 214', // optional
    territory: 'Nordbayern', // optional
    active: true, // optional
    platformUserId: 'usr_7c19f4a2e0', // optional
    hasLogin: true, // optional
    customerCount: 12, // optional
    primaryCount: 4, // optional
    externalId: 'BC-SALESPERSON-0007', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## sales-reps-reps-create

Create one rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsCreate(
    code: 'VK-04711',
    name: 'Sabine Vogt',
    active: true, // optional
    email: 's.vogt@example.test', // optional
    externalId: 'BC-SALESPERSON-0007', // optional
    externalRefs: [
        'business-central' => 'BC-SALESPERSON-0007',
        'crm' => 'CRM-88214'
    ], // optional
    metadata: [
        'cost_center' => 'VT-NORD'
    ], // optional
    phone: '+49 921 897 214', // optional
    platformUserId: 'usr_7c19f4a2e0', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK-04711'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-09-28T05:45:00.000Z', // optional
    territory: 'Nordbayern' // optional
);```

## sales-reps-reps-recount

Recount what every rep carries and leads

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsRecount();
```

## sales-reps-reps-delete

Remove one rep, if nothing still names them

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsDelete(
    id: ''
);```

## sales-reps-reps-get

Read one rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsGet(
    id: ''
);```

## sales-reps-reps-update

Edit one rep, or deactivate them

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsRoster;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsRoster = new SalesRepsRoster($client);

$result = $salesRepsRoster->salesRepsRepsUpdate(
    id: '',
    active: true, // optional
    code: 'VK-04711', // optional
    email: 's.vogt@example.test', // optional
    externalId: 'BC-SALESPERSON-0007', // optional
    externalRefs: [
        'business-central' => 'BC-SALESPERSON-0007',
        'crm' => 'CRM-88214'
    ], // optional
    metadata: [
        'cost_center' => 'VT-NORD'
    ], // optional
    name: 'Sabine Vogt', // optional
    phone: '+49 921 897 214', // optional
    platformUserId: 'usr_7c19f4a2e0', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Salesperson_Code' => 'VK-04711'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-09-28T05:45:00.000Z', // optional
    territory: 'Nordbayern' // optional
);```
