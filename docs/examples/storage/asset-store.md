```php
<?php

use Revenexx\Client;
use Revenexx\InputFile;
use Revenexx\Services\Storage;
use Revenexx\Enums\Visibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->assetStore(
    file: InputFile::withPath('file.png'),
    altText: '', // optional
    description: '', // optional
    displayName: '', // optional
    folderId: '', // optional
    keepArchive: true, // optional
    tags: [], // optional
    unpack: true, // optional
    visibility: Visibility::PUBLIC() // optional
);```
