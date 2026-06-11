```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Sites;
use RevenexxAPIRevenexx\Enums\Framework;
use RevenexxAPIRevenexx\Enums\Adapter;
use RevenexxAPIRevenexx\Enums\BuildRuntime;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesUpdate(
    siteId: '',
    framework: Framework::ANALOG(),
    name: '',
    adapter: Adapter::STATIC(), // optional
    buildCommand: '', // optional
    buildRuntime: BuildRuntime::NODE180(), // optional
    enabled: null, // optional
    fallbackFile: '', // optional
    installCommand: '', // optional
    installationId: '', // optional
    logging: null, // optional
    outputDirectory: '', // optional
    providerBranch: '', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: null, // optional
    specification: '', // optional
    timeout: null // optional
);```
