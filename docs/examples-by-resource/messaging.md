# messaging

## audit-index

The change log, newest first

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\ResourceType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->auditIndex(
    resourceType: ResourceType::TEMPLATE(), // optional
    resourceId: '', // optional
    subject: '', // optional
    limit: 1 // optional
);```

## binding-index

List this tenant's bindings, in fallback order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingIndex(
    eventTopic: '' // optional
);```

## binding-store

Bind an event topic to a template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingStore(
    channel: '',
    eventTopic: '',
    recipient: '',
    templateKey: '',
    enabled: true, // optional
    fallbackOrder: 1, // optional
    locale: '' // optional
);```

## binding-destroy

Delete a binding

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingDestroy(
    id: ''
);```

## binding-show

Read one binding

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingShow(
    id: ''
);```

## binding-update-patch

Change a binding

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingUpdatePatch(
    id: '',
    channel: '', // optional
    enabled: true, // optional
    eventTopic: '', // optional
    fallbackOrder: 1, // optional
    locale: '', // optional
    recipient: '', // optional
    templateKey: '' // optional
);```

## binding-update

Change a binding

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->bindingUpdate(
    id: '',
    channel: '', // optional
    enabled: true, // optional
    eventTopic: '', // optional
    fallbackOrder: 1, // optional
    locale: '', // optional
    recipient: '', // optional
    templateKey: '' // optional
);```

## channel-credential-index

What each channel is configured with, and whether it is ready to send

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelCredentialIndex(
    market: 'de', // optional
    markets: 'all' // optional
);```

## channel-credential-destroy

Take a channel's credentials back out

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelCredentialDestroy(
    channel: '',
    market: 'de' // optional
);```

## channel-credential-update-patch

Write one channel's credentials, or one market's override of them

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelCredentialUpdatePatch(
    channel: '',
    market: 'de', // optional
    driver: '' // optional
);```

## channel-credential-update

Write one channel's credentials, or one market's override of them

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelCredentialUpdate(
    channel: '',
    market: 'de', // optional
    driver: '' // optional
);```

## channel-credential-verify

Prove the stored credentials work, without sending anything

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelCredentialVerify(
    channel: '',
    market: 'de' // optional
);```

## channel-index

List the channels this deployment can dispatch on

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->channelIndex();
```

## config-show

The tenant's messaging configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->configShow();
```

## config-update-patch

Change the tenant's messaging configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->configUpdatePatch(
    defaultLocale: '', // optional
    defaults: [], // optional
    product: '', // optional
    quietHours: [], // optional
    supportEmail: 'jane@example.com' // optional
);```

## config-update

Change the tenant's messaging configuration

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->configUpdate(
    defaultLocale: '', // optional
    defaults: [], // optional
    product: '', // optional
    quietHours: [], // optional
    supportEmail: 'jane@example.com' // optional
);```

## layout-index

List this tenant's letterheads, the default first

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->layoutIndex(
    markets: 'all' // optional
);```

## layout-store

Create a letterhead

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->layoutStore();
```

## layout-destroy

Delete a layout and say what happened to the templates that were on it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->layoutDestroy(
    id: ''
);```

## layout-show

Read one letterhead

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->layoutShow(
    id: ''
);```

## layout-update

Change a letterhead

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->layoutUpdate(
    id: ''
);```

## library-index

The platform's ready-made templates, filterable by channel and locale

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->libraryIndex(
    channel: '', // optional
    locale: '' // optional
);```

## message-index

The delivery log, newest first

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->messageIndex(
    channel: '', // optional
    status: '' // optional
);```

## message-show

Read one message

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->messageShow(
    id: ''
);```

## send-preview

Render a template without sending it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->sendPreview(
    channel: '',
    template: '',
    data: [], // optional
    locale: '' // optional
);```

## erasure-store

Erase one person from this tenant's delivery log

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->erasureStore(
    address: '',
    channel: ''
);```

## push-subscription-destroy

Unregister one browser

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->pushSubscriptionDestroy(
    endpoint: ''
);```

## push-subscription-index

The browsers one person has registered

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->pushSubscriptionIndex(
    subscriberId: ''
);```

## push-subscription-store

Register a browser for push

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->pushSubscriptionStore(
    endpoint: 'https://example.com',
    keys: [],
    subscriberId: '',
    userAgent: '' // optional
);```

## send-send

Send a message

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->sendSend(
    channel: '',
    template: '',
    to: '',
    attachments: [], // optional
    data: [], // optional
    draft: true, // optional
    locale: '', // optional
    market: '', // optional
    sendAt: '2026-01-01T12:00:00Z' // optional
);```

## stats-index

Aggregated delivery figures for one window, with the window before it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->statsIndex(
    days: 1, // optional
    from: '2026-01-01', // optional
    to: '2026-01-01' // optional
);```

## suppression-index

Who is not being mailed, and why. Newest first

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\Scope;
use Revenexx\Enums\SuppressionIndexReason;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionIndex(
    channel: '', // optional
    scope: Scope::ALL(), // optional
    reason: SuppressionIndexReason::HARDBOUNCE(), // optional
    address: '', // optional
    limit: 1 // optional
);```

## suppression-store

Suppress an address by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\SuppressionIndexReason;
use Revenexx\Enums\Scope;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionStore(
    address: '',
    channel: '',
    reason: SuppressionIndexReason::HARDBOUNCE(),
    expiresAt: '2026-01-01T12:00:00Z', // optional
    note: '', // optional
    scope: Scope::ALL() // optional
);```

## suppression-destroy

Lift a suppression

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionDestroy(
    id: ''
);```

## suppression-show

Read one suppression

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->suppressionShow(
    id: ''
);```

## template-index

List this tenant's templates, by key

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateIndex(
    channel: '', // optional
    markets: 'all' // optional
);```

## template-store

Create a template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateStore(
    channel: '',
    key: '',
    bodyHtml: '', // optional
    bodyText: '', // optional
    contentSid: '', // optional
    design: [], // optional
    enabled: true, // optional
    layoutId: '', // optional
    locale: '', // optional
    markets: [], // optional
    messageClass: MessageClass::TRANSACTIONAL(), // optional
    subject: '', // optional
    testMode: true, // optional
    title: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    variableDefaults: [], // optional
    variables: [], // optional
    whatsappCategory: WhatsappCategory::MARKETING() // optional
);```

## template-destroy

Delete a template

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateDestroy(
    id: ''
);```

## template-show

Read one template — the DRAFT, not what is live

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateShow(
    id: ''
);```

## template-update-patch

Change a template's draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateUpdatePatch(
    id: '',
    bodyHtml: '', // optional
    bodyText: '', // optional
    contentSid: '', // optional
    design: [], // optional
    enabled: true, // optional
    layoutId: '', // optional
    markets: [], // optional
    messageClass: MessageClass::TRANSACTIONAL(), // optional
    subject: '', // optional
    testMode: true, // optional
    title: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    variableDefaults: [], // optional
    variables: [], // optional
    whatsappCategory: WhatsappCategory::MARKETING() // optional
);```

## template-update

Change a template's draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;
use Revenexx\Enums\MessageClass;
use Revenexx\Enums\WhatsappCategory;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateUpdate(
    id: '',
    bodyHtml: '', // optional
    bodyText: '', // optional
    contentSid: '', // optional
    design: [], // optional
    enabled: true, // optional
    layoutId: '', // optional
    markets: [], // optional
    messageClass: MessageClass::TRANSACTIONAL(), // optional
    subject: '', // optional
    testMode: true, // optional
    title: '', // optional
    validFrom: '2026-01-01T12:00:00Z', // optional
    validUntil: '2026-01-01T12:00:00Z', // optional
    variableDefaults: [], // optional
    variables: [], // optional
    whatsappCategory: WhatsappCategory::MARKETING() // optional
);```

## template-version-store

Make the current draft live

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateVersionStore(
    templateId: '',
    note: '' // optional
);```

## template-version-index

The publication history of one template, newest first

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateVersionIndex(
    templateId: ''
);```

## template-version-show

One published snapshot, whole

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateVersionShow(
    templateId: '',
    version: ''
);```

## template-version-restore

Put an older version's content back into the draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Messaging;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$messaging = new Messaging($client);

$result = $messaging->templateVersionRestore(
    templateId: '',
    version: '',
    publish: true // optional
);```
