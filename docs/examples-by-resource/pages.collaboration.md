# pages.collaboration

## pages-editor-notifications-list

List the current user's notifications

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorNotificationsList(
    after: '', // optional
    markAsRead: 'true' // optional
);```

## pages-editor-notifications-mark-all-read

Mark all notifications read

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorNotificationsMarkAllRead();
```

## pages-editor-notifications-unread-count

Unread notification count

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorNotificationsUnreadCount();
```

## pages-editor-users

List users for @mentions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorUsers();
```

## pages-editor-comments-list

List a page's comments

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsList(
    pageId: ''
);```

## pages-editor-comments-create

Add a comment or reply

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsCreate(
    pageId: '',
    body: '<p>Please shorten this headline.</p>',
    blockUuids: [], // optional
    parentUuid: '' // optional
);```

## pages-editor-comments-delete

Delete a comment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsDelete(
    pageId: '',
    uuid: ''
);```

## pages-editor-comments-update

Edit a comment body

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsUpdate(
    pageId: '',
    uuid: '',
    body: '<p>Please shorten this headline.</p>'
);```

## pages-editor-comments-resolve

Resolve a comment thread

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsResolve(
    pageId: '',
    uuid: ''
);```

## pages-editor-comments-toggle-task

Toggle a task checkbox in a comment

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsToggleTask(
    pageId: '',
    uuid: '',
    taskIndex: 1
);```

## pages-editor-comments-unresolve

Reopen a resolved thread

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PagesCollaboration;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$pagesCollaboration = new PagesCollaboration($client);

$result = $pagesCollaboration->pagesEditorCommentsUnresolve(
    pageId: '',
    uuid: ''
);```
