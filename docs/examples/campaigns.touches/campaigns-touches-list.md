```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTouches;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTouches = new CampaignsTouches($client);

$result = $campaignsTouches->campaignsTouchesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    touchKey: '', // optional
    campaignId: '', // optional
    kind: '', // optional
    ref: '', // optional
    contactId: '', // optional
    sessionKey: '', // optional
    orderId: '', // optional
    market: '' // optional
);```
