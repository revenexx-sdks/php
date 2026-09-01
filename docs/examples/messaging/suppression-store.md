```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\Reason;
use Revenexx\Enums\Scope;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionStore(
    address: '',
    channel: '',
    reason: Reason::HARDBOUNCE(),
    expiresAt: '2026-01-01T12:00:00Z', // optional
    note: '', // optional
    scope: Scope::ALL() // optional
);```
