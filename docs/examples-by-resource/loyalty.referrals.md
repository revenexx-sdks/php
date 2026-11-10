# loyalty.referrals

## loyalty-referrals-codes-list

List referral codes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsCodesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    membershipId: '', // optional
    contactId: '', // optional
    code: '', // optional
    uses: '', // optional
    active: '' // optional
);```

## loyalty-referrals-codes-get

Read one referral code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsCodesGet(
    id: ''
);```

## loyalty-referrals-codes-deactivate

Retire a referral code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsCodesDeactivate(
    id: '',
    data: []
);```

## loyalty-referrals-list

List referrals

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    referralCodeId: '', // optional
    referrerMembershipId: '', // optional
    referrerContactId: '', // optional
    refereeContactId: '', // optional
    state: '', // optional
    orderId: '', // optional
    reason: '', // optional
    refereeVoucherCode: '', // optional
    referrerVoucherCode: '' // optional
);```

## loyalty-referrals-claim

Claim a referral code for a new customer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsClaim(
    code: '',
    contactId: ''
);```

## loyalty-referrals-get

Read one referral

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsGet(
    id: ''
);```

## loyalty-referrals-reject

Reject a referral with a reason

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsReject(
    id: '',
    reason: ''
);```

## loyalty-referrals-reward

Issue the referrer reward of a qualified referral again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\LoyaltyReferrals;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$loyaltyReferrals = new LoyaltyReferrals($client);

$result = $loyaltyReferrals->loyaltyReferralsReward(
    id: '',
    data: []
);```
