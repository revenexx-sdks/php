```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\DocumentKindTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsUpdate(
    id: '',
    code: 'invoice', // optional
    description: 'What the buyer owes for an order.', // optional
    descriptions: [
        'de' => 'Was der Käufer für eine Bestellung schuldet.',
        'en' => 'What the buyer owes for an order.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 0, // optional
    title: 'Invoice', // optional
    tone: DocumentKindTone::INFO() // optional
);```
