```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Orderlists;
use RevenexxAPIRevenexx\Enums\OrderListKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orderlists = new Orderlists($client);

$result = $orderlists->orderlistsCreate(
    name: '',
    ownerId: '',
    ownerName: '',
    items: [], // optional
    kind: OrderListKind::SHOPPING(), // optional
    metadata: [], // optional
    organizationId: '', // optional
    public: null // optional
);```
