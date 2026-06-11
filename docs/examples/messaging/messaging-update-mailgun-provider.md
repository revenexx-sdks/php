```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->messagingUpdateMailgunProvider(
    providerId: '',
    apiKey: '', // optional
    domain: '', // optional
    enabled: null, // optional
    fromEmail: '', // optional
    fromName: '', // optional
    isEuRegion: null, // optional
    name: '', // optional
    replyToEmail: '', // optional
    replyToName: '' // optional
);```
