# documents.register

## documents-documents-list

List the documents filed against a transaction

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;
use Revenexx\Enums\DocumentsDocumentsListSource;
use Revenexx\Enums\Visibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsList(
    id: '', // optional
    entityType: 'order', // optional
    entityId: '', // optional
    organizationId: '', // optional
    kind: 'invoice', // optional
    number: 'RE-2026-004711', // optional
    source: DocumentsDocumentsListSource::STORAGE(), // optional
    storageAssetId: 'ast_8f2b1c4d9e', // optional
    deliveryPath: 'documents/2026/09/RE-2026-004711.pdf', // optional
    externalUrl: 'https://files.example.test/ls/LS-2026-008812.pdf', // optional
    filename: 'RE-2026-004711.pdf', // optional
    contentType: 'application/pdf', // optional
    byteSize: 148213, // optional
    issuedAt: '2026-09-28', // optional
    dueDate: '2026-09-28', // optional
    totalAmount: 1284.5, // optional
    currency: 'EUR', // optional
    visibility: Visibility::INTERNAL(), // optional
    externalId: 'BC-INV-000412', // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```

## documents-documents-create

Record a document, or update the one its source already filed

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;
use Revenexx\Enums\DocumentSource;
use Revenexx\Enums\DocumentVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsCreate(
    entityId: '',
    entityType: 'order',
    filename: 'RE-2026-004711.pdf',
    kind: 'invoice',
    byteSize: 148213, // optional
    contentType: 'application/pdf', // optional
    currency: 'EUR', // optional
    deliveryPath: 'documents/2026/09/RE-2026-004711.pdf', // optional
    dueDate: '2026-10-28', // optional
    externalId: 'BC-INV-000412', // optional
    externalRefs: [
        'archive' => 'ARC-2026-99817',
        'business-central' => 'BC-INV-000412'
    ], // optional
    externalUrl: 'https://files.example.test/ls/LS-2026-008812.pdf', // optional
    issuedAt: '2026-09-28', // optional
    metadata: [
        'erp_series' => 'RE'
    ], // optional
    number: 'RE-2026-004711', // optional
    organizationId: '', // optional
    source: DocumentSource::STORAGE(), // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Belegart' => 'Rechnung'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-09-28T05:45:00.000Z', // optional
    storageAssetId: 'ast_8f2b1c4d9e', // optional
    totalAmount: 1284.5, // optional
    visibility: DocumentVisibility::CUSTOMER() // optional
);```

## documents-documents-delete

Remove one document from the register

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsDelete(
    id: ''
);```

## documents-documents-get

Read one document

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsGet(
    id: ''
);```

## documents-documents-update

Edit one document

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;
use Revenexx\Enums\DocumentSource;
use Revenexx\Enums\DocumentVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsUpdate(
    id: '',
    byteSize: 148213, // optional
    contentType: 'application/pdf', // optional
    currency: 'EUR', // optional
    deliveryPath: 'documents/2026/09/RE-2026-004711.pdf', // optional
    dueDate: '2026-10-28', // optional
    entityId: '', // optional
    entityType: 'order', // optional
    externalId: 'BC-INV-000412', // optional
    externalRefs: [
        'archive' => 'ARC-2026-99817',
        'business-central' => 'BC-INV-000412'
    ], // optional
    externalUrl: 'https://files.example.test/ls/LS-2026-008812.pdf', // optional
    filename: 'RE-2026-004711.pdf', // optional
    issuedAt: '2026-09-28', // optional
    kind: 'invoice', // optional
    metadata: [
        'erp_series' => 'RE'
    ], // optional
    number: 'RE-2026-004711', // optional
    organizationId: '', // optional
    source: DocumentSource::STORAGE(), // optional
    sourceData: [
        'etag' => 'W/"JzQ0O0c2"',
        'raw' => [
            'Belegart' => 'Rechnung'
        ],
        'system' => 'business-central'
    ], // optional
    sourceSyncedAt: '2026-09-28T05:45:00.000Z', // optional
    storageAssetId: 'ast_8f2b1c4d9e', // optional
    totalAmount: 1284.5, // optional
    visibility: DocumentVisibility::CUSTOMER() // optional
);```

## documents-documents-link

Mint a short-lived link to one document's bytes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\DocumentsRegister;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$documentsRegister = new DocumentsRegister($client);

$result = $documentsRegister->documentsDocumentsLink(
    id: ''
);```
