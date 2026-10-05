```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesTrail;
use Revenexx\Enums\Visibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesTrail = new QuotesTrail($client);

$result = $quotesTrail->quotesTrailNote(
    id: '',
    body: '',
    actor: '', // optional
    visibility: Visibility::INTERNAL() // optional
);```
