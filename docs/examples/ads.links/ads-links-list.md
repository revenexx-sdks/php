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
