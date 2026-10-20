```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;
use Revenexx\Enums\TriggerKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysCreate(
    name: '',
    campaignRef: '', // optional
    currency: '', // optional
    description: '', // optional
    entry: '', // optional
    goalConfig: , // optional
    metadata: , // optional
    reenrol: true, // optional
    reenrolGapDays: 1, // optional
    steps: [], // optional
    triggerConfig: , // optional
    triggerKind: TriggerKind::EVENT() // optional
);```
