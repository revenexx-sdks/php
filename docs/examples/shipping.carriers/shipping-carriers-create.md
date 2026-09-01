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
    status: ShippingCarrierStatus::ACTIVE(), // optional
    trackingUrlTemplate: 'https://track.example.com/parcels/{tracking_code}' // optional
);```
