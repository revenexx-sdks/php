```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Channels;
use RevenexxAPIRevenexx\Enums\ChannelStatus;
use RevenexxAPIRevenexx\Enums\ChannelType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsUpdate(
    id: '',
    code: '', // optional
    isDefault: null, // optional
    labels: [], // optional
    name: '', // optional
    position: null, // optional
    status: ChannelStatus::ACTIVE(), // optional
    type: ChannelType::STOREFRONT() // optional
);```
