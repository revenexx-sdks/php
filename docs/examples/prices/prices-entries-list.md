```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceEntryType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesList(
    listId: '',
    id: '', // optional
    productId: '', // optional
    sku: 'BOLT-M8-30', // optional
    priceType: PriceEntryType::STANDARD(), // optional
    quantityMin: 9.99, // optional
    unitPrice: 9.99, // optional
    unit: 'pcs', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
