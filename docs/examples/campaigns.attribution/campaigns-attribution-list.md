```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsAttribution;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsAttribution = new CampaignsAttribution($client);

$result = $campaignsAttribution->campaignsAttributionList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    factKey: '', // optional
    campaignId: '', // optional
    orderId: '', // optional
    orderNumber: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    currency: '', // optional
    market: '', // optional
    touchKind: '', // optional
    touchRef: '', // optional
    isFirstTouch: '' // optional
);```
