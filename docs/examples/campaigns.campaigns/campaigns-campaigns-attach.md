```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\AssetApp;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsAttach(
    id: '',
    adCampaignLinkId: '', // optional
    assetApp: AssetApp::PROMOTIONS(), // optional
    assetEntity: '', // optional
    assetId: '', // optional
    formId: '', // optional
    journeyId: '', // optional
    label: '', // optional
    libraryItemId: '', // optional
    mailingId: '', // optional
    pageId: '', // optional
    promotionId: '' // optional
);```
