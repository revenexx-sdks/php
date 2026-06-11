```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Apps;
use RevenexxAPIRevenexx\Enums\Type;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateTemplateDeployment(
    functionId: '',
    owner: '',
    reference: '',
    repository: '',
    rootDirectory: '',
    type: Type::COMMIT(),
    activate: null // optional
);```
