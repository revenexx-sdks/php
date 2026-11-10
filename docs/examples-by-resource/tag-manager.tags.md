# tag-manager.tags

## tag-manager-registry-list

List the supported registry keys

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerRegistryList();
```

## tag-manager-tags-list

List marketing tags

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    description: '', // optional
    kind: '', // optional
    registryKey: '', // optional
    scriptUrl: '', // optional
    vendorCode: '', // optional
    purposeCode: '', // optional
    load: '', // optional
    isActive: true, // optional
    createdAt: '', // optional
    updatedAt: '' // optional
);```

## tag-manager-tags-create

Create a marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerTagsCreateKind;
use Revenexx\Enums\Load;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsCreate(
    chainedVendorCodes: [], // optional
    code: '', // optional
    config: [], // optional
    description: '', // optional
    eventMap: [], // optional
    isActive: true, // optional
    kind: TagManagerTagsCreateKind::REGISTRY(), // optional
    load: Load::IMMEDIATE(), // optional
    name: '', // optional
    purposeCode: '', // optional
    registryKey: '', // optional
    scriptUrl: '', // optional
    vendorCode: '' // optional
);```

## tag-manager-tags-delete

Delete a marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsDelete(
    id: ''
);```

## tag-manager-tags-get

Read one marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsGet(
    id: ''
);```

## tag-manager-tags-update

Edit a marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerTagsCreateKind;
use Revenexx\Enums\Load;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsUpdate(
    id: '',
    chainedVendorCodes: [], // optional
    code: '', // optional
    config: [], // optional
    description: '', // optional
    eventMap: [], // optional
    isActive: true, // optional
    kind: TagManagerTagsCreateKind::REGISTRY(), // optional
    load: Load::IMMEDIATE(), // optional
    name: '', // optional
    purposeCode: '', // optional
    registryKey: '', // optional
    scriptUrl: '', // optional
    vendorCode: '' // optional
);```

## tag-manager-tags-triggers-list

List a marketing tag's triggers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsTriggersList(
    id: ''
);```

## tag-manager-tags-triggers-attach

Attach a trigger to a marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsTriggersAttach(
    id: '',
    triggerId: ''
);```

## tag-manager-tags-triggers-detach

Detach a trigger from a marketing tag

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTagsTriggersDetach(
    id: '',
    triggerId: ''
);```

## tag-manager-triggers-list

List triggers

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTriggersList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    kind: '', // optional
    eventName: '', // optional
    createdAt: '', // optional
    updatedAt: '' // optional
);```

## tag-manager-triggers-create

Create a trigger

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerTriggersCreateKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTriggersCreate(
    code: '', // optional
    conditions: [], // optional
    eventName: '', // optional
    kind: TagManagerTriggersCreateKind::PAGEVIEW(), // optional
    name: '' // optional
);```

## tag-manager-triggers-delete

Delete a trigger

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTriggersDelete(
    id: ''
);```

## tag-manager-triggers-get

Read one trigger

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTriggersGet(
    id: ''
);```

## tag-manager-triggers-update

Edit a trigger

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerTriggersCreateKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerTriggersUpdate(
    id: '',
    code: '', // optional
    conditions: [], // optional
    eventName: '', // optional
    kind: TagManagerTriggersCreateKind::PAGEVIEW(), // optional
    name: '' // optional
);```

## tag-manager-variables-list

List variables

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesList(
    limit: 1, // optional
    offset: 1, // optional
    order: '', // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    kind: '', // optional
    path: '', // optional
    createdAt: '', // optional
    updatedAt: '' // optional
);```

## tag-manager-variables-create

Create a variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerVariablesCreateKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesCreate(
    code: '', // optional
    constantValue: , // optional
    kind: TagManagerVariablesCreateKind::EVENTFIELD(), // optional
    name: '', // optional
    path: '' // optional
);```

## tag-manager-variables-delete

Delete a variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesDelete(
    id: ''
);```

## tag-manager-variables-get

Read one variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesGet(
    id: ''
);```

## tag-manager-variables-update

Edit a variable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;
use Revenexx\Enums\TagManagerVariablesCreateKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVariablesUpdate(
    id: '',
    code: '', // optional
    constantValue: , // optional
    kind: TagManagerVariablesCreateKind::EVENTFIELD(), // optional
    name: '', // optional
    path: '' // optional
);```

## tag-manager-vocabularies-list

List the theme event vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\TagManagerTags;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$tagManagerTags = new TagManagerTags($client);

$result = $tagManagerTags->tagManagerVocabulariesList();
```
