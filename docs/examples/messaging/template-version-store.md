```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateVersionStore(
    templateId: '',
    note: '' // optional
);```
