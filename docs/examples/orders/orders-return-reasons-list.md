```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;
use Revenexx\Enums\OrderVocabularyTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersReturnReasonsList(
    id: '', // optional
    code: 'damaged', // optional
    title: 'Damaged in transit', // optional
    description: 'The goods arrived broken. A carrier claim usually follows.', // optional
    isDefault: true, // optional
    tone: OrderVocabularyTone::NEUTRAL(), // optional
    position: 3, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
