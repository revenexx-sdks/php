```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Messaging;
use RevenexxAPIRevenexx\Enums\Priority;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->messagingUpdatePush(
    messageId: '',
    action: '', // optional
    badge: null, // optional
    body: '', // optional
    color: '', // optional
    contentAvailable: null, // optional
    critical: null, // optional
    data: [], // optional
    draft: null, // optional
    icon: '', // optional
    image: '', // optional
    priority: Priority::NORMAL(), // optional
    scheduledAt: '', // optional
    sound: '', // optional
    tag: '', // optional
    targets: [], // optional
    title: '', // optional
    topics: [], // optional
    users: [] // optional
);```
