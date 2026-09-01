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

$result = $customersValueLists->customersContactEventKindsUpdate(
    id: '',
    description: 'Somebody spoke to this person on the phone.', // optional
    descriptions: [
        'de' => 'Es wurde mit dieser Person telefoniert.',
        'en' => 'Somebody spoke to this person on the phone.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Telefonat',
        'en' => 'Phone call'
    ], // optional
    position: 1, // optional
    title: 'Phone call', // optional
    tone: Tone::NEUTRAL() // optional
);```
