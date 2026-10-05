```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRegistry;
use Revenexx\Enums\Kind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRegistry = new ConsentManagerRegistry($client);

$result = $consentManagerRegistry->consentManagerCookiesCreate(
    name: '_ga',
    vendorId: '',
    description: [], // optional
    duration: [
        'de' => '2 Jahre',
        'en' => '2 years'
    ], // optional
    host: 'first-party', // optional
    kind: Kind::COOKIE(), // optional
    position: 1 // optional
);```
