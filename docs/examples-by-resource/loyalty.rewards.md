# loyalty.rewards

## loyalty-rewards-redemptions-list

List redeemed rewards

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsRedemptionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    membershipId: '', // optional
    rewardId: '', // optional
    points: '', // optional
    voucherCode: '', // optional
    ledgerEntryId: '', // optional
    requestKey: '', // optional
    state: '', // optional
    usedOrderId: '' // optional
);```

## loyalty-rewards-redemptions-get

Read one redeemed reward

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsRedemptionsGet(
    id: ''
);```

## loyalty-rewards-list

List rewards

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    programId: '', // optional
    code: '', // optional
    description: '', // optional
    pointsCost: '', // optional
    promotionId: '', // optional
    voucherBatchId: '', // optional
    minTierId: '', // optional
    active: '', // optional
    redeemedCount: '', // optional
    externalId: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```

## loyalty-rewards-create

Add a reward to a points programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsCreate(
    code: '',
    labels: ,
    pointsCost: 1,
    programId: '',
    promotionId: '',
    active: true, // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    minTierId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    voucherBatchId: '' // optional
);```

## loyalty-rewards-empty-trash

Empty the reward trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsEmptyTrash();
```

## loyalty-rewards-purge

Delete the rewards that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsPurge();
```

## loyalty-rewards-delete

Move a reward to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsDelete(
    id: ''
);```

## loyalty-rewards-get

Read one reward

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsGet(
    id: ''
);```

## loyalty-rewards-update

Correct a reward

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsUpdate(
    id: '',
    active: true, // optional
    code: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    labels: , // optional
    metadata: , // optional
    minTierId: '', // optional
    pointsCost: 1, // optional
    programId: '', // optional
    promotionId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    voucherBatchId: '' // optional
);```

## loyalty-rewards-redeem

Redeem points for a reward voucher

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsRedeem(
    id: '',
    contactId: '', // optional
    key: '', // optional
    membershipId: '', // optional
    organizationId: '' // optional
);```

## loyalty-rewards-restore

Bring a reward back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyRewards;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyRewards = new LoyaltyRewards($client);

$result = $loyaltyRewards->loyaltyRewardsRestore(
    id: ''
);```
