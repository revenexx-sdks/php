# pages

## pages-library-list

Search the reusable-block library

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesLibraryList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    bundles: 'hero,teaser', // optional
    text: 'hero' // optional
);```

## pages-library-delete

Soft-delete a library item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesLibraryDelete(
    id: ''
);```

## pages-library-get

Read one library item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesLibraryGet(
    id: ''
);```

## pages-library-update

Update a library item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesLibraryUpdate(
    id: '',
    bundle: 'teaser', // optional
    label: 'Newsletter teaser', // optional
    metadata: [], // optional
    tree: [] // optional
);```

## pages-menus-list

List navigation menus

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesMenusList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## pages-menus-upsert

Create or replace a menu by key

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesMenusUpsert(
    label: 'Main navigation',
    menuKey: 'main',
    items: [] // optional
);```

## pages-menus-delete

Soft-delete a menu

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesMenusDelete(
    id: ''
);```

## pages-menus-get

Read one menu by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesMenusGet(
    id: ''
);```

## pages-menus-update

Update a menu's label and items

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesMenusUpdate(
    id: '',
    items: [], // optional
    label: 'Main navigation', // optional
    metadata: [] // optional
);```

## pages-pages-list

List pages

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;
use Revenexx\Enums\PageStatus;
use Revenexx\Enums\Deleted;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    bundle: 'standard', // optional
    status: PageStatus::DRAFT(), // optional
    q: 'contact', // optional
    deleted: Deleted::ONLY() // optional
);```

## pages-pages-create

Create a page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesCreate(
    title: 'About us',
    bundle: 'standard', // optional
    hostOptions: [], // optional
    meta: [], // optional
    slug: 'about-us', // optional
    sourceLanguage: 'de', // optional
    templateId: '' // optional
);```

## pages-pages-delete

Soft-delete a page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesDelete(
    id: ''
);```

## pages-pages-get

Read one page by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesGet(
    id: ''
);```

## pages-pages-update

Update page metadata

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;
use Revenexx\Enums\PageStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesUpdate(
    id: '',
    bundle: 'standard', // optional
    meta: [], // optional
    slug: 'about-us', // optional
    status: PageStatus::DRAFT(), // optional
    title: 'About us' // optional
);```

## pages-pages-duplicate

Duplicate a page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesDuplicate(
    id: '',
    slug: 'about-us-2', // optional
    title: 'About us (copy)' // optional
);```

## pages-pages-restore

Restore a soft-deleted page

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesRestore(
    id: ''
);```

## pages-pages-revisions

List a page's publish history

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPagesRevisions(
    id: '',
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    label: 'Autumn campaign', // optional
    createdBy: '', // optional
    createdByName: '', // optional
    createdAt: '' // optional
);```

## pages-popups-list

List pop-ups

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPopupsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    campaignRef: '' // optional
);```

## pages-popups-create

Create a pop-up

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPopupsCreate(
    label: 'Newsletter-Anmeldung Herbst',
    campaignRef: '', // optional
    metadata: [], // optional
    popup: [], // optional
    tree: [] // optional
);```

## pages-popups-update

Change a pop-up

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesPopupsUpdate(
    id: '',
    campaignRef: '', // optional
    label: 'Newsletter-Anmeldung Winter', // optional
    metadata: [], // optional
    popup: [], // optional
    tree: [] // optional
);```

## pages-seed

Seed a theme's default content

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;
use Revenexx\Enums\PagesSeedMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesSeed(
    library: [], // optional
    menus: [], // optional
    mode: PagesSeedMode::FILL(), // optional
    pages: [], // optional
    settings: [] // optional
);```

## pages-settings-site-list

List site settings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesSettingsSiteList();
```

## pages-settings-site-delete

Remove a site setting

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesSettingsSiteDelete(
    key: ''
);```

## pages-settings-site-get

Read one site setting

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesSettingsSiteGet(
    key: ''
);```

## pages-settings-site-put

Set a site setting

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesSettingsSitePut(
    key: '',
    value: []
);```

## pages-template-assignments-list

List template assignments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplateAssignmentsList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    resourceType: 'product', // optional
    pageSlug: 'product-detail' // optional
);```

## pages-template-assignments-delete

Remove a template assignment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplateAssignmentsDelete(
    resourceType: '',
    resourceId: ''
);```

## pages-template-assignments-put

Assign a template page to a record

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplateAssignmentsPut(
    resourceType: '',
    resourceId: '',
    pageSlug: 'product-detail'
);```

## pages-templates-list

List block templates

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplatesList(
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    label: 'Hero with two teasers', // optional
    description: 'Full-width hero followed by a two-column teaser row.', // optional
    pageBundle: 'standard', // optional
    fieldName: 'content', // optional
    isDefault: true, // optional
    createdBy: '', // optional
    createdAt: '', // optional
    updatedAt: '' // optional
);```

## pages-templates-delete

Delete a template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplatesDelete(
    id: ''
);```

## pages-templates-get

Read one template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplatesGet(
    id: ''
);```

## pages-templates-update

Update a template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesTemplatesUpdate(
    id: '',
    description: 'Full-width hero followed by a two-column teaser row.', // optional
    fieldName: 'content', // optional
    isDefault: true, // optional
    label: 'Hero with two teasers', // optional
    pageBundle: 'standard', // optional
    tree: [] // optional
);```

## pages-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesVocabulariesList();
```

## pages-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Pages;
use Revenexx\Enums\PagesVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pages = new Pages($client);

$result = $pages->pagesVocabulariesGet(
    name: PagesVocabulariesGetName::EDITSTATESTATUSES()
);```
