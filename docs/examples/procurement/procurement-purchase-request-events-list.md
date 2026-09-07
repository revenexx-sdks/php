```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestEventsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```
