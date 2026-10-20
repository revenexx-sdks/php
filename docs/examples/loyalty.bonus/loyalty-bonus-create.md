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

$result = $loyaltyBonus->loyaltyBonusCreate(
    organizationId: '',
    programId: '',
    baseTurnover: 9.99, // optional
    contactId: '', // optional
    documentRef: '', // optional
    period: '' // optional
);```
