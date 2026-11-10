# loyalty.tiers

## loyalty-tiers-list

List tiers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    programId: '', // optional
    code: '', // optional
    position: '', // optional
    thresholdKind: '', // optional
    active: '', // optional
    externalId: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```

## loyalty-tiers-create

Add a tier to a programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;
use Revenexx\Enums\ThresholdKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersCreate(
    code: '',
    labels: ,
    programId: '',
    active: true, // optional
    bonusPercent: 9.99, // optional
    externalId: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    perks: , // optional
    pointsMultiplier: 9.99, // optional
    position: 1, // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    thresholdKind: ThresholdKind::ABSOLUTE(), // optional
    thresholdValue: 9.99 // optional
);```

## loyalty-tiers-empty-trash

Empty the tier trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersEmptyTrash();
```

## loyalty-tiers-purge

Delete the tiers that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersPurge();
```

## loyalty-tiers-delete

Move a tier to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersDelete(
    id: ''
);```

## loyalty-tiers-get

Read one tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersGet(
    id: ''
);```

## loyalty-tiers-update

Correct a tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;
use Revenexx\Enums\ThresholdKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersUpdate(
    id: '',
    active: true, // optional
    bonusPercent: 9.99, // optional
    code: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    labels: , // optional
    metadata: , // optional
    perks: , // optional
    pointsMultiplier: 9.99, // optional
    position: 1, // optional
    programId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    thresholdKind: ThresholdKind::ABSOLUTE(), // optional
    thresholdValue: 9.99 // optional
);```

## loyalty-tiers-restore

Bring a tier back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyTiers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyTiers = new LoyaltyTiers($client);

$result = $loyaltyTiers->loyaltyTiersRestore(
    id: ''
);```
