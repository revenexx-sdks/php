```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Method;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateExecution(
    functionId: '',
    async: true, // optional
    body: '', // optional
    headers: [], // optional
    method: Method::GET(), // optional
    path: '/', // optional
    scheduledAt: '' // optional
);```
