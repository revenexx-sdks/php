```php
<?php

use Revenexx\Client;
use Revenexx\Services\CostCenters;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$costCenters = new CostCenters($client);

$result = $costCenters->costCentersCommit(
    allocations: [],
    contactId: '', // optional
    currency: '', // optional
    dryRun: true, // optional
    note: '', // optional
    orderId: '' // optional
);```
