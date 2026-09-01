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

$result = $orderlists->orderlistsCreate(
    name: 'Weekly office supplies',
    ownerId: '',
    ownerName: 'Jamie Rivera',
    items: [], // optional
    kind: 'shopping', // optional
    metadata: [
        'department' => 'facility',
        'erp_reference' => 'REQ-2026-0042'
    ], // optional
    organizationId: '', // optional
    shared: true // optional
);```
