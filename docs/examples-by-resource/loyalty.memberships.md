# loyalty.memberships

## loyalty-memberships-list

List members

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

$result = $loyaltyMemberships->loyaltyMembershipsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    programId: '', // optional
    holder: '', // optional
    holderKey: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    tierId: '', // optional
    tierCode: '', // optional
    status: '', // optional
    pointsBalance: '', // optional
    pointsPeriod: '', // optional
    pointsLifetime: '', // optional
    market: '', // optional
    externalId: '' // optional
);```

## loyalty-memberships-create

Enrol a contact or a company

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyMemberships;
use Revenexx\Enums\LoyaltyMembershipsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyMemberships = new LoyaltyMemberships($client);

$result = $loyaltyMemberships->loyaltyMembershipsCreate(
    programId: '',
    contactId: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    market: '', // optional
    metadata: , // optional
    organizationId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: LoyaltyMembershipsCreateStatus::ACTIVE() // optional
);```

## loyalty-memberships-lookup

Read the tier, perks, balance and bonus agreement of a contact or company

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

$result = $loyaltyMemberships->loyaltyMembershipsLookup(
    contactId: '', // optional
    organizationId: '' // optional
);```

## loyalty-memberships-delete

Delete a membership with no bookings

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

$result = $loyaltyMemberships->loyaltyMembershipsDelete(
    id: ''
);```

## loyalty-memberships-get

Read one membership

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

$result = $loyaltyMemberships->loyaltyMembershipsGet(
    id: ''
);```

## loyalty-memberships-update

Pause, resume or end a membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyMemberships;
use Revenexx\Enums\LoyaltyMembershipsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyMemberships = new LoyaltyMemberships($client);

$result = $loyaltyMemberships->loyaltyMembershipsUpdate(
    id: '',
    contactId: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    market: '', // optional
    metadata: , // optional
    organizationId: '', // optional
    programId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    status: LoyaltyMembershipsCreateStatus::ACTIVE() // optional
);```

## loyalty-memberships-adjust

Correct a member balance by hand

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

$result = $loyaltyMemberships->loyaltyMembershipsAdjust(
    id: '',
    points: 1,
    reason: '',
    key: '' // optional
);```

## loyalty-memberships-progress

Read the way of a member to the next tier

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

## loyalty-memberships-referral-code

Read or make the referral code of a member

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

$result = $loyaltyMemberships->loyaltyMembershipsReferralCode(
    id: '',
    contactId: '' // optional
);```
