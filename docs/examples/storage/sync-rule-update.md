```php
<?php

use Revenexx\Client;
use Revenexx\Services\Storage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->syncRuleUpdate(
    id: '',
    enabled: true, // optional
    options: [], // optional
    schedule: '0 3 * * *', // optional
    sftpAccountId: '', // optional
    sourcePath: '/uploads', // optional
    targetFolderId: '' // optional
);```
