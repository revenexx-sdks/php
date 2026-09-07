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

$result = $costCenters->costCentersBudgetsAdjust(
    id: '',
    actor: '',
    amount: 9.99, // optional
    currency: '', // optional
    note: '', // optional
    target: 9.99 // optional
);```
