```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;
use Revenexx\Enums\CartIoApplyMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesList(
    id: '', // optional
    name: 'cart-export-csv', // optional
    direction: CartIoDirection::IMPORT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    applyMode: CartIoApplyMode::INSERT(), // optional
    isTemplate: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
