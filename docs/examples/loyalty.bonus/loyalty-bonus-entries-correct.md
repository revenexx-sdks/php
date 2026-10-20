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

$result = $loyaltyBonus->loyaltyBonusEntriesCorrect(
    agreementId: '',
    amount: 9.99,
    ref: '',
    at: '2026-01-01T12:00:00Z', // optional
    key: '' // optional
);```
