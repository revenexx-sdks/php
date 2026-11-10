# promotions.redemptions

## promotions-redemptions-commit

Commit a cart holds against the order it became

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsCommit(
    orderId: '',
    cartId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    market: '', // optional
    orderNumber: '', // optional
    organizationId: '', // optional
    promotions: [], // optional
    redeemedBy: '', // optional
    terms: [] // optional
);```

## promotions-redemptions-sweep

Clear away holds that stopped counting

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsSweep();
```

## promotions-redemptions-list

List redemptions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    voucherId: '', // optional
    voucherCode: '', // optional
    batchId: '', // optional
    cartId: '', // optional
    orderId: '', // optional
    orderNumber: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    redeemedBy: '', // optional
    state: '' // optional
);```

## promotions-redemptions-get

Read one redemption

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsGet(
    id: ''
);```

## promotions-redemptions-release

Give a cart or an order redemptions back

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;
use Revenexx\Enums\PromotionsRedemptionsReleaseReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsRelease(
    cartId: '', // optional
    orderId: '', // optional
    reason: PromotionsRedemptionsReleaseReason::CARTRELEASED() // optional
);```

## promotions-redemptions-reserve

Hold a cart promotions so nobody else can spend them

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsReserve(
    cartId: '',
    contactId: '', // optional
    currency: '', // optional
    fromCartId: '', // optional
    organizationId: '', // optional
    promotions: [], // optional
    redeemedBy: '' // optional
);```

## promotions-redemptions-returns

Credit back what a return took out of an order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsReturns(
    orderId: '',
    all: true, // optional
    lines: [], // optional
    remainingAmounts: [], // optional
    remainingLines: [], // optional
    returnRef: '' // optional
);```
