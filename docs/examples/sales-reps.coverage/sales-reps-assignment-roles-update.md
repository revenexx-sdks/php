```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesUpdate(
    id: '',
    code: 'field_sales', // optional
    description: 'Visits the customer. The rep who travels to the account.', // optional
    descriptions: [
        'de' => 'Besucht den Kunden.',
        'en' => 'Visits the customer.'
    ], // optional
    isDefault: true, // optional
    isSystem: true, // optional
    labels: [
        'de' => 'Außendienst',
        'en' => 'Field sales'
    ], // optional
    position: 1, // optional
    title: 'Field sales', // optional
    tone: Tone::NEUTRAL() // optional
);```
