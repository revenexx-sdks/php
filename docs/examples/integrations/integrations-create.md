```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;
use Revenexx\Enums\VcsTriggerMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsCreate(
    integrationId: '',
    name: '',
    enabled: true, // optional
    installationId: '', // optional
    logging: true, // optional
    providerBranch: '', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: true, // optional
    vcsPreviewsEnabled: true, // optional
    vcsTriggerMode: VcsTriggerMode::PUSH() // optional
);```
