```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Runtime;
use Revenexx\Enums\Scopes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsUpdate(
    functionId: '',
    name: '',
    commands: 'npm install', // optional
    enabled: true, // optional
    entrypoint: 'src/main.js', // optional
    events: [], // optional
    execute: ["any"], // optional
    installationId: '', // optional
    logging: true, // optional
    providerBranch: 'main', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: true, // optional
    runtime: Runtime::NODE180(), // optional
    schedule: '0 3 * * *', // optional
    scopes: [Scopes::SESSIONSWRITE()], // optional
    specification: 's-1vcpu-512mb', // optional
    timeout: 1 // optional
);```
