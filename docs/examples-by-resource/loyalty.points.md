# loyalty.points

## loyalty-points-list

List point bookings

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

$result = $loyaltyPoints->loyaltyPointsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    membershipId: '', // optional
    entryKey: '', // optional
    kind: '', // optional
    points: '', // optional
    remaining: '', // optional
    orderId: '', // optional
    rewardId: '', // optional
    redemptionId: '', // optional
    reason: '' // optional
);```

## loyalty-points-get

Read one point booking

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

$result = $loyaltyPoints->loyaltyPointsGet(
    id: ''
);```

## loyalty-points-award

Credit points to a member for a reason

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
