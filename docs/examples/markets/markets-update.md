```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Markets;
use RevenexxAPIRevenexx\Enums\MarketStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$markets = new Markets($client);

$result = $markets->marketsUpdate(
    id: '',
    code: '', // optional
    currency: '', // optional
    isDefault: null, // optional
    labels: [], // optional
    name: '', // optional
    position: null, // optional
    status: MarketStatus::ACTIVE() // optional
);```
