```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ApproverType;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesUpdate(
    id: '',
    active: true, // optional
    approverRef: '', // optional
    approverType: ApproverType::CONTACT(), // optional
    condition: Condition::ALWAYS(), // optional
    conditionParameters: [], // optional
    costCenterId: '', // optional
    effect: Effect::PENDINGORDER(), // optional
    effectParameters: [], // optional
    metadata: [], // optional
    name: '', // optional
    sequence: 1, // optional
    showCondition: true // optional
);```
