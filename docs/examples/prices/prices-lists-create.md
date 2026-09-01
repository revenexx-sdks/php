```php
<?php

use Revenexx\Client;
use Revenexx\Services\Prices;
use Revenexx\Enums\PriceListStatus;
use Revenexx\Enums\PriceListTaxBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsCreate(
    code: 'dealer-de',
    name: 'Dealer prices',
    channelId: '', // optional
    contactId: '', // optional
    currency: 'EUR', // optional
    description: 'Contract prices for authorised dealers.', // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Händlerpreise',
        'en' => 'Dealer prices'
    ], // optional
    metadata: [
        'erp_price_group' => 'A1',
        'source_system' => 'erp'
    ], // optional
    organizationId: '', // optional
    priority: 1, // optional
    requiresAuth: true, // optional
    status: PriceListStatus::ACTIVE(), // optional
    taxBasis: PriceListTaxBasis::NET(), // optional
    taxIncluded: true, // optional
    validFrom: '2026-01-01T00:00:00Z', // optional
    validUntil: '2026-12-31T23:59:59Z' // optional
);```
