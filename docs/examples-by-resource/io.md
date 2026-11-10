# io

## list-bulk-jobs

List bulk jobs for the tenant

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->listBulkJobs(
    type: , // optional
    status: , // optional
    vendor: '', // optional
    app: '', // optional
    entity: '', // optional
    limit: 1 // optional
);```

## get-bulk-job

Get a bulk job's status

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->getBulkJob(
    id: ''
);```

## list-io-entities

Catalogue of importable / exportable entities

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->listIoEntities();
```

## create-export

Export a tenant's entity to object storage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Format;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createExport(
    app: '',
    entity: '',
    vendor: '',
    format: Format::CSV(), // optional
    profileId: '' // optional
);```

## get-export-url

Signed download URL for a finished export

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->getExportUrl(
    id: ''
);```

## create-import

Register an uploaded object as an import job

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Format;
use Revenexx\Enums\Mode;
use Revenexx\Enums\CreateImportTarget;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createImport(
    app: '',
    entity: '',
    objectKey: '',
    vendor: '',
    format: Format::CSV(), // optional
    keys: [], // optional
    maxRejects: 1, // optional
    mode: Mode::UPSERT(), // optional
    profileId: '', // optional
    target: CreateImportTarget::LIVE() // optional
);```

## list-profiles

List the tenant's import/export profiles

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->listProfiles();
```

## create-profile

Create an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Direction;
use Revenexx\Enums\ApplyMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createProfile(
    app: '',
    direction: Direction::IMPORT(),
    entity: '',
    format: '',
    name: '',
    vendor: '',
    applyMode: ApplyMode::UPSERT(), // optional
    mapping: [], // optional
    markets: [], // optional
    options: [] // optional
);```

## delete-profile

Delete an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->deleteProfile(
    id: ''
);```

## show-profile

Get one import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->showProfile(
    id: ''
);```

## update-profile

Update an import/export profile

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Direction;
use Revenexx\Enums\ApplyMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->updateProfile(
    id: '',
    app: '',
    direction: Direction::IMPORT(),
    entity: '',
    format: '',
    name: '',
    vendor: '',
    applyMode: ApplyMode::UPSERT(), // optional
    mapping: [], // optional
    markets: [], // optional
    options: [] // optional
);```

## run-profile

Run a saved profile (on-click import/export)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->runProfile(
    id: '',
    markets: [], // optional
    objectKey: '' // optional
);```

## create-upload

Mint a tenant-scoped signed upload URL

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createUpload(
    extension: 'csv' // optional
);```
