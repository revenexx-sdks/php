# pages.editor

## pages-editor-edit-states

Search open edit states across pages

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;
use Revenexx\Enums\PageEditStateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorEditStates(
    status: PageEditStateStatus::ACTIVE(), // optional
    limit: 1, // optional
    offset: 1 // optional
);```

## pages-editor-translate

Machine-translate text fields

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorTranslate(
    items: [] // optional
);```

## pages-editor-user-settings-get

Load the current user's editor settings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorUserSettingsGet();
```

## pages-editor-user-settings-put

Persist the current user's editor settings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorUserSettingsPut(
    settings: [] // optional
);```

## pages-editor-history

Move the undo/redo pointer

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorHistory(
    pageId: '',
    index: 1,
    langcode: 'de' // optional
);```

## pages-editor-last-changed

Poll the edit state's last change

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorLastChanged(
    pageId: ''
);```

## pages-editor-mutation-status

Soft-enable/disable a single mutation in the log

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorMutationStatus(
    pageId: '',
    enabled: true,
    index: 1,
    langcode: 'de' // optional
);```

## pages-editor-mutate

Append a mutation to the edit state

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorMutate(
    pageId: '',
    plugin: 'add',
    langcode: 'de', // optional
    payload: [] // optional
);```

## pages-editor-preview-grant

Create a preview share token

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorPreviewGrant(
    pageId: '',
    ttlHours: 1 // optional
);```

## pages-editor-publish

Publish the edit state

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorPublish(
    pageId: '',
    force: true, // optional
    label: 'Autumn campaign' // optional
);```

## pages-editor-revert

Discard all unpublished changes

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorRevert(
    pageId: ''
);```

## pages-editor-schedule

Park the edit state for a future publication date

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorSchedule(
    pageId: '',
    scheduledAt: '2026-01-01T12:00:00Z'
);```

## pages-editor-state

Load the editor state for a page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorState(
    pageId: '',
    langcode: 'de', // optional
    index: 1 // optional
);```

## pages-editor-take-ownership

Take ownership of the edit state

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorTakeOwnership(
    pageId: ''
);```

## pages-editor-templates-create

Create a template from the edit state

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorTemplatesCreate(
    pageId: '',
    label: 'Hero with two teasers',
    uuids: [],
    description: 'Full-width hero followed by a two-column teaser row.', // optional
    fieldName: 'content', // optional
    isDefault: true, // optional
    pageBundle: 'standard' // optional
);```

## pages-editor-unschedule

Cancel a scheduled publish

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesEditor;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesEditor = new PagesEditor($client);

$result = $pagesEditor->pagesEditorUnschedule(
    pageId: ''
);```
