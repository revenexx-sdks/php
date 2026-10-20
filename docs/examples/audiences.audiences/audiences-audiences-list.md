```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    description: '', // optional
    kind: '', // optional
    ruleMatch: '', // optional
    active: '', // optional
    memberCount: '', // optional
    eligibleCount: '', // optional
    rulesSummary: '', // optional
    recomputeState: '', // optional
    recomputeError: '', // optional
    frozenFromId: '' // optional
);```
