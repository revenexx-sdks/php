# storage

## asset-index

List assets

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetIndex(
    search: '' // optional
);```

## asset-store

Upload an asset

```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Storage;
use Revenexx\Enums\AssetStoreVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetStore(
    file: InputFile::withPath('file.png'),
    altText: '', // optional
    description: '', // optional
    displayName: '', // optional
    folderId: '', // optional
    keepArchive: true, // optional
    tags: [], // optional
    unpack: true, // optional
    visibility: AssetStoreVisibility::PUBLIC() // optional
);```

## asset-bulk

Upload several assets

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetBulk(
    folderId: '', // optional
    visibility: '' // optional
);```

## asset-destroy

Delete an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetDestroy(
    id: ''
);```

## asset-show

Get an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetShow(
    id: ''
);```

## asset-update

Update an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;
use Revenexx\Enums\AssetStoreVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetUpdate(
    id: '',
    altText: '', // optional
    description: '', // optional
    displayName: '', // optional
    folderId: '', // optional
    name: '', // optional
    tags: [], // optional
    visibility: AssetStoreVisibility::PUBLIC() // optional
);```

## asset-download

Download an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetDownload(
    id: ''
);```

## asset-permanent

Permanently delete an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetPermanent(
    id: ''
);```

## asset-reprocess

Reprocess an asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetReprocess(
    id: ''
);```

## asset-restore

Restore a deleted asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetRestore(
    id: ''
);```

## asset-sign

Create a signed asset URL

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetSign(
    id: '',
    ttlSeconds: 1 // optional
);```

## asset-unpack

Unpack an archive asset

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetUnpack(
    id: '',
    keepArchive: true, // optional
    targetFolderId: '' // optional
);```

## folder-index

List folders

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->folderIndex();
```

## folder-store

Create a folder

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->folderStore(
    name: '',
    parentId: '' // optional
);```

## folder-destroy

Delete a folder

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->folderDestroy(
    id: '',
    recursive: true // optional
);```

## folder-show

Get a folder

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->folderShow(
    id: ''
);```

## folder-update

Rename or move a folder

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->folderUpdate(
    id: '',
    name: '', // optional
    parentId: '' // optional
);```

## sync-rule-index

List SFTP sync rules

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleIndex();
```

## sync-rule-store

Create an SFTP sync rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleStore(
    sftpAccountId: '',
    sourcePath: '/uploads',
    enabled: true, // optional
    options: [], // optional
    schedule: '0 3 * * *', // optional
    targetFolderId: '' // optional
);```

## sync-rule-destroy

Delete an SFTP sync rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleDestroy(
    id: ''
);```

## sync-rule-show

Get an SFTP sync rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleShow(
    id: ''
);```

## sync-rule-update

Update an SFTP sync rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleUpdate(
    id: '',
    enabled: true, // optional
    options: [], // optional
    schedule: '0 3 * * *', // optional
    sftpAccountId: '', // optional
    sourcePath: '/uploads', // optional
    targetFolderId: '' // optional
);```

## sync-rule-run

Run an SFTP sync rule now

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleRun(
    id: ''
);```

## sync-rule-run-protocol

Get an SFTP sync run protocol

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleRunProtocol(
    id: '',
    runId: ''
);```

## sync-rule-history

List SFTP sync history

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleHistory(
    ruleId: '', // optional
    from: '2026-01-01T12:00:00Z', // optional
    to: '2026-01-01T12:00:00Z' // optional
);```

## tenant-stats

Get storage statistics

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->tenantStats();
```

## tenant-usage

Get storage usage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->tenantUsage();
```
