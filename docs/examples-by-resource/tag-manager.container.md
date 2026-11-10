# tag-manager.container

## tag-manager-container-checks-list

List container checks

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerChecksList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    containerVersionId: '', // optional
    containerVersionNumber: 1, // optional
    policyVersionNumber: 1, // optional
    reason: '', // optional
    ok: true, // optional
    checkedAt: '' // optional
);```

## tag-manager-container-checks-get

Read one container check

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerChecksGet(
    id: ''
);```

## tag-manager-container-versions-list

List container versions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerVersionsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    number: 1, // optional
    market: '', // optional
    sha256: '', // optional
    policyVersionNumber: 1, // optional
    policySha256: '', // optional
    rolledBackFrom: 1, // optional
    note: '', // optional
    publishedBy: '', // optional
    publishedAt: '' // optional
);```

## tag-manager-container-versions-get

Read one container version

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerVersionsGet(
    id: ''
);```

## tag-manager-container-publish

Publish the container

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerPublish(
    note: '' // optional
);```

## tag-manager-container-recheck

Re-check the live containers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerRecheck(
    data: []
);```

## tag-manager-container-rollback

Publish an old version again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerRollback(
    version: 1
);```

## tag-manager-container-status

Show the live containers and their latest check

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerStatus();
```

## tag-manager-container-validate

Validate the draft container against the consent policy

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerContainerValidate(
    data: []
);```

## tag-manager-preview-create

Mint a preview token for the draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerContainer;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerContainer = new TagManagerContainer($client);

$result = $tagManagerContainer->tagManagerPreviewCreate(
    ttlMinutes: 1 // optional
);```
