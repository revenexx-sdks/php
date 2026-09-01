```php
<?php

use Revenexx\Client;
use Revenexx\Services\InventoriesReservations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$inventoriesReservations = new InventoriesReservations($client);

$result = $inventoriesReservations->inventoriesReservationsGet(
    id: ''
);```
