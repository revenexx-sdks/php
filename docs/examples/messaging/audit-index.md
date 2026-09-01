```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\ResourceType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->auditIndex(
    resourceType: ResourceType::TEMPLATE(), // optional
    resourceId: '', // optional
    subject: '', // optional
    limit: 1 // optional
);```
