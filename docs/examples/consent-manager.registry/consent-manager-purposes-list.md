```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\LegalBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerPurposesList(
    id: '', // optional
    code: 'statistics', // optional
    legalBasis: LegalBasis::CONSENT(), // optional
    position: 1, // optional
    isActive: true, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
