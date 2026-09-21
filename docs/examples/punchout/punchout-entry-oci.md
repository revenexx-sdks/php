```php
<?php

use Revenexx\Client;
use Revenexx\Services\Punchout;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$punchout = new Punchout($client);

$result = $punchout->punchoutEntryOci(
    accountCode: '',
    method: '',
    bodyB64: '', // optional
    clientIp: '', // optional
    contentType: '', // optional
    headers: [], // optional
    query: [] // optional
);```
