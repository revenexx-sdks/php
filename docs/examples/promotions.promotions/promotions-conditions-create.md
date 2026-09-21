```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsConditionsCreateKind;
use Revenexx\Enums\MatchMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsCreate(
    promotionId: '',
    addend: 9.99, // optional
    compareValue: [], // optional
    compareValueTo: [], // optional
    comparison: '', // optional
    factor: 9.99, // optional
    kind: PromotionsConditionsCreateKind::GROUP(), // optional
    matchMode: MatchMode::ALL(), // optional
    negate: true, // optional
    parentId: '', // optional
    position: 1, // optional
    rightSubject: '', // optional
    subject: '' // optional
);```
