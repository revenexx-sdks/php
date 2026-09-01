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

$result = $avatars->avatarsGetImage(
    url: 'https://www.revenexx.com/img/hero-revenexx-poster.webp',
    width: 1, // optional
    height: 1 // optional
);```
