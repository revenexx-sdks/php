# loyalty.bonus

## loyalty-bonus-list

List bonus agreements

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    programId: '', // optional
    membershipId: '', // optional
    organizationId: '', // optional
    period: '', // optional
    periodStart: '', // optional
    periodEnd: '', // optional
    baseSource: '', // optional
    turnoverSource: '', // optional
    reachedTierId: '', // optional
    reachedTierCode: '', // optional
    projectedTierCode: '', // optional
    currency: '', // optional
    state: '', // optional
    receivablesCleared: '', // optional
    receivablesCheckedBy: '', // optional
    forfeitReason: '', // optional
    documentRef: '', // optional
    payoutRef: '', // optional
    approvedBy: '', // optional
    externalId: '' // optional
);```

## loyalty-bonus-create

Open the bonus agreement of a company for a year

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusCreate(
    organizationId: '',
    programId: '',
    baseTurnover: 9.99, // optional
    contactId: '', // optional
    documentRef: '', // optional
    period: '' // optional
);```

## loyalty-bonus-get

Read one bonus agreement

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusGet(
    id: ''
);```

## loyalty-bonus-update

Correct the base, the document or the turnover source of an agreement

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;
use Revenexx\Enums\TurnoverSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusUpdate(
    id: '',
    baseTurnover: 9.99, // optional
    documentRef: '', // optional
    metadata: , // optional
    turnoverSource: TurnoverSource::ORDERS() // optional
);```

## loyalty-bonus-approve

Approve a calculated bonus

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusApprove(
    id: '',
    checkedBy: '', // optional
    receivablesCleared: true // optional
);```

## loyalty-bonus-calculate

Calculate the bonus after the year has ended

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusCalculate(
    id: '',
    data: []
);```

## loyalty-bonus-forfeit

Forfeit a calculated bonus with a reason

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusForfeit(
    id: '',
    reason: ''
);```

## loyalty-bonus-pay

Record that an approved bonus was paid

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusPay(
    id: '',
    payoutRef: '' // optional
);```

## loyalty-bonus-progress

Read where a company stands in its bonus year

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusProgress(
    id: ''
);```

## loyalty-bonus-rebuild

Read the year completed orders of the company into the agreement again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusRebuild(
    id: '',
    data: []
);```

## loyalty-bonus-entries-list

List the turnover lines of agreements

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusEntriesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    agreementId: '', // optional
    entryKey: '', // optional
    source: '', // optional
    ref: '', // optional
    orderId: '' // optional
);```

## loyalty-bonus-entries-correct

Correct the turnover of an agreement by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusEntriesCorrect(
    agreementId: '',
    amount: 9.99,
    ref: '',
    at: '2026-01-01T12:00:00Z', // optional
    key: '' // optional
);```

## loyalty-bonus-entries-get

Read one turnover line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusEntriesGet(
    id: ''
);```

## loyalty-bonus-import

Import turnover figures from the ERP

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusImport(
    rows: []
);```
