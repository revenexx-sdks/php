```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsCreate(
    data: [
        'company' => 'Example GmbH',
        'email' => 'buyer@example.com',
        'message' => 'Please quote 200 units of ACME-4711-BLK, delivered to Hamburg.'
    ],
    formId: '',
    campaignRef: '', // optional
    ip: '203.0.113.10', // optional
    locale: 'de-DE', // optional
    metadata: [], // optional
    pageUrl: 'https://example.com/kontakt', // optional
    source: '/contact', // optional
    userAgent: 'Mozilla/5.0' // optional
);```
