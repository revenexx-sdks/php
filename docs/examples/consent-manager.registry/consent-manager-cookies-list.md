```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\Kind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesList(
    id: '', // optional
    vendorId: '', // optional
    name: '_ga', // optional
    kind: Kind::COOKIE(), // optional
    host: 'first-party', // optional
    position: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
