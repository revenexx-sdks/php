```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsEvaluation;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsEvaluation = new PromotionsEvaluation($client);

$result = $promotionsEvaluation->promotionsEvaluationEvaluate(
    currency: '',
    channel: '', // optional
    codes: [], // optional
    contactId: '', // optional
    itemCount: 1, // optional
    lines: [], // optional
    market: '', // optional
    organizationId: '', // optional
    paymentFee: 9.99, // optional
    precision: 1, // optional
    previewPromotionIds: [], // optional
    rounding: '', // optional
    shipping: 9.99, // optional
    subtotal: 9.99, // optional
    taxIncluded: true // optional
);```
