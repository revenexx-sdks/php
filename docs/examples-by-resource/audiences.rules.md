# audiences.rules

## audiences-rules-list

List audience rules

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesRules = new AudiencesRules($client);

$result = $audiencesRules->audiencesRulesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    audienceId: '', // optional
    parentId: '', // optional
    kind: '', // optional
    matchMode: '', // optional
    negate: '', // optional
    subject: '', // optional
    field: '', // optional
    operator: '', // optional
    windowDays: '', // optional
    channel: '', // optional
    position: '' // optional
);```

## audiences-rules-create

Add a rule or a group to an audience

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

## audiences-rules-delete

Remove a rule (and, for a group, what it holds)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesRules = new AudiencesRules($client);

$result = $audiencesRules->audiencesRulesDelete(
    id: ''
);```

## audiences-rules-get

Read one rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesRules;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesRules = new AudiencesRules($client);

$result = $audiencesRules->audiencesRulesGet(
    id: ''
);```

## audiences-rules-update

Correct a rule

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

$result = $audiencesRules->audiencesRulesUpdate(
    id: '',
    audienceId: '', // optional
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
