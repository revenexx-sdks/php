# payments.ledger

## payments-list

List payments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;
use Revenexx\Enums\PaymentStatus;
use Revenexx\Enums\PaymentMethodKind;
use Revenexx\Enums\PaymentDunningStage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    cartId: '', // optional
    contactId: '', // optional
    orderId: '', // optional
    organizationId: '', // optional
    status: PaymentStatus::CREATED(), // optional
    orderRef: 'ORD-10042', // optional
    methodCode: 'invoice', // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    provider: 'stripe', // optional
    dunningStage: PaymentDunningStage::NONE(), // optional
    idempotencyKey: 'checkout-2f9c41', // optional
    externalId: 'ZAHL-4711', // optional
    reference: 'pi_29f4c1b7a3d24e10', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## payments-create

Create and authorize a payment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsCreate(
    amount: 49.9,
    methodCode: 'invoice',
    cartId: '', // optional
    contactId: '', // optional
    country: 'DE', // optional
    currency: 'EUR', // optional
    externalId: 'ZAHL-4711', // optional
    externalRefs: [
        'bank_statement' => 'AZ-88120',
        'erp_ledger' => 'BEL-2026-004417'
    ], // optional
    idempotencyKey: 'checkout-2f9c41', // optional
    metadata: [
        'order_source' => 'web'
    ], // optional
    orderId: '', // optional
    orderRef: 'ORD-10042', // optional
    returnUrl: 'https://shop.example.com/checkout/return', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Journal_Batch_Name' => 'ZAHLUNG',
            'Payment_Method_Code' => 'RECHNUNG'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## payments-dunning-scan

Scan the dunning and webhook clocks

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsDunningScan();
```

## payments-errors-redact

Reclassify pre-taxonomy error messages

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsErrorsRedact(
    apply: true, // optional
    limit: 500 // optional
);```

## payments-orders-relink

Link payments to the order their reference names

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsOrdersRelink(
    after: '2026-06-14T12:38:33.246Z', // optional
    apply: true, // optional
    limit: 100 // optional
);```

## payments-orders-capture

Capture what an order owes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsOrdersCapture(
    orderRef: 'ORD-10042'
);```

## payments-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsVocabulariesList();
```

## payments-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;
use Revenexx\Enums\PaymentsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsVocabulariesGet(
    name: PaymentsVocabulariesGetName::CONNECTIONSTATES()
);```

## payments-webhooks-ingest

Ingest a PSP webhook callback

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsWebhooksIngest(
    provider: 'stripe',
    id: , // optional
    request: [], // optional
    verified:  // optional
);```

## payments-get

Read one payment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsGet(
    id: ''
);```

## payments-cancel

Cancel a payment before capture

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsCancel(
    id: '',
    reason: 'Buyer cancelled by phone' // optional
);```

## payments-capture

Capture an authorized payment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsCapture(
    id: ''
);```

## payments-confirm

Finish a payment after the PSP redirect

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsConfirm(
    id: ''
);```

## payments-refund

Refund a captured payment in full

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsRefund(
    id: '',
    reason: 'Buyer cancelled by phone' // optional
);```
