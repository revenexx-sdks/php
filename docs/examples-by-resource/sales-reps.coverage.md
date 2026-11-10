# sales-reps.coverage

## sales-reps-assignment-roles-list

List the roles this merchant keeps for coverage

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesList(
    id: '', // optional
    code: 'field_sales', // optional
    title: 'Field sales', // optional
    description: 'Visits the customer. The rep who travels to the account.', // optional
    isDefault: true, // optional
    active: true, // optional
    tone: Tone::NEUTRAL(), // optional
    position: 1, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## sales-reps-assignment-roles-create

Add one role

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesCreate(
    code: 'field_sales',
    title: 'Field sales',
    active: true, // optional
    description: 'Visits the customer. The rep who travels to the account.', // optional
    descriptions: [
        'de' => 'Besucht den Kunden.',
        'en' => 'Visits the customer.'
    ], // optional
    isDefault: true, // optional
    isSystem: true, // optional
    labels: [
        'de' => 'Außendienst',
        'en' => 'Field sales'
    ], // optional
    position: 1, // optional
    tone: Tone::NEUTRAL() // optional
);```

## sales-reps-assignment-roles-defaults

Seed the roles this app ships

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesDefaults(
    data: []
);```

## sales-reps-assignment-roles-delete

Remove one role

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesDelete(
    id: ''
);```

## sales-reps-assignment-roles-get

Read one role

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesGet(
    id: ''
);```

## sales-reps-assignment-roles-update

Rename, re-tone or reorder one role

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentRolesUpdate(
    id: '',
    active: true, // optional
    code: 'field_sales', // optional
    description: 'Visits the customer. The rep who travels to the account.', // optional
    descriptions: [
        'de' => 'Besucht den Kunden.',
        'en' => 'Visits the customer.'
    ], // optional
    isDefault: true, // optional
    isSystem: true, // optional
    labels: [
        'de' => 'Außendienst',
        'en' => 'Field sales'
    ], // optional
    position: 1, // optional
    title: 'Field sales', // optional
    tone: Tone::NEUTRAL() // optional
);```

## sales-reps-assignments-list

List which rep carries which customer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsList(
    id: '', // optional
    repCode: 'VK-04711', // optional
    organizationId: '', // optional
    role: 'field_sales', // optional
    isPrimary: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## sales-reps-assignments-create

Give one customer to one rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsCreate(
    organizationId: '',
    repCode: 'VK-04711',
    role: 'field_sales' // optional
);```

## sales-reps-assignments-delete

Take one customer off one rep

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsDelete(
    id: ''
);```

## sales-reps-assignments-get

Read one assignment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsGet(
    id: ''
);```

## sales-reps-assignments-update

Correct what a rep does for one customer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsUpdate(
    id: '',
    role: 'field_sales' // optional
);```

## sales-reps-assignments-make-primary

Make this rep the responsible one for their customer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsAssignmentsMakePrimary(
    id: '',
    data: []
);```

## sales-reps-vocabularies-list

List the value sets this app owns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsVocabulariesList();
```

## sales-reps-vocabularies-get

Read one value set in full

```php
<?php

use Revenexx\Client;
use Revenexx\Services\SalesRepsCoverage;
use Revenexx\Enums\SalesRepsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$salesRepsCoverage = new SalesRepsCoverage($client);

$result = $salesRepsCoverage->salesRepsVocabulariesGet(
    name: SalesRepsVocabulariesGetName::ASSIGNMENTROLES()
);```
