```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersValueLists;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersValueLists = new CustomersValueLists($client);

$result = $customersValueLists->customersAddressTypesCreate(
    code: '',
    title: 'Shipping address',
    description: 'Where the goods go.', // optional
    descriptions: [
        'de' => 'Wohin die Ware geliefert wird.',
        'en' => 'Where the goods go.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Lieferadresse',
        'en' => 'Shipping address'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```
