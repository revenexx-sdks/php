```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\GoalMetric;
use Revenexx\Enums\CampaignsCampaignsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsUpdate(
    id: '',
    code: '', // optional
    currency: '', // optional
    description: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    externalId: '', // optional
    externalRefs: , // optional
    goalMetric: GoalMetric::REVENUE(), // optional
    goalValue: 9.99, // optional
    metadata: , // optional
    name: '', // optional
    ownerId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: CampaignsCampaignsCreateStatus::DRAFT(), // optional
    tags: , // optional
    utmCampaign: '' // optional
);```
