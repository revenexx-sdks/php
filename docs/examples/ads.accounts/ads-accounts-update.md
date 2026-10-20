```php
<?php

use Revenexx\Client;
use Revenexx\Services\AdsAccounts;
use Revenexx\Enums\Platform;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$adsAccounts = new AdsAccounts($client);

$result = $adsAccounts->adsAccountsUpdate(
    id: '',
    clicksTotal: 1, // optional
    connectionRef: '', // optional
    conversionValueTotal: 9.99, // optional
    conversionsTotal: 1, // optional
    currency: '', // optional
    externalAccountId: '', // optional
    externalRefs: , // optional
    figuresAt: '2026-01-01T12:00:00Z', // optional
    metadata: , // optional
    name: '', // optional
    platform: Platform::META(), // optional
    roas: 9.99, // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    spendTotal: 9.99 // optional
);```
