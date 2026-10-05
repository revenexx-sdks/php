```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRecords;
use Revenexx\Enums\Action;
use Revenexx\Enums\Surface;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRecords = new ConsentManagerRecords($client);

$result = $consentManagerRecords->consentManagerRecordsList(
    id: '', // optional
    consentId: '', // optional
    action: Action::ACCEPTALL(), // optional
    surface: Surface::FIRSTLAYER(), // optional
    policyVersionId: '', // optional
    policyNumber: 7, // optional
    policySha256: 'e903c6b98c176311018c0f737505ecd7cd992728f71b48ec65a2074c79572472', // optional
    locale: 'de', // optional
    market: 'de', // optional
    recordedAt: '2026-01-01T12:00:00Z', // optional
    clientTs: '2026-01-01T12:00:00Z', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    userAgentClass: 'Firefox 131', // optional
    pagePath: '/produkte/schrauben', // optional
    contactId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
