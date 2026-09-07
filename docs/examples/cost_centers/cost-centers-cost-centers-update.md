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

$result = $costCenters->costCentersCostCentersUpdate(
    id: '',
    accountableContactId: '', // optional
    active: true, // optional
    code: '', // optional
    currency: '', // optional
    metadata: [], // optional
    name: '', // optional
    organizationId: '' // optional
);```
