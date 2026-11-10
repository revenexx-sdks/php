# documents.kinds

## documents-kinds-list

List the document kinds this merchant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\Tone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsList(
    id: '', // optional
    code: 'invoice', // optional
    title: 'Invoice', // optional
    description: 'What the buyer owes for an order.', // optional
    isDefault: true, // optional
    active: true, // optional
    tone: Tone::NEUTRAL(), // optional
    position: 0, // optional
    isSystem: true, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## documents-kinds-create

Add a document kind of your own

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\DocumentKindTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsCreate(
    code: 'invoice',
    title: 'Invoice',
    active: true, // optional
    description: 'What the buyer owes for an order.', // optional
    descriptions: [
        'de' => 'Was der Käufer für eine Bestellung schuldet.',
        'en' => 'What the buyer owes for an order.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 0, // optional
    tone: DocumentKindTone::INFO() // optional
);```

## documents-kinds-defaults

Seed the four document kinds an order produces

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsDefaults(
    data: []
);```

## documents-kinds-delete

Remove one document kind

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsDelete(
    id: ''
);```

## documents-kinds-get

Read one document kind

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsGet(
    id: ''
);```

## documents-kinds-update

Edit one document kind

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\DocumentKindTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsUpdate(
    id: '',
    active: true, // optional
    code: 'invoice', // optional
    description: 'What the buyer owes for an order.', // optional
    descriptions: [
        'de' => 'Was der Käufer für eine Bestellung schuldet.',
        'en' => 'What the buyer owes for an order.'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Rechnung',
        'en' => 'Invoice'
    ], // optional
    position: 0, // optional
    title: 'Invoice', // optional
    tone: DocumentKindTone::INFO() // optional
);```

## documents-kinds-make-default

Make one document kind the default

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsKindsMakeDefault(
    id: ''
);```

## documents-vocabularies-list

List the vocabularies this app owns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsVocabulariesList();
```

## documents-vocabularies-get

Read one vocabulary with its values

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsKinds;
use Revenexx\Enums\DocumentVocabularyPathName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsKinds = new DocumentsKinds($client);

$result = $documentsKinds->documentsVocabulariesGet(
    name: DocumentVocabularyPathName::KINDS()
);```
