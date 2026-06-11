```php
<?php

use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Services\Storage;
use RevenexxAPIRevenexx\Enums\Compression;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$storage = new Storage($client);

$result = $storage->storageUpdateBucket(
    bucketId: '',
    name: '',
    allowedFileExtensions: [], // optional
    antivirus: null, // optional
    compression: Compression::NONE(), // optional
    enabled: null, // optional
    encryption: null, // optional
    fileSecurity: null, // optional
    maximumFileSize: null, // optional
    permissions: [], // optional
    transformations: null // optional
);```
