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

$result = $adsSyncs->adsSyncsMembers(
    id: '',
    cursor: '', // optional
    limit: 1 // optional
);```
