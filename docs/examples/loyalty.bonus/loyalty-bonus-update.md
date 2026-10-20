```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyBonus;
use Revenexx\Enums\TurnoverSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyBonus = new LoyaltyBonus($client);

$result = $loyaltyBonus->loyaltyBonusUpdate(
    id: '',
    baseTurnover: 9.99, // optional
    documentRef: '', // optional
    metadata: , // optional
    turnoverSource: TurnoverSource::ORDERS() // optional
);```
