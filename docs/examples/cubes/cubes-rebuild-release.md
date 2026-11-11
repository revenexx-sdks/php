```php
<?php

use Revenexx\Client;
use Revenexx\Services\Cubes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cubes = new Cubes($client);

$result = $cubes->cubesRebuildRelease(
    cubeId: '',
    version: '',
    commit: '', // optional
    deploymentId: '' // optional
);```
