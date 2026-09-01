```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetInitials(
    name: 'Ada Lovelace', // optional
    width: 1, // optional
    height: 1, // optional
    background: '1a73e8' // optional
);```
