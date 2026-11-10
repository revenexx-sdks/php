# customers.segments

## customers-segment-members-list

Browse segment memberships

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\Source;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersList(
    id: '', // optional
    segmentId: '', // optional
    organizationId: '', // optional
    contactId: '', // optional
    source: Source::MANUAL(), // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-segment-members-create

Put a company into a segment by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentMemberSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersCreate(
    organizationId: '',
    segmentId: '',
    createdAt: '2026-01-01T12:00:00Z', // optional
    source: SegmentMemberSource::MANUAL() // optional
);```

## customers-segment-members-delete

Take a company out of a segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersDelete(
    id: ''
);```

## customers-segment-members-get

Read one membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersGet(
    id: ''
);```

## customers-segment-members-update

Update a membership

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentMemberSource;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentMembersUpdate(
    id: '',
    organizationId: '', // optional
    segmentId: '', // optional
    source: SegmentMemberSource::MANUAL() // optional
);```

## customers-segments-list

Browse the customer segments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\MemberType;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsList(
    id: '', // optional
    code: 'key_accounts', // optional
    position: 1, // optional
    active: true, // optional
    ruleMatch: RuleMatch::ALL(), // optional
    memberType: MemberType::ORGANIZATION(), // optional
    rulesComputedAt: '2026-01-01T12:00:00Z', // optional
    externalId: 'PREISGRUPPE-03', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: 'vertrieb@example.com', // optional
    deletedById: '', // optional
    trashBatch: '', // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    trashed: Trashed::EXCLUDE(), // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## customers-segments-create

Create a segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsCreate(
    active: true, // optional
    code: 'key_accounts', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    labels: [
        'de' => 'Großkunden',
        'en' => 'Key accounts'
    ], // optional
    position: 1, // optional
    ruleMatch: SegmentRuleMatch::ALL(), // optional
    rules: [] // optional
);```

## customers-segments-rules-recompute-all

Recompute every ruled segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsRulesRecomputeAll(
    data: []
);```

## customers-segments-trash-empty

Empty the segment trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsTrashEmpty();
```

## customers-segments-delete

Delete a segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsDelete(
    id: ''
);```

## customers-segments-get

Read one segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsGet(
    id: ''
);```

## customers-segments-update

Update a segment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\SegmentRuleMatch;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsUpdate(
    id: '',
    active: true, // optional
    code: 'key_accounts', // optional
    labels: [
        'de' => 'Großkunden',
        'en' => 'Key accounts'
    ], // optional
    position: 1, // optional
    ruleMatch: SegmentRuleMatch::ALL(), // optional
    rules: [] // optional
);```

## customers-segments-restore

Restore a segment from the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsRestore(
    id: ''
);```

## customers-segments-rules-preview

Preview a segment rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\Target;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsRulesPreview(
    segmentId: '',
    conditions: [],
    ruleMatch: RuleMatch::ALL(), // optional
    target: Target::ORGANIZATIONS() // optional
);```

## customers-segments-rules-recompute

Recompute one segment's rule memberships

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CustomersSegments;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$customersSegments = new CustomersSegments($client);

$result = $customersSegments->customersSegmentsRulesRecompute(
    segmentId: '',
    cursor: '' // optional
);```
