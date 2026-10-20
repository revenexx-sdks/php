```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusEntriesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    agreementId: '', // optional
    entryKey: '', // optional
    source: '', // optional
    ref: '', // optional
    orderId: '' // optional
);```
