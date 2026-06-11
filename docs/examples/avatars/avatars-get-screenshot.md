```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Avatars;
use RevenexxAPIRevenexx\Enums\Theme;
use RevenexxAPIRevenexx\Enums\Timezone;
use RevenexxAPIRevenexx\Enums\Permissions;
use RevenexxAPIRevenexx\Enums\Output;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$avatars = new Avatars($client);

$result = $avatars->avatarsGetScreenshot(
    url: '',
    headers: [], // optional
    viewportWidth: null, // optional
    viewportHeight: null, // optional
    scale: null, // optional
    theme: Theme::LIGHT(), // optional
    userAgent: '', // optional
    fullpage: null, // optional
    locale: '', // optional
    timezone: Timezone::AFRICAABIDJAN(), // optional
    latitude: null, // optional
    longitude: null, // optional
    accuracy: null, // optional
    touch: null, // optional
    permissions: [Permissions::GEOLOCATION()], // optional
    sleep: null, // optional
    width: null, // optional
    height: null, // optional
    quality: null, // optional
    output: Output::JPG() // optional
);```
