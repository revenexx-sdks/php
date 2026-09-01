```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orderlists;
use Revenexx\Enums\OrderListKindTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orderlists = new Orderlists($client);

$result = $orderlists->orderlistsKindsCreate(
    code: 'reagents',
    title: 'Reagent list',
    description: 'Chemicals ordered against a standing lab protocol.', // optional
    descriptions: [
        'de' => 'Chemikalien, die nach einem festen Laborprotokoll bestellt werden.',
        'en' => 'Chemicals ordered against a standing lab protocol.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Reagenzienliste',
        'en' => 'Reagent list'
    ], // optional
    position: 2, // optional
    tone: OrderListKindTone::NEUTRAL() // optional
);```
