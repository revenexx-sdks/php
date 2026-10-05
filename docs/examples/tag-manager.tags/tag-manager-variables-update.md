```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerVariablesCreateKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesUpdate(
    id: '',
    code: '', // optional
    constantValue: , // optional
    kind: TagManagerVariablesCreateKind::EVENTFIELD(), // optional
    name: '', // optional
    path: '' // optional
);```
