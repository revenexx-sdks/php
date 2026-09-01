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

$result = $channels->channelsList(
    id: '', // optional
    code: 'shop', // optional
    name: 'Shop', // optional
    labels: '{"en":"Shop","de":"Shop"}', // optional
    type: 'storefront', // optional
    status: ChannelStatus::ACTIVE(), // optional
    unassignedVisibility: ChannelUnassignedVisibility::INHERIT(), // optional
    isDefault: true, // optional
    position: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
