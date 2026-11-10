# ads.links

## ads-links-list

List ad campaigns and their campaigns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsLinks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsLinks = new AdsLinks($client);

$result = $adsLinks->adsLinksList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    adAccountId: '', // optional
    externalCampaignId: '', // optional
    externalName: '', // optional
    campaignId: '' // optional
);```

## ads-links-create

List an ad campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsLinks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsLinks = new AdsLinks($client);

$result = $adsLinks->adsLinksCreate(
    adAccountId: '',
    externalCampaignId: '',
    campaignId: '', // optional
    externalName: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```

## ads-links-delete

Remove an ad campaign without spend

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsLinks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsLinks = new AdsLinks($client);

$result = $adsLinks->adsLinksDelete(
    id: ''
);```

## ads-links-get

Read one ad campaign link

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsLinks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsLinks = new AdsLinks($client);

$result = $adsLinks->adsLinksGet(
    id: ''
);```

## ads-links-update

Map an ad campaign to a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsLinks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsLinks = new AdsLinks($client);

$result = $adsLinks->adsLinksUpdate(
    id: '',
    adAccountId: '', // optional
    campaignId: '', // optional
    externalCampaignId: '', // optional
    externalName: '', // optional
    externalRefs: , // optional
    metadata: , // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
