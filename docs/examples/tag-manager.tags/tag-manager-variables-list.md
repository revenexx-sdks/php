```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    kind: '', // optional
    path: '', // optional
    createdAt: '', // optional
    updatedAt: '' // optional
);```
