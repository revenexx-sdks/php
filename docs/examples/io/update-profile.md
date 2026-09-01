```php
<?php

use Revenexx\Client;
use Revenexx\Services\Io;
use Revenexx\Enums\Direction;
use Revenexx\Enums\ApplyMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$io = new Io($client);

$result = $io->updateProfile(
    id: '',
    app: '',
    direction: Direction::IMPORT(),
    entity: '',
    format: '',
    name: '',
    vendor: '',
    applyMode: ApplyMode::UPSERT(), // optional
    mapping: [], // optional
    markets: [], // optional
    options: [] // optional
);```
