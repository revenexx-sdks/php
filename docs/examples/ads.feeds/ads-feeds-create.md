```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsFeeds;
use Revenexx\Enums\Destination;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsFeeds = new AdsFeeds($client);

$result = $adsFeeds->adsFeedsCreate(
    destination: Destination::GOOGLEMERCHANTCENTER(),
    market: '',
    active: true, // optional
    feedId: '', // optional
    feedUrl: '', // optional
    label: '', // optional
    metadata:  // optional
);```
