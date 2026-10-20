```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsPreferencesUpdate(
    token: '',
    choices: [], // optional
    ip: '', // optional
    locale: '', // optional
    unsubscribeAll: true, // optional
    userAgent: '' // optional
);```
