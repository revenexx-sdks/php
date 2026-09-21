```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsRedemptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsRedemptions = new PromotionsRedemptions($client);

$result = $promotionsRedemptions->promotionsRedemptionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    voucherId: '', // optional
    cartId: '', // optional
    orderId: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    state: '', // optional
    currency: '' // optional
);```
