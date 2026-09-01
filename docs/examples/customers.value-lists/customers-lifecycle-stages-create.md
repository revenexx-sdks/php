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

$result = $customersValueLists->customersLifecycleStagesCreate(
    code: '',
    title: 'Customer',
    description: 'Has ordered at least once and is being served.', // optional
    descriptions: [
        'de' => 'Hat mindestens einmal bestellt und wird betreut.',
        'en' => 'Has ordered at least once and is being served.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Kunde',
        'en' => 'Customer'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```
