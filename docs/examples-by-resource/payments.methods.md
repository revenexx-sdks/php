# payments.methods

## payments-methods-list

List payment method configurations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;
use Revenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    code: 'invoice', // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    enabled: true, // optional
    provider: 'stripe' // optional
);```

## payments-methods-create

Create a payment method configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;
use Revenexx\Enums\PaymentFeeType;
use Revenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsCreate(
    code: 'invoice',
    name: 'Invoice',
    countries: ["DE","AT"], // optional
    description: 'Pay within 14 days of the invoice date.', // optional
    enabled: true, // optional
    feeAmount: 2.5, // optional
    feeCurrency: 'EUR', // optional
    feeType: PaymentFeeType::NONE(), // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    maxOrderValue: 2500, // optional
    metadata: [
        'erp_payment_key' => 'ZTRM01'
    ], // optional
    minOrderValue: 10, // optional
    position: 0, // optional
    provider: 'stripe', // optional
    providerMethod: 'card' // optional
);```

## payments-methods-defaults

Seed the default methods and providers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsDefaults();
```

## payments-methods-eligible

Resolve the methods eligible for a buyer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsEligible(
    amount: 49.9, // optional
    country: 'DE', // optional
    currency: 'EUR' // optional
);```

## payments-methods-delete

Delete a payment method configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsDelete(
    id: ''
);```

## payments-methods-get

Read one payment method configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsGet(
    id: ''
);```

## payments-methods-update

Update a payment method configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;
use Revenexx\Enums\PaymentFeeType;
use Revenexx\Enums\PaymentMethodKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsMethodsUpdate(
    id: '',
    code: 'invoice', // optional
    countries: ["DE","AT"], // optional
    description: 'Pay within 14 days of the invoice date.', // optional
    enabled: true, // optional
    feeAmount: 2.5, // optional
    feeCurrency: 'EUR', // optional
    feeType: PaymentFeeType::NONE(), // optional
    kind: PaymentMethodKind::SELFMANAGED(), // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    maxOrderValue: 2500, // optional
    metadata: [
        'erp_payment_key' => 'ZTRM01'
    ], // optional
    minOrderValue: 10, // optional
    name: 'Invoice', // optional
    position: 0, // optional
    provider: 'stripe', // optional
    providerMethod: 'card' // optional
);```

## payments-tax-classes-usage

Count the methods using a tax class

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsMethods;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsMethods = new PaymentsMethods($client);

$result = $paymentsMethods->paymentsTaxClassesUsage(
    code: 'reduced'
);```
