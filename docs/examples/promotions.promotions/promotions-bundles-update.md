```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\Allocation;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesUpdate(
    id: '',
    name: '',
    promotionId: '',
    allocation: Allocation::BESTFORBUYER(), // optional
    maxPerCart: 1, // optional
    selectors: [], // optional
    unitsRequired: 1 // optional
);```
