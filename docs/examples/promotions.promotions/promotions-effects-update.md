```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsUpdate(
    id: '',
    promotionId: '',
    amount: 9.99, // optional
    appliesTo: [], // optional
    bundleId: '', // optional
    customPayload: [], // optional
    customShapeVersion: 1, // optional
    customTypeId: '', // optional
    freeItemQuantity: 1, // optional
    freeItems: [], // optional
    kind: PromotionsEffectsCreateKind::DISCOUNT(), // optional
    maxDiscount: 9.99, // optional
    message: [], // optional
    metadata: [], // optional
    position: 1, // optional
    requiresChoice: true, // optional
    spread: true, // optional
    targetScope: TargetScope::UNITPRICE(), // optional
    unitChoice: UnitChoice::CHEAPEST(), // optional
    unitPosition: 1, // optional
    valueType: ValueType::PERCENTAGE() // optional
);```
