```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelTypeTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesUpdate(
    id: '',
    description: 'A web shop a human browses.', // optional
    descriptions: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    position: 1, // optional
    title: 'Product feed', // optional
    tone: ChannelTypeTone::NEUTRAL() // optional
);```
