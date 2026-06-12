```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Prices;
use RevenexxAPIRevenexx\Enums\PriceListStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$prices = new Prices($client);

$result = $prices->pricesListsCreate(
    code: '',
    name: '',
    channelId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    description: '', // optional
    isDefault: null, // optional
    labels: [], // optional
    marketId: '', // optional
    metadata: [], // optional
    organizationId: '', // optional
    priority: null, // optional
    status: PriceListStatus::ACTIVE(), // optional
    taxIncluded: null, // optional
    validFrom: '', // optional
    validUntil: '' // optional
);```
