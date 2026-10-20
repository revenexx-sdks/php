```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyPoints;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyPoints = new LoyaltyPoints($client);

$result = $loyaltyPoints->loyaltyPointsAward(
    points: 1,
    contactId: '', // optional
    key: '', // optional
    membershipId: '', // optional
    organizationId: '', // optional
    programCode: '', // optional
    reason: '' // optional
);```
