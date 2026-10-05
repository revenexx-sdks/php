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
