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

$result = $punchout->punchoutFieldMappingsCreate(
    protocol: '',
    source: '',
    target: '',
    targetKind: '',
    accountId: '', // optional
    document: '', // optional
    emit: '', // optional
    enabled: true, // optional
    mutators: [], // optional
    position: 1, // optional
    scope: '', // optional
    sourceConfig: [] // optional
);```
