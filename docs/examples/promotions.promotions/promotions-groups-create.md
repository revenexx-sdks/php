```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsGroupsCreateMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsCreate(
    code: '',
    name: '',
    labels: [], // optional
    metadata: [], // optional
    mode: PromotionsGroupsCreateMode::STACK(), // optional
    parentId: '', // optional
    position: 1 // optional
);```
