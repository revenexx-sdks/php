```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsList(
    id: '', // optional
    code: 'invoice', // optional
    title: 'Invoice', // optional
    description: 'What the buyer owes for an order.', // optional
    isDefault: true, // optional
    tone: Tone::NEUTRAL(), // optional
    position: 0, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
