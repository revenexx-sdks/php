# apps

## apps-list

List apps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsList(
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## apps-create

Create app

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

$result = $apps->appsCreate(
    functionId: '',
    name: '',
    runtime: Runtime::NODE180(),
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
    schedule: '0 3 * * *', // optional
    scopes: [Scopes::SESSIONSWRITE()], // optional
    specification: 's-1vcpu-512mb', // optional
    timeout: 1 // optional
);```

## apps-list-marketplace

List marketplace apps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListMarketplace(
    search: '', // optional
    perPage: 1, // optional
    page: 1 // optional
);```

## apps-install-from-marketplace

Install app from marketplace

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsInstallFromMarketplace(
    name: '',
    owner: ''
);```

## apps-list-runtimes

List app runtimes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListRuntimes();
```

## apps-list-specifications

List app specifications

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListSpecifications();
```

## apps-list-templates

List app templates

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Runtimes;
use Revenexx\Enums\UseCases;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListTemplates(
    runtimes: [Runtimes::NODE180()], // optional
    useCases: [UseCases::STARTER()], // optional
    limit: 1, // optional
    offset: 1, // optional
    total: true // optional
);```

## apps-get-template

Get app template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetTemplate(
    templateId: ''
);```

## apps-list-usage

List apps usage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Range;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListUsage(
    range: Range::_24H() // optional
);```

## apps-delete

Delete app

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsDelete(
    functionId: ''
);```

## apps-get

Get app

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGet(
    functionId: ''
);```

## apps-update

Update app

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

## apps-update-deployment

Update app active deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsUpdateDeployment(
    functionId: '',
    deploymentId: ''
);```

## apps-list-deployments

List app deployments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListDeployments(
    functionId: '',
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## apps-create-deployment

Create app deployment

```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateDeployment(
    functionId: '',
    activate: true,
    code: InputFile::withPath('file.png'),
    commands: '', // optional
    entrypoint: '' // optional
);```

## apps-create-duplicate-deployment

Create app duplicate deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateDuplicateDeployment(
    functionId: '',
    deploymentId: '',
    buildId: '' // optional
);```

## apps-create-template-deployment

Create app template deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Type;

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
    activate: true // optional
);```

## apps-create-vcs-deployment

Create app VCS deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\AppsCreateVcsDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateVcsDeployment(
    functionId: '',
    reference: 'main',
    type: AppsCreateVcsDeploymentType::BRANCH(),
    activate: true // optional
);```

## apps-delete-deployment

Delete app deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsDeleteDeployment(
    functionId: '',
    deploymentId: ''
);```

## apps-get-deployment

Get app deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetDeployment(
    functionId: '',
    deploymentId: ''
);```

## apps-get-deployment-download

Get app deployment download

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\AppsGetDeploymentDownloadType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetDeploymentDownload(
    functionId: '',
    deploymentId: '',
    type: AppsGetDeploymentDownloadType::SOURCE() // optional
);```

## apps-update-deployment-status

Update app deployment status

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsUpdateDeploymentStatus(
    functionId: '',
    deploymentId: ''
);```

## apps-list-executions

List app executions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListExecutions(
    functionId: '',
    queries: [], // optional
    total: true // optional
);```

## apps-create-execution

Create app execution

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Method;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateExecution(
    functionId: '',
    async: true, // optional
    body: '', // optional
    headers: [], // optional
    method: Method::GET(), // optional
    path: '/', // optional
    scheduledAt: '' // optional
);```

## apps-delete-execution

Delete app execution

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsDeleteExecution(
    functionId: '',
    executionId: ''
);```

## apps-get-execution

Get app execution

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetExecution(
    functionId: '',
    executionId: ''
);```

## apps-get-marketplace-status

Get app marketplace status

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetMarketplaceStatus(
    functionId: ''
);```

## apps-unpublish

Unpublish app from Marketplace

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsUnpublish(
    functionId: ''
);```

## apps-publish

Publish app to Marketplace

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsPublish(
    functionId: ''
);```

## apps-get-usage

Get app usage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;
use Revenexx\Enums\Range;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetUsage(
    functionId: '',
    range: Range::_24H() // optional
);```

## apps-list-variables

List app variables

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsListVariables(
    functionId: ''
);```

## apps-create-variable

Create app variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsCreateVariable(
    functionId: '',
    key: '',
    value: '',
    secret: true // optional
);```

## apps-delete-variable

Delete app variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsDeleteVariable(
    functionId: '',
    variableId: ''
);```

## apps-get-variable

Get app variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsGetVariable(
    functionId: '',
    variableId: ''
);```

## apps-update-variable

Update app variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Apps;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$apps = new Apps($client);

$result = $apps->appsUpdateVariable(
    functionId: '',
    variableId: '',
    key: '',
    secret: true, // optional
    value: '' // optional
);```
