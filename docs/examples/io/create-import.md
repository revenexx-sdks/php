```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Format;
use Revenexx\Enums\Mode;
use Revenexx\Enums\CreateImportTarget;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createImport(
    app: '',
    entity: '',
    objectKey: '',
    vendor: '',
    format: Format::CSV(), // optional
    keys: [], // optional
    maxRejects: 1, // optional
    mode: Mode::UPSERT(), // optional
    profileId: '', // optional
    target: CreateImportTarget::LIVE() // optional
);```
