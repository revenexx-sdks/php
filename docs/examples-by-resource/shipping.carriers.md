# shipping.carriers

## shipping-carriers-list

List the carriers this tenant ships with

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;
use Revenexx\Enums\ShippingCarriersListStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'position.asc', // optional
    code: 'acme-parcel', // optional
    status: ShippingCarriersListStatus::ACTIVE(), // optional
    serviceLevel: 'express', // optional
    externalId: 'SPEDITEUR-014' // optional
);```

## shipping-carriers-create

Add a carrier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;
use Revenexx\Enums\ShippingCarrierStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersCreate(
    code: 'acme-parcel',
    name: 'Acme Parcel',
    countries: ["DE","AT","CH"], // optional
    cutoffTime: '16:00', // optional
    etaDaysMax: 1, // optional
    etaDaysMin: 1, // optional
    externalId: 'SPEDITEUR-014', // optional
    externalRefs: [
        'business-central' => 'SPEDITEUR-014',
        'legacy_shop' => 'dhl'
    ], // optional
    handlingDays: 1, // optional
    labels: [
        'de' => 'Acme Paketdienst',
        'en' => 'Acme Parcel'
    ], // optional
    metadata: [
        'contract' => 'ACME-2026',
        'customer_number' => '4711'
    ], // optional
    position: 1, // optional
    serviceLevel: 'express', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Shipping_Agent_Service' => 'NEXTDAY'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: ShippingCarrierStatus::ACTIVE(), // optional
    trackingUrlTemplate: 'https://track.example.com/parcels/{tracking_code}' // optional
);```

## shipping-carriers-catalog

The carrier catalog this app ships with

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersCatalog();
```

## shipping-carriers-defaults

Seed the standard carriers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersDefaults();
```

## shipping-carriers-delete

Delete a carrier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersDelete(
    id: ''
);```

## shipping-carriers-get

Read one carrier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersGet(
    id: ''
);```

## shipping-carriers-update

Update a carrier

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;
use Revenexx\Enums\ShippingCarrierStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingCarriersUpdate(
    id: '',
    code: 'acme-parcel', // optional
    countries: ["DE","AT","CH"], // optional
    cutoffTime: '16:00', // optional
    etaDaysMax: 1, // optional
    etaDaysMin: 1, // optional
    externalId: 'SPEDITEUR-014', // optional
    externalRefs: [
        'business-central' => 'SPEDITEUR-014',
        'legacy_shop' => 'dhl'
    ], // optional
    handlingDays: 1, // optional
    labels: [
        'de' => 'Acme Paketdienst',
        'en' => 'Acme Parcel'
    ], // optional
    metadata: [
        'contract' => 'ACME-2026',
        'customer_number' => '4711'
    ], // optional
    name: 'Acme Parcel', // optional
    position: 1, // optional
    serviceLevel: 'express', // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Shipping_Agent_Service' => 'NEXTDAY'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: ShippingCarrierStatus::ACTIVE(), // optional
    trackingUrlTemplate: 'https://track.example.com/parcels/{tracking_code}' // optional
);```

## shipping-tracking

Resolve a tracking link

```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingCarriers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingCarriers = new ShippingCarriers($client);

$result = $shippingCarriers->shippingTracking(
    carrier: 'acme-parcel',
    country: 'DE', // optional
    postalCode: '12345', // optional
    trackingCode: 'ACME000000001DE' // optional
);```
