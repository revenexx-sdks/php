```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Prices;
use RevenexxAPIRevenexx\Enums\PriceEntryType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesEntriesCreate(
    listId: '',
    metadata: [], // optional
    priceType: PriceEntryType::STANDARD(), // optional
    productId: '', // optional
    quantityMin: null, // optional
    sku: '', // optional
    unit: '', // optional
    unitPrice: null, // optional
    validFrom: '', // optional
    validUntil: '' // optional
);```
