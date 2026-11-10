# carts

## carts-list

List carts

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\CartStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsList(
    id: '', // optional
    name: 'Weekly order', // optional
    status: CartStatus::ACTIVE(), // optional
    contactId: '', // optional
    organizationId: '', // optional
    sessionKey: 'a1b2c3d4e5f6', // optional
    isGuest: true, // optional
    channelId: '', // optional
    currency: 'EUR', // optional
    isCurrent: true, // optional
    itemCount: 100, // optional
    subtotal: 12, // optional
    discountTotal: 1.2, // optional
    shippingTotal: 4.9, // optional
    taxTotal: 2.983, // optional
    grandTotal: 18.683, // optional
    shippingMethod: 'Standard', // optional
    totalsComputedAt: '2026-10-15T09:30:00.000Z', // optional
    abandonedAt: '2026-01-01T12:00:00Z', // optional
    orderedAt: '2026-01-01T12:00:00Z', // optional
    orderRef: 'SO-10042', // optional
    mergedIntoCartId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## carts-create

Create a cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsCreate(
    attribution: [], // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    isCurrent: true, // optional
    metadata: [
        'campaign' => 'spring-catalogue',
        'locale' => 'de-DE',
        'source' => 'storefront'
    ], // optional
    name: 'Weekly order', // optional
    organizationId: '', // optional
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-claim

Claim guest carts for a contact

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\CartMergeStrategy;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsClaim(
    contactId: '',
    sessionKey: 'a1b2c3d4e5f6',
    organizationId: '', // optional
    strategy: CartMergeStrategy::MERGE(), // optional
    targetCartId: '' // optional
);```

## carts-held-codes

List the voucher codes open carts hold

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsHeldCodes(
    code: 'FRUEHJAHR25,B2B-10', // optional
    status: 'active,abandoned', // optional
    limit: 1, // optional
    offset: 1 // optional
);```

## carts-maintenance-run

Run the cart maintenance sweep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsMaintenanceRun(
    dryRun: true // optional
);```

## carts-merge

Merge a source cart into a target cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsMerge(
    sourceCartId: '',
    targetCartId: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-on-behalf

Open a cart in a customer's name

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\CartOrderingChannel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsOnBehalf(
    contactId: '',
    channel: CartOrderingChannel::PHONE(), // optional
    channelId: '', // optional
    currency: 'EUR', // optional
    name: 'Phone order', // optional
    note: 'Call back at 2 pm, deliver to plant north', // optional
    organizationId: '' // optional
);```

## carts-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsVocabulariesList();
```

## carts-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\Name;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsVocabulariesGet(
    name: Name::IOAPPLYMODES()
);```

## carts-delete

Delete a cart including its items

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsDelete(
    id: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-get

Read one cart by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsGet(
    id: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-update

Update a cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsUpdate(
    id: '',
    sessionKey: 'a1b2c3d4e5f6', // optional
    attribution: [], // optional
    channelId: '', // optional
    currency: 'EUR', // optional
    discountLines: [{"amount":1.2,"detail":"Gutschein FRUEHJAHR25 · 10 %","label":"Frühjahrsaktion","voucher_code":"FRUEHJAHR25"}], // optional
    metadata: [
        'campaign' => 'spring-catalogue',
        'locale' => 'de-DE',
        'source' => 'storefront'
    ], // optional
    name: 'Weekly order', // optional
    organizationId: '', // optional
    shippingMethod: 'Standard', // optional
    shippingTotal: 4.9, // optional
    voucherCodes: ["FRUEHJAHR25","B2B-10"] // optional
);```

## carts-abandon

Abandon an active cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsAbandon(
    id: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-activate

Make a cart the owner's current cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsActivate(
    id: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-merge-into

Merge this cart into another cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsMergeInto(
    id: '',
    targetCartId: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```

## carts-order

Mark an active cart as ordered

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsOrder(
    id: '',
    sessionKey: 'a1b2c3d4e5f6', // optional
    orderRef: 'SO-10042' // optional
);```

## carts-reopen

Reopen an abandoned cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsReopen(
    id: '',
    sessionKey: 'a1b2c3d4e5f6' // optional
);```
