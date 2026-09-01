```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsCreate(
    code: 'key_accounts',
    labels: [
        'de' => 'Großkunden',
        'en' => 'Key accounts'
    ], // optional
    position: 1, // optional
    ruleMatch: SegmentRuleMatch::ALL(), // optional
    rules: [] // optional
);```
