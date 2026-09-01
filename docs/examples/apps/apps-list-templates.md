```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Runtimes;
use Revenexx\Enums\UseCases;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListTemplates(
    runtimes: [Runtimes::NODE180()], // optional
    useCases: [UseCases::STARTER()], // optional
    limit: 1, // optional
    offset: 1, // optional
    total: true // optional
);```
