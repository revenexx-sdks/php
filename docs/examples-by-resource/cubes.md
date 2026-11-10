# cubes

## cubes-list

List Cubes

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

$result = $cubes->cubesList(
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## cubes-create

Create Cube

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Cubes;
use Revenexx\Enums\VcsTriggerMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cubes = new Cubes($client);

$result = $cubes->cubesCreate(
    cubeId: '',
    name: '',
    enabled: true, // optional
    installationId: '', // optional
    logging: true, // optional
    providerBranch: '', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: true, // optional
    vcsTriggerMode: VcsTriggerMode::PUSH() // optional
);```

## cubes-delete

Delete Cube

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

$result = $cubes->cubesDelete(
    cubeId: ''
);```

## cubes-get

Get Cube

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

$result = $cubes->cubesGet(
    cubeId: ''
);```

## cubes-update

Update Cube

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Cubes;
use Revenexx\Enums\VcsTriggerMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cubes = new Cubes($client);

$result = $cubes->cubesUpdate(
    cubeId: '',
    name: '',
    enabled: true, // optional
    installationId: '', // optional
    logging: true, // optional
    providerBranch: '', // optional
    providerRepositoryId: '', // optional
    providerRootDirectory: '', // optional
    providerSilentMode: true, // optional
    vcsTriggerMode: VcsTriggerMode::PUSH() // optional
);```

## cubes-list-deployments

List deployments

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

$result = $cubes->cubesListDeployments(
    cubeId: '',
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## cubes-create-deployment

Create deployment

```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Cubes;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cubes = new Cubes($client);

$result = $cubes->cubesCreateDeployment(
    cubeId: '',
    code: InputFile::withPath('file.png'),
    activate: true // optional
);```

## cubes-create-vcs-deployment

Create VCS deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Cubes;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cubes = new Cubes($client);

$result = $cubes->cubesCreateVcsDeployment(
    cubeId: '',
    reference: '',
    type: CubesCreateVcsDeploymentType::BRANCH(),
    activate: true // optional
);```

## cubes-get-deployment

Get deployment

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

$result = $cubes->cubesGetDeployment(
    cubeId: '',
    deploymentId: ''
);```
