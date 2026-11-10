# ads.conversions

## ads-conversions-list

List recorded conversions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsConversions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsConversions = new AdsConversions($client);

$result = $adsConversions->adsConversionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    ruleId: '', // optional
    adAccountId: '', // optional
    eventKey: '', // optional
    event: '', // optional
    platform: '', // optional
    sourceRef: '', // optional
    orderId: '', // optional
    clickId: '', // optional
    clickIdKind: '', // optional
    hashedEmail: '', // optional
    currency: '', // optional
    state: '', // optional
    attempts: '', // optional
    externalRef: '', // optional
    lastError: '' // optional
);```

## ads-conversions-get

Read one conversion

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsConversions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsConversions = new AdsConversions($client);

$result = $adsConversions->adsConversionsGet(
    id: ''
);```

## ads-conversions-result

Report whether a conversion was sent

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsConversions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsConversions = new AdsConversions($client);

$result = $adsConversions->adsConversionsResult(
    id: '',
    error: '', // optional
    externalRef: '', // optional
    ok: true // optional
);```

## ads-conversions-retry

Put a failed conversion back in line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsConversions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsConversions = new AdsConversions($client);

$result = $adsConversions->adsConversionsRetry(
    id: '',
    data: []
);```
