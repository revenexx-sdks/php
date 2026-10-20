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
