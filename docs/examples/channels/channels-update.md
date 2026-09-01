```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelStatus;
use Revenexx\Enums\ChannelUnassignedVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsUpdate(
    id: '',
    code: 'shop', // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    name: 'Shop', // optional
    position: 1, // optional
    status: ChannelStatus::ACTIVE(), // optional
    type: 'storefront', // optional
    unassignedVisibility: ChannelUnassignedVisibility::INHERIT() // optional
);```
