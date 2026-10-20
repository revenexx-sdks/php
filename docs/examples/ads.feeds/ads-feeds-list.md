```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsFeeds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsFeeds = new AdsFeeds($client);

$result = $adsFeeds->adsFeedsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    market: '', // optional
    destination: '', // optional
    feedId: '', // optional
    feedUrl: '', // optional
    label: '', // optional
    active: '' // optional
);```
