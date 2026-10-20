```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;
use Revenexx\Enums\RuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesPreview(
    id: '',
    ruleMatch: RuleMatch::ALL(), // optional
    rules: [] // optional
);```
