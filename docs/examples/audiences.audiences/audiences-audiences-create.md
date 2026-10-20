```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;
use Revenexx\Enums\Kind;
use Revenexx\Enums\RuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesCreate(
    code: '',
    active: true, // optional
    description: '', // optional
    externalId: '', // optional
    externalRefs: , // optional
    kind: Kind::ACTIVE(), // optional
    labels: , // optional
    metadata: , // optional
    ruleMatch: RuleMatch::ALL(), // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z' // optional
);```
