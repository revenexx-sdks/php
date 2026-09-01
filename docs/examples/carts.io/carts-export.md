```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;
use Revenexx\Enums\CartExportFormat;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsExport(
    id: '',
    format: CartExportFormat::JSON(), // optional
    profileId: '' // optional
);```
