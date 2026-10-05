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
