# marketing-consents.evidence

## marketing-consents-consent-events-list

List the consent events

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsConsentEventsListKind;
use Revenexx\Enums\MarketingConsentsConsentEventsListSource;
use Revenexx\Enums\MarketingConsentsConsentEventsListLegalBasis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsConsentEventsList(
    id: '', // optional
    subscriptionId: '', // optional
    contactId: '', // optional
    subscriptionTypeId: '', // optional
    channel: Channel::EMAIL(), // optional
    addressHash: '', // optional
    kind: MarketingConsentsConsentEventsListKind::REQUESTED(), // optional
    source: MarketingConsentsConsentEventsListSource::FORM(), // optional
    sourceRef: '', // optional
    legalBasis: MarketingConsentsConsentEventsListLegalBasis::CONSENTDOI(), // optional
    consentTextId: '', // optional
    campaignRef: '', // optional
    pageUrl: '', // optional
    ip: '', // optional
    userAgent: '', // optional
    ipTruncatedAt: '2026-01-01T12:00:00Z', // optional
    at: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## marketing-consents-consent-events-get

Read one consent event

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsConsentEventsGet(
    id: ''
);```

## marketing-consents-contacts-get

Read one contact's consent record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsContactsGet(
    contactId: ''
);```

## marketing-consents-contacts-erase

Erase one contact's consents, keeping minimal proof

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsContactsErase(
    contactId: '',
    data: []
);```

## marketing-consents-contacts-export

Export one contact's consent record for an access request

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsContactsExport(
    contactId: ''
);```

## marketing-consents-imports-list

List the imports

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;
use Revenexx\Enums\Channel;
use Revenexx\Enums\MarketingConsentsImportsListLegalBasis;
use Revenexx\Enums\State;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsImportsList(
    id: '', // optional
    subscriptionTypeId: '', // optional
    channel: Channel::EMAIL(), // optional
    legalBasis: MarketingConsentsImportsListLegalBasis::CONSENTSINGLE(), // optional
    fileRef: '', // optional
    proofNote: '', // optional
    rows: 1, // optional
    accepted: 1, // optional
    rejected: 1, // optional
    state: State::RUNNING(), // optional
    createdBy: '', // optional
    finishedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## marketing-consents-imports-create

Import an existing list with its recorded basis

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;
use Revenexx\Enums\MarketingConsentsImportsListLegalBasis;
use Revenexx\Enums\Channel;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsImportsCreate(
    legalBasis: MarketingConsentsImportsListLegalBasis::CONSENTSINGLE(),
    proofNote: 'Altsystem Shopware, Double-Opt-in-Log 2019–2026',
    rows: [],
    subscriptionType: 'newsletter',
    channel: Channel::EMAIL(), // optional
    fileRef: 'newsletter-export-2026-09.csv' // optional
);```

## marketing-consents-imports-get

Read one import

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsImportsGet(
    id: ''
);```

## marketing-consents-ip-retention-run

Shorten IP addresses past their retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsIpRetentionRun(
    data: []
);```

## marketing-consents-lapse-run

Lapse unconfirmed sign-ups past their expiry

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsLapseRun(
    data: []
);```

## marketing-consents-sweep-run

Read what the event bus does not deliver yet

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MarketingConsentsEvidence;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$marketingConsentsEvidence = new MarketingConsentsEvidence($client);

$result = $marketingConsentsEvidence->marketingConsentsSweepRun(
    data: []
);```
