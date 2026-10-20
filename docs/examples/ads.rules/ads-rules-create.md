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
