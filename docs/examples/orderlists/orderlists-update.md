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

$result = $orderlists->orderlistsUpdate(
    id: '',
    kind: 'shopping', // optional
    metadata: [
        'department' => 'facility',
        'erp_reference' => 'REQ-2026-0042'
    ], // optional
    name: 'Weekly office supplies', // optional
    shared: true // optional
);```
