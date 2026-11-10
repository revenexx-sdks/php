# ads.feeds

## ads-feeds-list

List the product feeds handed to ad platforms

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

## ads-feeds-create

Name the seo feed of a market for a destination

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

## ads-feeds-delete

Remove a feed reference

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

$result = $adsFeeds->adsFeedsDelete(
    id: ''
);```

## ads-feeds-get

Read one feed reference

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

$result = $adsFeeds->adsFeedsGet(
    id: ''
);```

## ads-feeds-update

Change a feed reference

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

$result = $adsFeeds->adsFeedsUpdate(
    id: '',
    active: true, // optional
    destination: Destination::GOOGLEMERCHANTCENTER(), // optional
    feedId: '', // optional
    feedUrl: '', // optional
    label: '', // optional
    market: '', // optional
    metadata:  // optional
);```
