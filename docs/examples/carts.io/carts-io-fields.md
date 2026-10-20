```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartIoFieldEntity;
use Revenexx\Enums\CartIoFieldRole;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsIoFields(
    entity: CartIoFieldEntity::CARTITEMS(), // optional
    role: CartIoFieldRole::COLUMN() // optional
);```
