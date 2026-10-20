```php
<?php

use Revenexx\Client;
use Revenexx\Services\Carts;
use Revenexx\Enums\CartOrderingChannel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$carts = new Carts($client);

$result = $carts->cartsOnBehalf(
    contactId: '',
    channel: CartOrderingChannel::PHONE(), // optional
    channelId: '', // optional
    currency: 'EUR', // optional
    name: 'Phone order', // optional
    note: 'Call back at 2 pm, deliver to plant north', // optional
    organizationId: '' // optional
);```
