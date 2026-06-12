```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Carts;
use RevenexxAPIRevenexx\Enums\CartIoDirection;
use RevenexxAPIRevenexx\Enums\CartIoApplyMode;
use RevenexxAPIRevenexx\Enums\CartIoEntity;
use RevenexxAPIRevenexx\Enums\CartIoFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsIoProfilesCreate(
    direction: CartIoDirection::IMPORT(),
    name: '',
    applyMode: CartIoApplyMode::INSERT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    isTemplate: null, // optional
    mapping: [], // optional
    options: [] // optional
);```
