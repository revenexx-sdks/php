# ads.spend

## ads-spend-figures

Read the spend, clicks and conversions of an ad account per day

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSpend;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSpend = new AdsSpend($client);

$result = $adsSpend->adsSpendFigures(
    id: ''
);```

## ads-spend-roas

Read the return on ad spend of a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSpend;
use Revenexx\Enums\Model;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSpend = new AdsSpend($client);

$result = $adsSpend->adsSpendRoas(
    campaignId: '',
    model: Model::FIRSTTOUCH() // optional
);```

## ads-spend-list

List imported daily ad spend

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSpend;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSpend = new AdsSpend($client);

$result = $adsSpend->adsSpendList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    adAccountId: '', // optional
    externalCampaignId: '', // optional
    linkId: '', // optional
    campaignId: '', // optional
    platform: '', // optional
    spendDate: '', // optional
    currency: '', // optional
    impressions: '', // optional
    clicks: '', // optional
    bookingState: '', // optional
    bookingError: '' // optional
);```

## ads-spend-import

Import daily ad spend per ad campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSpend;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSpend = new AdsSpend($client);

$result = $adsSpend->adsSpendImport(
    rows: []
);```

## ads-spend-get

Read one day of ad spend

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsSpend;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsSpend = new AdsSpend($client);

$result = $adsSpend->adsSpendGet(
    id: ''
);```
