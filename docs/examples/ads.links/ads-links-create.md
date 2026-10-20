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
