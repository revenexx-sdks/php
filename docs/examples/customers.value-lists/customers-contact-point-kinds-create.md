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

$result = $customersValueLists->customersContactPointKindsCreate(
    code: '',
    title: 'Invoice',
    description: 'Where the invoice is sent.', // optional
    descriptions: [
        'de' => 'Wohin die Rechnung geschickt wird.',
        'en' => 'Where the invoice is sent.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```
