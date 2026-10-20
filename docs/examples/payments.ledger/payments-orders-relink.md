```php
<?php

use Revenexx\Client;
use Revenexx\Services\PaymentsLedger;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$paymentsLedger = new PaymentsLedger($client);

$result = $paymentsLedger->paymentsOrdersRelink(
    after: '2026-06-14T12:38:33.246Z', // optional
    apply: true, // optional
    limit: 100 // optional
);```
