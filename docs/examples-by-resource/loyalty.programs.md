# loyalty.programs

## loyalty-programs-list

List loyalty programmes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    description: '', // optional
    kind: '', // optional
    holder: '', // optional
    currency: '', // optional
    period: '', // optional
    autoEnroll: '', // optional
    active: '', // optional
    memberCount: '', // optional
    externalId: '', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeBlockedReason: '' // optional
);```

## loyalty-programs-create

Create a loyalty programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Holder;
use Revenexx\Enums\Period;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsCreate(
    code: '',
    kind: LoyaltyProgramsCreateKind::POINTS(),
    labels: ,
    active: true, // optional
    autoEnroll: true, // optional
    currency: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    holder: Holder::CONTACT(), // optional
    metadata: , // optional
    period: Period::CALENDARYEAR(), // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## loyalty-programs-empty-trash

Empty the programme trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsEmptyTrash();
```

## loyalty-programs-purge

Delete the programmes that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsPurge();
```

## loyalty-programs-delete

Move a programme to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsDelete(
    id: ''
);```

## loyalty-programs-get

Read one programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsGet(
    id: ''
);```

## loyalty-programs-update

Correct a programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;
use Revenexx\Enums\Holder;
use Revenexx\Enums\LoyaltyProgramsCreateKind;
use Revenexx\Enums\Period;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsUpdate(
    id: '',
    active: true, // optional
    autoEnroll: true, // optional
    code: '', // optional
    currency: '', // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    holder: Holder::CONTACT(), // optional
    kind: LoyaltyProgramsCreateKind::POINTS(), // optional
    labels: , // optional
    metadata: , // optional
    period: Period::CALENDARYEAR(), // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## loyalty-programs-figures

Read the active members of a programme per tier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsFigures(
    id: ''
);```

## loyalty-programs-open-period

Open the yearly bonus agreements for every member of a turnover bonus programme

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsOpenPeriod(
    id: '',
    period: '' // optional
);```

## loyalty-programs-restore

Bring a programme back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPrograms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPrograms = new LoyaltyPrograms($client);

$result = $loyaltyPrograms->loyaltyProgramsRestore(
    id: ''
);```
