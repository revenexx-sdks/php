# promotions.vouchers

## promotions-batches-list

List code batches

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    name: '', // optional
    pattern: '', // optional
    alphabet: '', // optional
    requested: '', // optional
    createdCount: '', // optional
    redeemedCount: '', // optional
    status: '', // optional
    requestRef: '' // optional
);```

## promotions-batches-create

Create a code batch

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesCreate(
    name: '',
    promotionId: '',
    alphabet: '', // optional
    metadata: , // optional
    pattern: '', // optional
    requestRef: '', // optional
    requested: 1, // optional
    status: PromotionsBatchesCreateStatus::ACTIVE() // optional
);```

## promotions-batches-delete

Delete a batch

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesDelete(
    id: ''
);```

## promotions-batches-get

Read one batch

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesGet(
    id: ''
);```

## promotions-batches-update

Correct a batch

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesUpdate(
    id: '',
    alphabet: '', // optional
    metadata: , // optional
    name: '', // optional
    pattern: '', // optional
    promotionId: '', // optional
    requestRef: '', // optional
    requested: 1, // optional
    status: PromotionsBatchesCreateStatus::ACTIVE() // optional
);```

## promotions-batches-disable

Switch a batch and every code in it off

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesDisable(
    id: ''
);```

## promotions-batches-export

Export a batch codes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesExport(
    id: ''
);```

## promotions-batches-export-file

Export a batch codes as a CSV file

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesExportFile(
    id: ''
);```

## promotions-batches-generate

Generate codes into a batch

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesGenerate(
    id: '',
    count: 1,
    alphabet: '', // optional
    pattern: '', // optional
    requestRef: '', // optional
    usageLimit: 1 // optional
);```

## promotions-batches-generate-for

Generate one code per named recipient

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesGenerateFor(
    id: '',
    recipients: []
);```

## promotions-batches-import

Import existing codes unchanged

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsBatchesImport(
    id: '',
    codes: [],
    usageLimit: 1 // optional
);```

## promotions-voucher-reservations-list

List code reservations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    voucherId: '', // optional
    contactId: '', // optional
    organizationId: '' // optional
);```

## promotions-voucher-reservations-create

Hold a code for a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsCreate(
    voucherId: '',
    contactId: '', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    organizationId: '' // optional
);```

## promotions-voucher-reservations-delete

Release a reservation

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsDelete(
    id: ''
);```

## promotions-voucher-reservations-get

Read one reservation

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsGet(
    id: ''
);```

## promotions-voucher-reservations-update

Correct a reservation

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVoucherReservationsUpdate(
    id: '',
    contactId: '', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    organizationId: '', // optional
    voucherId: '' // optional
);```

## promotions-vouchers-list

List voucher codes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    batchId: '', // optional
    code: '', // optional
    codeKey: '', // optional
    status: '', // optional
    usageLimit: '', // optional
    usageCount: '', // optional
    currency: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    reservationRequired: '' // optional
);```

## promotions-vouchers-create

Issue a voucher code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersCreate(
    code: '',
    promotionId: '',
    batchId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    metadata: , // optional
    organizationId: '', // optional
    reservationLimit: 1, // optional
    reservationRequired: true, // optional
    residualValue: 9.99, // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: PromotionsBatchesCreateStatus::ACTIVE(), // optional
    usageLimit: 1 // optional
);```

## promotions-vouchers-delete

Delete a voucher that was never redeemed

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersDelete(
    id: ''
);```

## promotions-vouchers-get

Read one voucher

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersGet(
    id: ''
);```

## promotions-vouchers-update

Correct a voucher

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsVouchers;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsVouchers = new PromotionsVouchers($client);

$result = $promotionsVouchers->promotionsVouchersUpdate(
    id: '',
    batchId: '', // optional
    code: '', // optional
    contactId: '', // optional
    currency: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    metadata: , // optional
    organizationId: '', // optional
    promotionId: '', // optional
    reservationLimit: 1, // optional
    reservationRequired: true, // optional
    residualValue: 9.99, // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: PromotionsBatchesCreateStatus::ACTIVE(), // optional
    usageLimit: 1 // optional
);```
