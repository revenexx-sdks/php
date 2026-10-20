```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyMemberships;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyMemberships = new LoyaltyMemberships($client);

$result = $loyaltyMemberships->loyaltyMembershipsProgress(
    id: ''
);```
