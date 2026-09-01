```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Format;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->createExport(
    app: '',
    entity: '',
    vendor: '',
    format: Format::CSV(), // optional
    profileId: '' // optional
);```
