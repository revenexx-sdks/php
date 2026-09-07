```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;
use Revenexx\Enums\ApproverType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesCreate(
    condition: Condition::ALWAYS(),
    effect: Effect::PENDINGORDER(),
    name: '',
    active: true, // optional
    approverRef: '', // optional
    approverType: ApproverType::CONTACT(), // optional
    conditionParameters: [], // optional
    costCenterId: '', // optional
    effectParameters: [], // optional
    metadata: [], // optional
    sequence: 1, // optional
    showCondition: true // optional
);```
