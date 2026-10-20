```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesLocations;
use Revenexx\Enums\LocationType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesLocations = new InventoriesLocations($client);

$result = $inventoriesLocations->inventoriesLocationsCreate(
    code: 'main',
    name: 'Main warehouse',
    address: [
        'address_line1' => 'Industriering 4',
        'country_code' => 'DE',
        'formatted' => [
            '0' => 'Industriering 4',
            '1' => '90402 Nuremberg'
        ],
        'locality' => 'Nuremberg',
        'postal_code' => '90402'
    ], // optional
    enabled: true, // optional
    labels: [
        'de' => 'Hauptlager',
        'en' => 'Main warehouse'
    ], // optional
    metadata: [
        'erp_site' => '1000'
    ], // optional
    priority: 0, // optional
    type: LocationType::WAREHOUSE() // optional
);```
