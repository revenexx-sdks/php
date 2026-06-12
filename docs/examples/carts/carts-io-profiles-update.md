```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Carts;
use RevenexxAPIRevenexx\Enums\CartIoApplyMode;
use RevenexxAPIRevenexx\Enums\CartIoDirection;
use RevenexxAPIRevenexx\Enums\CartIoEntity;
use RevenexxAPIRevenexx\Enums\CartIoFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsIoProfilesUpdate(
    id: '',
    applyMode: CartIoApplyMode::INSERT(), // optional
    direction: CartIoDirection::IMPORT(), // optional
    entity: CartIoEntity::CARTS(), // optional
    format: CartIoFormat::JSON(), // optional
    isTemplate: null, // optional
    mapping: [], // optional
    name: '', // optional
    options: [] // optional
);```
