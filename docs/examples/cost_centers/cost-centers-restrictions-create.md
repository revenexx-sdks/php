```php
<?php

use Revenexx\Client;
use Revenexx\Services\CostCenters;
use Revenexx\Enums\CostCentersRestrictionsCreateType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$costCenters = new CostCenters($client);

$result = $costCenters->costCentersRestrictionsCreate(
    costCenterId: '',
    parameters: [],
    type: CostCentersRestrictionsCreateType::CONTACT(),
    active: true // optional
);```
