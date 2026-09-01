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

$result = $prices->pricesListsList(
    id: '', // optional
    code: 'standard', // optional
    name: 'Standard prices', // optional
    description: 'The list every buyer falls back to.', // optional
    currency: 'EUR', // optional
    status: PriceListStatus::ACTIVE(), // optional
    priority: 1, // optional
    isDefault: true, // optional
    taxBasis: PriceListTaxBasis::NET(), // optional
    taxIncluded: true, // optional
    requiresAuth: true, // optional
    contactId: '', // optional
    organizationId: '', // optional
    channelId: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```
