```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\Scope;
use Revenexx\Enums\Reason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionIndex(
    channel: '', // optional
    scope: Scope::ALL(), // optional
    reason: Reason::HARDBOUNCE(), // optional
    address: '', // optional
    limit: 1 // optional
);```
