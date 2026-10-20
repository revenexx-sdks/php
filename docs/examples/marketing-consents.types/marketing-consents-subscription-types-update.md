```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsTypes;
use Revenexx\Enums\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsTypes = new MarketingConsentsTypes($client);

$result = $marketingConsentsTypes->marketingConsentsSubscriptionTypesUpdate(
    id: '',
    allowsExistingCustomer: true, // optional
    channels: [Channels::EMAIL(), Channels::SMS()], // optional
    code: 'newsletter', // optional
    descriptions: [], // optional
    labels: [
        'de' => 'Newsletter',
        'en' => 'Newsletter'
    ], // optional
    position: 10, // optional
    requiresDoi: true, // optional
    similarGoodsNote: [
        'de' => 'Ersatzteile und Zubehör zu gekauften Geräten.',
        'en' => 'Spare parts and accessories for purchased devices.'
    ] // optional
);```
