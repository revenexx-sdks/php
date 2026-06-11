```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Apps;
use RevenexxAPIRevenexx\Enums\Runtime;
use RevenexxAPIRevenexx\Enums\Scopes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreate(
    functionId: '',
    name: '',
    runtime: Runtime::NODE180(),
    commands: '', // optional
    enabled: null, // optional
    entrypoint: '', // optional
    events: [], // optional
    execute: [], // optional
    installationId: '', // optional
    logging: null, // optional
    providerBranch: '', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: null, // optional
    schedule: '', // optional
    scopes: [Scopes::SESSIONSWRITE()], // optional
    specification: '', // optional
    timeout: null // optional
);```
