```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsSubscriptionsConfirm(
    token: '',
    purchaseRequestId: '',
    allocations: [], // optional
    currency: '', // optional
    note: '', // optional
    orderId: '' // optional
);```
