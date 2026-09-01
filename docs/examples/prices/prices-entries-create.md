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

$result = $prices->pricesEntriesCreate(
    listId: '',
    metadata: [
        'imported_batch' => '2026-02-14',
        'source_system' => 'erp'
    ], // optional
    priceType: PriceEntryType::STANDARD(), // optional
    productId: '', // optional
    quantityMin: 9.99, // optional
    sku: 'BOLT-M8-30', // optional
    unit: 'pcs', // optional
    unitPrice: 9.99, // optional
    validFrom: '2026-03-01T00:00:00Z', // optional
    validUntil: '2026-03-31T23:59:59Z' // optional
);```
