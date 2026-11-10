# ads.syncs

## ads-syncs-list

List audience syncs

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    adAccountId: '', // optional
    audienceId: '', // optional
    audienceCode: '', // optional
    subscriptionType: '', // optional
    externalAudienceId: '', // optional
    state: '', // optional
    active: '', // optional
    stale: '', // optional
    memberCount: '', // optional
    matchedCount: '', // optional
    uploadedCount: '', // optional
    skippedCount: '', // optional
    lastError: '' // optional
);```

## ads-syncs-create

Sync an audience to an ad account

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsCreate(
    adAccountId: '',
    audienceId: '',
    subscriptionType: '',
    active: true, // optional
    audienceCode: '', // optional
    externalAudienceId: '', // optional
    metadata:  // optional
);```

## ads-syncs-delete

Stop syncing an audience

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsDelete(
    id: ''
);```

## ads-syncs-get

Read one audience sync

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsGet(
    id: ''
);```

## ads-syncs-update

Switch a sync on or off or change its consent type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsUpdate(
    id: '',
    active: true, // optional
    adAccountId: '', // optional
    audienceCode: '', // optional
    audienceId: '', // optional
    externalAudienceId: '', // optional
    metadata: , // optional
    subscriptionType: '' // optional
);```

## ads-syncs-members

Read one page of hashed members for the upload

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsMembers(
    id: '',
    cursor: '', // optional
    limit: 1 // optional
);```

## ads-syncs-request

Request an upload of the audience now

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsRequest(
    id: '',
    data: []
);```

## ads-syncs-result

Report what an upload achieved

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsResult(
    id: '',
    error: '', // optional
    externalAudienceId: '', // optional
    matchedCount: 1, // optional
    memberCount: 1, // optional
    ok: true, // optional
    skippedCount: 1, // optional
    uploadedCount: 1 // optional
);```
