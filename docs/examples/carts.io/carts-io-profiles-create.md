```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoDirection;
use Revenexx\Enums\CartIoApplyMode;
use Revenexx\Enums\CartIoEntity;
use Revenexx\Enums\CartIoFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoProfilesCreate(
    direction: CartIoDirection::IMPORT(),
    name: 'cart-export-csv',
    applyMode: CartIoApplyMode::INSERT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    isTemplate: true, // optional
    mapping: [], // optional
    options: [] // optional
);```
