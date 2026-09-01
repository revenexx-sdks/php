```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingMethods;
use Revenexx\Enums\ShippingMethodMatrixBasis;
use Revenexx\Enums\ShippingMethodPricingType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingMethods = new ShippingMethods($client);

$result = $shippingMethods->shippingMethodsUpdate(
    id: '',
    carrier: 'acme-parcel', // optional
    carrierId: '8a4d1c7e-2b93-4f61-b0d2-6c5a9e3f1a44', // optional
    code: 'express', // optional
    countries: ["DE","AT","CH"], // optional
    currency: 'EUR', // optional
    description: 'Delivered by the next working day when ordered before the cut-off.', // optional
    enabled: true, // optional
    etaDaysMax: 1, // optional
    etaDaysMin: 1, // optional
    freeAbove: 100, // optional
    labels: [
        'de' => 'Expressversand',
        'en' => 'Express delivery'
    ], // optional
    matrixAttribute: 'volume_litres', // optional
    matrixBasis: ShippingMethodMatrixBasis::WEIGHT(), // optional
    metadata: [
        'erp_key' => 'SHIP-EXPRESS',
        'printer' => 'label-2'
    ], // optional
    name: 'Express delivery', // optional
    position: 1, // optional
    price: 9.9, // optional
    pricingType: ShippingMethodPricingType::FIXED(), // optional
    quoteAbove: 31.5, // optional
    taxClass: 'reduced' // optional
);```
