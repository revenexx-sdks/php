```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasis;
use Revenexx\Enums\GoogleSignals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesCreate(
    code: 'statistics',
    legalBasis: LegalBasis::CONSENT(),
    name: [
        'de' => 'Statistik',
        'en' => 'Statistics'
    ],
    description: [], // optional
    googleSignals: [GoogleSignals::ANALYTICSSTORAGE()], // optional
    isActive: true, // optional
    position: 1 // optional
);```
