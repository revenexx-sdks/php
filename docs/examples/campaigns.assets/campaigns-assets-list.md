```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsAssets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsAssets = new CampaignsAssets($client);

$result = $campaignsAssets->campaignsAssetsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    campaignId: '', // optional
    assetApp: '', // optional
    assetEntity: '', // optional
    assetId: '', // optional
    label: '', // optional
    claim: '', // optional
    addedBy: '' // optional
);```
