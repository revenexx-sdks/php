# channels

## channels-list

List channels

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelStatus;
use Revenexx\Enums\ChannelUnassignedVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsList(
    id: '', // optional
    code: 'shop', // optional
    name: 'Shop', // optional
    labels: '{"en":"Shop","de":"Shop"}', // optional
    type: 'storefront', // optional
    status: ChannelStatus::ACTIVE(), // optional
    unassignedVisibility: ChannelUnassignedVisibility::INHERIT(), // optional
    isDefault: true, // optional
    position: 1, // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    limit: 1, // optional
    offset: 1, // optional
    order: 'created_at.desc' // optional
);```

## channels-create

Create a channel

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelStatus;
use Revenexx\Enums\ChannelUnassignedVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsCreate(
    code: 'shop',
    name: 'Shop',
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    position: 1, // optional
    status: ChannelStatus::ACTIVE(), // optional
    type: 'storefront', // optional
    unassignedVisibility: ChannelUnassignedVisibility::INHERIT() // optional
);```

## channels-context

Resolve the active channel

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsContext(
    channel: 'shop' // optional
);```

## channels-defaults

Restore the shipped defaults

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsDefaults();
```

## channels-types-list

The channel types this tenant keeps

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesList(
    limit: 1, // optional
    offset: 1, // optional
    active: true // optional
);```

## channels-types-create

Add a channel type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelTypeTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesCreate(
    code: 'feed',
    title: 'Product feed',
    active: true, // optional
    description: 'A web shop a human browses.', // optional
    descriptions: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    position: 1, // optional
    tone: ChannelTypeTone::NEUTRAL() // optional
);```

## channels-types-delete

Remove a channel type nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesDelete(
    id: ''
);```

## channels-types-get

Read one channel type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesGet(
    id: ''
);```

## channels-types-update

Rename a channel type or move it in the order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelTypeTone;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsTypesUpdate(
    id: '',
    active: false, // optional
    description: 'A web shop a human browses.', // optional
    descriptions: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    position: 1, // optional
    title: 'Product feed', // optional
    tone: ChannelTypeTone::NEUTRAL() // optional
);```

## channels-visibility

Decide which rows a channel may see

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsVisibility(
    items: [],
    channel: 'shop', // optional
    channelBody: 'shop' // optional
);```

## channels-vocabularies-list

List vocabularies

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsVocabulariesList();
```

## channels-vocabularies-get

Read one vocabulary

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelsVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsVocabulariesGet(
    name: ChannelsVocabulariesGetName::STATUSES()
);```

## channels-delete

Delete a channel by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsDelete(
    id: ''
);```

## channels-get

Read one channel by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsGet(
    id: ''
);```

## channels-update

Update a channel by id

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Channels;
use Revenexx\Enums\ChannelStatus;
use Revenexx\Enums\ChannelUnassignedVisibility;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$channels = new Channels($client);

$result = $channels->channelsUpdate(
    id: '',
    code: 'shop', // optional
    isDefault: true, // optional
    labels: [
        'de' => 'Shop',
        'en' => 'Shop'
    ], // optional
    name: 'Shop', // optional
    position: 1, // optional
    status: ChannelStatus::ACTIVE(), // optional
    type: 'storefront', // optional
    unassignedVisibility: ChannelUnassignedVisibility::INHERIT() // optional
);```
