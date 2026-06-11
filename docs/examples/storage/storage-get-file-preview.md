```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Storage;
use RevenexxAPIRevenexx\Enums\Gravity;
use RevenexxAPIRevenexx\Enums\Output;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->storageGetFilePreview(
    bucketId: '',
    fileId: '',
    width: null, // optional
    height: null, // optional
    gravity: Gravity::CENTER(), // optional
    quality: null, // optional
    borderWidth: null, // optional
    borderColor: '', // optional
    borderRadius: null, // optional
    opacity: null, // optional
    rotation: null, // optional
    background: '', // optional
    output: Output::JPG(), // optional
    token: '' // optional
);```
