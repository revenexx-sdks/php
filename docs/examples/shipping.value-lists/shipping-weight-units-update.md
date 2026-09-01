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

$result = $shippingValueLists->shippingWeightUnitsUpdate(
    id: '',
    description: 'When to pick this weight unit.', // optional
    descriptions: [
        'de' => 'Wann diese Option zu wählen ist.',
        'en' => 'When to pick this weight unit.'
    ], // optional
    factor: 1000, // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Tonne',
        'en' => 'Tonne'
    ], // optional
    position: 1, // optional
    title: 'Tonne', // optional
    tone: Tone::NEUTRAL() // optional
);```
