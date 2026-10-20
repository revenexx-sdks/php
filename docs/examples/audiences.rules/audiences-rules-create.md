```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesRules;
use Revenexx\Enums\Channel;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesRules = new AudiencesRules($client);

$result = $audiencesRules->audiencesRulesCreate(
    audienceId: '',
    channel: Channel::EMAIL(), // optional
    field: '', // optional
    kind: AudiencesRulesCreateKind::GROUP(), // optional
    matchMode: MatchMode::ALL(), // optional
    negate: true, // optional
    operator: '', // optional
    parentId: '', // optional
    position: 1, // optional
    subject: '', // optional
    value: , // optional
    valueTo: , // optional
    windowDays: 1 // optional
);```
