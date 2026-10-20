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
