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

$result = $avatars->avatarsGetQR(
    text: '',
    size: 1, // optional
    margin: 1, // optional
    download: true // optional
);```
