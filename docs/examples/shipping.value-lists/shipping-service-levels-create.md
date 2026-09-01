```php
<?php

use Revenexx\Client;
use Revenexx\Services\ShippingValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$shippingValueLists = new ShippingValueLists($client);

$result = $shippingValueLists->shippingServiceLevelsCreate(
    code: 'night_courier',
    title: 'Night courier',
    description: 'When to pick this service level.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this service level.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Night courier',
        'en' => 'Night courier'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```
