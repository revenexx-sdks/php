```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\BuildRuntime;
use Revenexx\Enums\Framework;
use Revenexx\Enums\Adapter;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreate(
    buildRuntime: BuildRuntime::NODE180(),
    framework: Framework::ANALOG(),
    name: '',
    siteId: '',
    adapter: Adapter::STATIC(), // optional
    buildCommand: 'npm run build', // optional
    enabled: true, // optional
    fallbackFile: 'index.html', // optional
    installCommand: 'npm install', // optional
    installationId: '', // optional
    logging: true, // optional
    outputDirectory: '', // optional
    providerBranch: 'main', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: true, // optional
    specification: 's-1vcpu-512mb', // optional
    timeout: 1 // optional
);```
