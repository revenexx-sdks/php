```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Inventories;
use RevenexxAPIRevenexx\Enums\LocationType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventories = new Inventories($client);

$result = $inventories->inventoriesLocationsCreate(
    code: '',
    name: '',
    address: [], // optional
    enabled: null, // optional
    labels: [], // optional
    metadata: [], // optional
    priority: null, // optional
    type: LocationType::WAREHOUSE() // optional
);```
