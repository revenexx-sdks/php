# forms

## forms-list

List forms

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsList(
    id: '', // optional
    name: 'Contact request', // optional
    slug: 'contact', // optional
    status: FormStatus::DRAFT(), // optional
    campaignRef: '', // optional
    leadStage: 'lead', // optional
    createdAt: '2026-01-31T09:15:00Z', // optional
    updatedAt: '2026-01-31T09:15:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## forms-create

Create a form

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsCreate(
    name: 'Price request',
    slug: 'price-request',
    campaignRef: '', // optional
    definition: [{"$formkit":"text","label":"Company","name":"company","validation":"required"},{"$formkit":"email","label":"Email","name":"email","validation":"required|email"},{"$formkit":"textarea","label":"What do you need a price for?","name":"message","rows":4},{"$el":"p","children":"We answer price requests within one working day."}], // optional
    leadStage: 'lead', // optional
    metadata: [], // optional
    settings: [], // optional
    status: FormStatus::DRAFT() // optional
);```

## forms-defaults

Seed the sample contact form

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsDefaults();
```

## forms-submissions-list

List submissions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormSubmissionStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsList(
    id: '', // optional
    formId: '', // optional
    formSlug: 'contact', // optional
    source: '/contact', // optional
    status: FormSubmissionStatus::NEW(), // optional
    contactId: '', // optional
    pageUrl: 'https://example.com/kontakt', // optional
    campaignRef: '', // optional
    leadStage: 'lead', // optional
    createdAt: '2026-01-31T09:15:00Z', // optional
    updatedAt: '2026-01-31T09:15:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## forms-submissions-create

Record a submission

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsCreate(
    data: [
        'company' => 'Example GmbH',
        'email' => 'buyer@example.com',
        'message' => 'Please quote 200 units of ACME-4711-BLK, delivered to Hamburg.'
    ],
    formId: '',
    campaignRef: '', // optional
    ip: '203.0.113.10', // optional
    locale: 'de-DE', // optional
    metadata: [], // optional
    pageUrl: 'https://example.com/kontakt', // optional
    source: '/contact', // optional
    userAgent: 'Mozilla/5.0' // optional
);```

## forms-submissions-prune

Prune submissions past retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormsSubmissionsPruneStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsPrune(
    dryRun: true, // optional
    formSlug: 'contact', // optional
    olderThanDays: 1, // optional
    status: FormsSubmissionsPruneStatus::NEW() // optional
);```

## forms-submissions-delete

Delete a submission

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsDelete(
    id: ''
);```

## forms-submissions-get

Read one submission

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsGet(
    id: ''
);```

## forms-submissions-update

Update a submission

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormSubmissionStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsSubmissionsUpdate(
    id: '',
    data: [
        'company' => 'Example GmbH',
        'email' => 'buyer@example.com',
        'message' => 'Please quote 200 units of ACME-4711-BLK, delivered to Hamburg.'
    ], // optional
    formId: '', // optional
    formSlug: 'contact', // optional
    metadata: [], // optional
    source: '/contact', // optional
    status: FormSubmissionStatus::NEW() // optional
);```

## forms-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsVocabulariesList();
```

## forms-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsVocabulariesGet(
    name: FormsVocabulariesGetName::FORMSTATUSES()
);```

## forms-delete

Delete a form

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsDelete(
    id: ''
);```

## forms-get

Read one form

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsGet(
    id: ''
);```

## forms-update

Update a form

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Forms;
use Revenexx\Enums\FormStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$forms = new Forms($client);

$result = $forms->formsUpdate(
    id: '',
    campaignRef: '', // optional
    definition: [{"$formkit":"text","label":"Company","name":"company","validation":"required"},{"$formkit":"email","label":"Email","name":"email","validation":"required|email"},{"$formkit":"textarea","label":"What do you need a price for?","name":"message","rows":4},{"$el":"p","children":"We answer price requests within one working day."}], // optional
    leadStage: 'lead', // optional
    metadata: [], // optional
    name: 'Price request', // optional
    settings: [], // optional
    slug: 'price-request', // optional
    status: FormStatus::DRAFT() // optional
);```
