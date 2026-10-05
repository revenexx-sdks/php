```php
<?php

use Revenexx\Client;
use Revenexx\Services\ConsentManagerRecords;
use Revenexx\Enums\Action;
use Revenexx\Enums\Surface;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$consentManagerRecords = new ConsentManagerRecords($client);

$result = $consentManagerRecords->consentManagerRecordsCreate(
    action: Action::ACCEPTALL(),
    consentId: '',
    locale: 'de',
    policyVersionId: '',
    surface: Surface::FIRSTLAYER(),
    clientTs: '2026-01-01T12:00:00Z', // optional
    decisions: [], // optional
    pagePath: '/produkte/schrauben', // optional
    userAgentClass: 'Firefox 131' // optional
);```
