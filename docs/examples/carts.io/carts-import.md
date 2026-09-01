```php
<?php

use Revenexx\Client;
use Revenexx\Services\CartsIo;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$cartsIo = new CartsIo($client);

$result = $cartsIo->cartsImport(
    contactId: '', // optional
    csv: 'sku,name,quantity,unit_price
BOLT-M8-30,Hex bolt M8,100,0.12
NUT-M8,Hex nut M8,100,0.04
', // optional
    name: 'Weekly order', // optional
    payload: [
        'cart' => [
            'currency' => 'EUR',
            'name' => 'Weekly order'
        ],
        'items' => [
            '0' => [
                'name' => 'Hex bolt M8',
                'quantity' => 100,
                'sku' => 'BOLT-M8-30',
                'unit_price' => 0.12
            ]
        ]
    ], // optional
    profileId: '', // optional
    sessionKey: 'a1b2c3d4e5f6', // optional
    targetCartId: '' // optional
);```
