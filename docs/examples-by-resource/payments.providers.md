# payments.providers

## payments-logos-get

Serve a provider logo

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;
use Revenexx\Enums\Variant;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsLogosGet(
    slug: 'stripe',
    variant: Variant::LOGO() // optional
);```

## payments-providers-list

List PSP configurations

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    provider: 'stripe', // optional
    enabled: true, // optional
    testMode: true // optional
);```

## payments-providers-create

Create a PSP configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersCreate(
    provider: 'stripe',
    credentials: [], // optional
    enabled: true, // optional
    name: 'Stripe', // optional
    options: [
        'capture_method' => 'automatic',
        'logo_url' => 'https://apps.example.com/payments/logos/stripe',
        'three_ds' => false
    ], // optional
    testMode: true, // optional
    webhookSecret: '' // optional
);```

## payments-providers-catalog

List the PSPs that can be configured

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersCatalog();
```

## payments-providers-delete

Delete a PSP configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersDelete(
    id: ''
);```

## payments-providers-get

Read one PSP configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersGet(
    id: ''
);```

## payments-providers-update

Update a PSP configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersUpdate(
    id: '',
    credentials: [], // optional
    enabled: true, // optional
    name: 'Stripe', // optional
    options: [
        'capture_method' => 'automatic',
        'logo_url' => 'https://apps.example.com/payments/logos/stripe',
        'three_ds' => false
    ], // optional
    provider: 'stripe', // optional
    testMode: true, // optional
    webhookSecret: '' // optional
);```

## payments-providers-check

Check a PSP configuration's credentials

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsProviders;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsProviders = new PaymentsProviders($client);

$result = $paymentsProviders->paymentsProvidersCheck(
    id: ''
);```
