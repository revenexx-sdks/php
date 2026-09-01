```php
<?php

use Revenexx\Client;
use Revenexx\Services\Avatars;
use Revenexx\Enums\AvatarsGetFlagCode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetFlag(
    code: AvatarsGetFlagCode::AF(),
    width: 1, // optional
    height: 1, // optional
    quality: 1 // optional
);```
