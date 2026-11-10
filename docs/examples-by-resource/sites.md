# sites

## sites-list

List sites

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesList(
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## sites-create

Create site

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

## sites-list-frameworks

List frameworks

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesListFrameworks();
```

## sites-list-specifications

List specifications

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesListSpecifications();
```

## sites-delete

Delete site

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesDelete(
    siteId: ''
);```

## sites-get

Get site

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesGet(
    siteId: ''
);```

## sites-update

Update site

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\Framework;
use Revenexx\Enums\Adapter;
use Revenexx\Enums\BuildRuntime;

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
    buildCommand: 'npm run build', // optional
    buildRuntime: BuildRuntime::NODE180(), // optional
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

## sites-update-site-deployment

Update site's deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesUpdateSiteDeployment(
    siteId: '',
    deploymentId: ''
);```

## sites-list-deployments

List deployments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesListDeployments(
    siteId: '',
    queries: [], // optional
    search: '', // optional
    total: true // optional
);```

## sites-create-deployment

Create deployment

```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateDeployment(
    siteId: '',
    activate: true,
    code: InputFile::withPath('file.png'),
    buildCommand: '', // optional
    installCommand: '', // optional
    outputDirectory: '' // optional
);```

## sites-create-duplicate-deployment

Create duplicate deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateDuplicateDeployment(
    siteId: '',
    deploymentId: ''
);```

## sites-create-template-deployment

Create template deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateTemplateDeployment(
    siteId: '',
    owner: '',
    reference: '',
    repository: '',
    rootDirectory: '',
    type: CubesCreateVcsDeploymentType::BRANCH(),
    activate: true // optional
);```

## sites-create-vcs-deployment

Create VCS deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\CubesCreateVcsDeploymentType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateVcsDeployment(
    siteId: '',
    reference: 'main',
    type: CubesCreateVcsDeploymentType::BRANCH(),
    activate: true // optional
);```

## sites-delete-deployment

Delete deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesDeleteDeployment(
    siteId: '',
    deploymentId: ''
);```

## sites-get-deployment

Get deployment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesGetDeployment(
    siteId: '',
    deploymentId: ''
);```

## sites-get-deployment-download

Get deployment download

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;
use Revenexx\Enums\AppsGetDeploymentDownloadType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesGetDeploymentDownload(
    siteId: '',
    deploymentId: '',
    type: AppsGetDeploymentDownloadType::SOURCE() // optional
);```

## sites-update-deployment-status

Update deployment status

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesUpdateDeploymentStatus(
    siteId: '',
    deploymentId: ''
);```

## sites-list-logs

List logs

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesListLogs(
    siteId: '',
    queries: [], // optional
    total: true // optional
);```

## sites-delete-log

Delete log

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesDeleteLog(
    siteId: '',
    logId: ''
);```

## sites-get-log

Get log

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesGetLog(
    siteId: '',
    logId: ''
);```

## sites-list-variables

List variables

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesListVariables(
    siteId: ''
);```

## sites-create-variable

Create variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesCreateVariable(
    siteId: '',
    key: '',
    value: '',
    secret: true // optional
);```

## sites-delete-variable

Delete variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesDeleteVariable(
    siteId: '',
    variableId: ''
);```

## sites-get-variable

Get variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesGetVariable(
    siteId: '',
    variableId: ''
);```

## sites-update-variable

Update variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Sites;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$sites = new Sites($client);

$result = $sites->sitesUpdateVariable(
    siteId: '',
    variableId: '',
    key: '',
    secret: true, // optional
    value: '' // optional
);```
