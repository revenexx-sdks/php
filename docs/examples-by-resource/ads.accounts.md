# ads.accounts

## ads-accounts-list

List ad accounts

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    platform: '', // optional
    externalAccountId: '', // optional
    name: '', // optional
    connectionRef: '', // optional
    status: '', // optional
    currency: '', // optional
    lastError: '', // optional
    clicksTotal: '', // optional
    conversionsTotal: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```

## ads-accounts-create

Add an ad account

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Platform;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsCreate(
    externalAccountId: '',
    name: '',
    platform: Platform::META(),
    clicksTotal: 1, // optional
    connectionRef: '', // optional
    conversionValueTotal: 9.99, // optional
    conversionsTotal: 1, // optional
    currency: '', // optional
    externalRefs: , // optional
    figuresAt: '2026-01-01T12:00:00Z', // optional
    metadata: , // optional
    roas: 9.99, // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    spendTotal: 9.99 // optional
);```

## ads-accounts-empty-trash

Empty the ad account trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsEmptyTrash();
```

## ads-accounts-purge

Delete the ad accounts that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsPurge();
```

## ads-accounts-delete

Move a ad account to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsDelete(
    id: ''
);```

## ads-accounts-get

Read one ad account

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsGet(
    id: ''
);```

## ads-accounts-update

Rename an ad account or change its connection

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Platform;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsUpdate(
    id: '',
    clicksTotal: 1, // optional
    connectionRef: '', // optional
    conversionValueTotal: 9.99, // optional
    conversionsTotal: 1, // optional
    currency: '', // optional
    externalAccountId: '', // optional
    externalRefs: , // optional
    figuresAt: '2026-01-01T12:00:00Z', // optional
    metadata: , // optional
    name: '', // optional
    platform: Platform::META(), // optional
    roas: 9.99, // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    spendTotal: 9.99 // optional
);```

## ads-accounts-restore

Bring a ad account back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsRestore(
    id: ''
);```

## ads-accounts-status

Report the state of an ad account connection

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Status;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsStatus(
    id: '',
    status: Status::CONNECTED(),
    error: '' // optional
);```
