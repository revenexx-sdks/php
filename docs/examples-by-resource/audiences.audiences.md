# audiences.audiences

## audiences-audiences-list

List audiences

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

## audiences-audiences-create

Create an audience

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

## audiences-audiences-recompute-all

Recompute every active audience under one budget

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesRecomputeAll();
```

## audiences-audiences-empty-trash

Empty the audience trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesEmptyTrash();
```

## audiences-audiences-purge

Delete the audiences that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesPurge();
```

## audiences-audiences-delete

Move a audience to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesDelete(
    id: ''
);```

## audiences-audiences-get

Read one audience

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesGet(
    id: ''
);```

## audiences-audiences-update

Correct an audience

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

$result = $audiencesAudiences->audiencesAudiencesUpdate(
    id: '',
    active: true, // optional
    code: '', // optional
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

## audiences-audiences-freeze

Freeze an active audience into a new static one

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesFreeze(
    id: '',
    code: '', // optional
    description: '', // optional
    labels: [], // optional
    targetId: '' // optional
);```

## audiences-audiences-preview

Count who would be in an audience, writing nothing

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

## audiences-audiences-recompute

Recompute an active audience — chunked, continues where it stopped

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesRecompute(
    id: '',
    restart: true // optional
);```

## audiences-audiences-restore

Bring a audience back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesAudiencesRestore(
    id: ''
);```

## audiences-vocabularies-list

List the closed lists this app enforces

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesVocabulariesList();
```

## audiences-vocabularies-get

Read one closed list with its values and labels

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesAudiences;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesAudiences = new AudiencesAudiences($client);

$result = $audiencesAudiences->audiencesVocabulariesGet(
    name: ''
);```
