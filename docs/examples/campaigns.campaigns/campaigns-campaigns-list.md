```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    description: '', // optional
    status: '', // optional
    effectiveState: '', // optional
    ownerId: '', // optional
    utmCampaign: '', // optional
    goalMetric: '', // optional
    currency: '', // optional
    ordersCount: '', // optional
    externalId: '' // optional
);```
