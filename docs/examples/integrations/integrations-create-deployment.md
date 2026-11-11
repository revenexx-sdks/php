```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Integrations;
use Revenexx\Enums\ReleaseMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsCreateDeployment(
    integrationId: '',
    code: InputFile::withPath('file.png'),
    activate: true, // optional
    releaseMode: ReleaseMode::DEPLOY() // optional
);```
