```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleHistory(
    ruleId: '', // optional
    from: '2026-01-01T12:00:00Z', // optional
    to: '2026-01-01T12:00:00Z' // optional
);```
