# ads.rules

## ads-rules-list

List conversion rules

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsRules = new AdsRules($client);

$result = $adsRules->adsRulesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    adAccountId: '', // optional
    name: '', // optional
    event: '', // optional
    valueSource: '', // optional
    externalConversionRef: '', // optional
    consentPurpose: '', // optional
    active: '' // optional
);```

## ads-rules-create

Add a conversion rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsRules;
use Revenexx\Enums\Event;
use Revenexx\Enums\ValueSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsRules = new AdsRules($client);

$result = $adsRules->adsRulesCreate(
    adAccountId: '',
    event: Event::ORDERPLACED(),
    name: '',
    active: true, // optional
    consentPurpose: '', // optional
    externalConversionRef: '', // optional
    fixedValue: 9.99, // optional
    metadata: , // optional
    valueSource: ValueSource::ORDERNET() // optional
);```

## ads-rules-delete

Delete a rule that recorded nothing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsRules = new AdsRules($client);

$result = $adsRules->adsRulesDelete(
    id: ''
);```

## ads-rules-get

Read one conversion rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsRules = new AdsRules($client);

$result = $adsRules->adsRulesGet(
    id: ''
);```

## ads-rules-update

Correct a conversion rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsRules;
use Revenexx\Enums\Event;
use Revenexx\Enums\ValueSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsRules = new AdsRules($client);

$result = $adsRules->adsRulesUpdate(
    id: '',
    active: true, // optional
    adAccountId: '', // optional
    consentPurpose: '', // optional
    event: Event::ORDERPLACED(), // optional
    externalConversionRef: '', // optional
    fixedValue: 9.99, // optional
    metadata: , // optional
    name: '', // optional
    valueSource: ValueSource::ORDERNET() // optional
);```
