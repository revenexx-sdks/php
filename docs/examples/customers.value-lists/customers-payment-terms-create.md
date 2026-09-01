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

$result = $customersValueLists->customersPaymentTermsCreate(
    code: '',
    title: 'Net 30 days',
    description: 'Invoice due 30 days after the delivery note.', // optional
    descriptions: [
        'de' => 'Rechnung 30 Tage nach Lieferschein fällig.',
        'en' => 'Invoice due 30 days after the delivery note.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Zahlbar in 30 Tagen',
        'en' => 'Net 30 days'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```
