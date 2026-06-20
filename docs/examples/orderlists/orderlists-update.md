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

$result = $orderlists->orderlistsUpdate(
    id: '',
    kind: OrderListKind::SHOPPING(), // optional
    metadata: [], // optional
    name: '', // optional
    public: null // optional
);```
