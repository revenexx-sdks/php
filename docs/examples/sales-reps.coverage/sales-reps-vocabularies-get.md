```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\SalesRepsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsVocabulariesGet(
    name: SalesRepsVocabulariesGetName::ASSIGNMENTROLES()
);```
