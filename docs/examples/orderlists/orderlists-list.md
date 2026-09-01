```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orderlists;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orderlists = new Orderlists($client);

$result = $orderlists->orderlistsList(
    ownerId: '', // optional
    organizationId: '', // optional
    kind: 'shopping', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
