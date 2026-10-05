```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRecords;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRecords = new ConsentManagerRecords($client);

$result = $consentManagerRecords->consentManagerRecordsSummary(
    market: 'de', // optional
    from: '2026-01-01T00:00:00Z', // optional
    to: '2026-02-01T00:00:00Z' // optional
);```
