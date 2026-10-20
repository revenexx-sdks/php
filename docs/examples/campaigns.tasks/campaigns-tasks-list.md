```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    campaignId: '', // optional
    title: '', // optional
    notes: '', // optional
    assignee: '' // optional
);```
