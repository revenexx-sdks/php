```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerTagsCreateKind;
use Revenexx\Enums\Load;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsUpdate(
    id: '',
    chainedVendorCodes: [], // optional
    code: '', // optional
    config: [], // optional
    description: '', // optional
    eventMap: [], // optional
    isActive: true, // optional
    kind: TagManagerTagsCreateKind::REGISTRY(), // optional
    load: Load::IMMEDIATE(), // optional
    name: '', // optional
    purposeCode: '', // optional
    registryKey: '', // optional
    scriptUrl: '', // optional
    vendorCode: '' // optional
);```
