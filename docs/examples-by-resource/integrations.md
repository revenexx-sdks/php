# integrations

## integrations-list

List integrations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsList(
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## integrations-create

Create integration

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

## integrations-delete

Delete integration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsDelete(
    integrationId: ''
);```

## integrations-get

Get integration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsGet(
    integrationId: ''
);```

## integrations-update

Update integration

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

$result = $integrations->integrationsUpdate(
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

## integrations-list-deployments

List deployments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsListDeployments(
    integrationId: '',
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## integrations-create-deployment

Create deployment

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

## integrations-create-vcs-deployment

Create VCS deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsCreateVcsDeployment(
    integrationId: '',
    reference: '',
    type: CubesCreateVcsDeploymentType::BRANCH(),
    activate: true // optional
);```

## integrations-get-deployment

Get deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsGetDeployment(
    integrationId: '',
    deploymentId: ''
);```

## integrations-list-releases

List integration releases

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsListReleases(
    integrationId: ''
);```

## integrations-accept-release

Accept integration release candidate

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsAcceptRelease(
    integrationId: '',
    rc: 1, // optional
    version: '' // optional
);```

## integrations-rebuild-release

Rebuild integration release

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Integrations;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$integrations = new Integrations($client);

$result = $integrations->integrationsRebuildRelease(
    integrationId: '',
    version: '',
    commit: '' // optional
);```
