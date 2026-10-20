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
