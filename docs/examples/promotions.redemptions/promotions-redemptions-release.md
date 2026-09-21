```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;
use Revenexx\Enums\PromotionsRedemptionsReleaseReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsRelease(
    cartId: '', // optional
    orderId: '', // optional
    reason: PromotionsRedemptionsReleaseReason::CARTRELEASED() // optional
);```
