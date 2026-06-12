```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Shipping;
use RevenexxAPIRevenexx\Enums\ShippingMethodMatrixBasis;
use RevenexxAPIRevenexx\Enums\ShippingMethodPricingType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shipping = new Shipping($client);

$result = $shipping->shippingMethodsCreate(
    code: '',
    name: '',
    carrier: '', // optional
    countries: [], // optional
    currency: '', // optional
    description: '', // optional
    enabled: null, // optional
    etaDaysMax: null, // optional
    etaDaysMin: null, // optional
    freeAbove: null, // optional
    labels: [], // optional
    matrixAttribute: '', // optional
    matrixBasis: ShippingMethodMatrixBasis::WEIGHT(), // optional
    metadata: [], // optional
    position: null, // optional
    price: null, // optional
    pricingType: ShippingMethodPricingType::FIXED() // optional
);```
