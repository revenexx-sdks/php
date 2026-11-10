# marketing-consents.subscriptions

## marketing-consents-subscriptions-confirm

Confirm a sign-up by its link

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

## marketing-consents-eligibility-check

Ask which recipients may get a marketing send of a type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;
use Revenexx\Enums\Channel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsEligibilityCheck(
    recipients: [],
    subscriptionType: 'newsletter',
    channel: Channel::EMAIL() // optional
);```

## marketing-consents-preferences-links

Issue preference centre links for addresses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;
use Revenexx\Enums\Channel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsPreferencesLinks(
    recipients: [],
    channel: Channel::EMAIL() // optional
);```

## marketing-consents-preferences-get

Read what the preference centre shows

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

$result = $marketingConsentsSubscriptions->marketingConsentsPreferencesGet(
    token: '',
    locale: 'de' // optional
);```

## marketing-consents-preferences-update

Save what a recipient chose in the preference centre

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

$result = $marketingConsentsSubscriptions->marketingConsentsPreferencesUpdate(
    token: '',
    choices: [], // optional
    ip: '', // optional
    locale: '', // optional
    unsubscribeAll: true, // optional
    userAgent: '' // optional
);```

## marketing-consents-subscriptions-list

List the subscriptions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsSubscriptionsListState;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;
use Revenexx\Enums\MarketingConsentsSubscriptionsListSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsSubscriptionsList(
    id: '', // optional
    contactId: '', // optional
    channel: Channel::EMAIL(), // optional
    address: '', // optional
    addressHash: '', // optional
    subscriptionTypeId: '', // optional
    state: MarketingConsentsSubscriptionsListState::PENDING(), // optional
    legalBasis: MarketingConsentsConsentEventsListLegalBasis::CONSENTDOI(), // optional
    consentTextId: '', // optional
    locale: '', // optional
    market: '', // optional
    campaignRef: '', // optional
    source: MarketingConsentsSubscriptionsListSource::FORM(), // optional
    sourceRef: '', // optional
    requestedAt: '2026-01-01T12:00:00Z', // optional
    confirmationSentAt: '2026-01-01T12:00:00Z', // optional
    confirmedAt: '2026-01-01T12:00:00Z', // optional
    withdrawnAt: '2026-01-01T12:00:00Z', // optional
    lapseAt: '2026-01-01T12:00:00Z', // optional
    erasedAt: '2026-01-01T12:00:00Z', // optional
    suppressionWrittenAt: '2026-01-01T12:00:00Z', // optional
    suppressionRef: '', // optional
    externalId: '', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## marketing-consents-subscriptions-request

Sign an address up for a subscription type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsSubscriptions;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsSubscriptionsRequestSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsSubscriptions = new MarketingConsentsSubscriptions($client);

$result = $marketingConsentsSubscriptions->marketingConsentsSubscriptionsRequest(
    subscriptionType: 'newsletter',
    address: '', // optional
    campaignRef: '7a8b9c0d-0000-4000-8000-000000000000', // optional
    channel: Channel::EMAIL(), // optional
    consentTextId: '', // optional
    contactId: '', // optional
    email: 'anna.berger@example.com', // optional
    firstName: '', // optional
    ip: '203.0.113.7', // optional
    lastName: '', // optional
    locale: 'de', // optional
    pageUrl: 'https://shop.example.com/newsletter', // optional
    phone: '+4915112345678', // optional
    source: MarketingConsentsSubscriptionsRequestSource::FORM(), // optional
    sourceRef: 'form:5e6f7a8b-0000-4000-8000-000000000000', // optional
    userAgent: '' // optional
);```

## marketing-consents-subscriptions-get

Read one subscription

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

$result = $marketingConsentsSubscriptions->marketingConsentsSubscriptionsGet(
    id: ''
);```

## marketing-consents-subscriptions-withdraw

Withdraw a subscription from the back office

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

$result = $marketingConsentsSubscriptions->marketingConsentsSubscriptionsWithdraw(
    id: '',
    purchaseRequestId: '',
    allocations: [], // optional
    currency: '', // optional
    note: '' // optional
);```
