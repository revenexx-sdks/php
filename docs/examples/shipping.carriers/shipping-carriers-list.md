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
    serviceLevel: 'express' // optional
);```
