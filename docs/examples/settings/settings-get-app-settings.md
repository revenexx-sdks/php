```php
<?php

use Revenexx\Client;
use Revenexx\Services\Settings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$settings = new Settings($client);

$result = $settings->settingsGetAppSettings(
    app: '',
    market: '' // optional
);```
