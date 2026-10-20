```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSyncs;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSyncs = new AdsSyncs($client);

$result = $adsSyncs->adsSyncsResult(
    id: '',
    error: '', // optional
    externalAudienceId: '', // optional
    matchedCount: 1, // optional
    memberCount: 1, // optional
    ok: true, // optional
    skippedCount: 1, // optional
    uploadedCount: 1 // optional
);```
