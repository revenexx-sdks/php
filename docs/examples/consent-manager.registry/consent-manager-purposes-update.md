```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\GoogleSignals;
use Revenexx\Enums\LegalBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesUpdate(
    id: '',
    code: 'statistics', // optional
    description: [], // optional
    googleSignals: [GoogleSignals::ANALYTICSSTORAGE()], // optional
    isActive: true, // optional
    legalBasis: LegalBasis::CONSENT(), // optional
    name: [
        'de' => 'Statistik',
        'en' => 'Statistics'
    ], // optional
    position: 1 // optional
);```
