# mailings.mailings

## mailings-mailings-list

List mailings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    state: '', // optional
    folder: '', // optional
    campaignRef: '', // optional
    audienceId: '', // optional
    subscriptionType: '', // optional
    templateKey: '', // optional
    starter: '', // optional
    timezoneMode: '', // optional
    duplicatedFromId: '' // optional
);```

## mailings-mailings-create

Write a mailing down as a draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Starter;
use Revenexx\Enums\TimezoneMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsCreate(
    name: '',
    audienceId: '', // optional
    campaignRef: '', // optional
    currency: '', // optional
    excludeAudienceIds: [], // optional
    graymail: true, // optional
    graymailSends: 1, // optional
    metadata: , // optional
    previewText: '', // optional
    replyTo: '', // optional
    sendAt: '2026-01-01T12:00:00Z', // optional
    sender: '', // optional
    senderName: '', // optional
    starter: Starter::BLANK(), // optional
    subject: '', // optional
    subscriptionType: '', // optional
    templateKey: '', // optional
    timezoneMode: TimezoneMode::TENANT(), // optional
    voucherBatchId: '' // optional
);```

## mailings-mailings-empty-trash

Empty the mailing trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsEmptyTrash();
```

## mailings-mailings-purge

Delete the mailings that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsPurge();
```

## mailings-mailings-delete

Move a mailing to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsDelete(
    id: ''
);```

## mailings-mailings-get

Read one mailing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsGet(
    id: ''
);```

## mailings-mailings-update

Change a mailing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Starter;
use Revenexx\Enums\TimezoneMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsUpdate(
    id: '',
    audienceId: '', // optional
    campaignRef: '', // optional
    currency: '', // optional
    excludeAudienceIds: [], // optional
    graymail: true, // optional
    graymailSends: 1, // optional
    metadata: , // optional
    name: '', // optional
    previewText: '', // optional
    replyTo: '', // optional
    sendAt: '2026-01-01T12:00:00Z', // optional
    sender: '', // optional
    senderName: '', // optional
    starter: Starter::BLANK(), // optional
    subject: '', // optional
    subscriptionType: '', // optional
    templateKey: '', // optional
    timezoneMode: TimezoneMode::TENANT(), // optional
    voucherBatchId: '' // optional
);```

## mailings-mailings-archive

Archive a mailing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsArchive(
    id: '',
    data: []
);```

## mailings-mailings-cancel

Cancel a scheduled or sending mailing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsCancel(
    id: '',
    data: []
);```

## mailings-mailings-checklist

Read what must be true before a mailing may be scheduled

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsChecklist(
    id: ''
);```

## mailings-mailings-duplicate

Copy a mailing as a new draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsDuplicate(
    id: '',
    data: []
);```

## mailings-mailings-preview

Render a mailing as one recipient sees it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\Device;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsPreview(
    id: '',
    contactId: '', // optional
    device: Device::DESKTOP(), // optional
    email: '', // optional
    firstName: '', // optional
    lastName: '', // optional
    locale: '', // optional
    market: '' // optional
);```

## mailings-mailings-reach

Read how many a mailing would reach

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsReach(
    id: ''
);```

## mailings-mailings-restore

Bring a mailing back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsRestore(
    id: ''
);```

## mailings-mailings-schedule

Schedule a mailing, now or at a time

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;
use Revenexx\Enums\TimezoneMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsSchedule(
    id: '',
    sendAt: '', // optional
    start: true, // optional
    timezoneMode: TimezoneMode::TENANT() // optional
);```

## mailings-mailings-test

Send a mailing to colleagues as a test

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsTest(
    id: '',
    locale: '', // optional
    market: '', // optional
    recipients: [] // optional
);```

## mailings-mailings-unarchive

Take a mailing out of the archive

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsMailings;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsMailings = new MailingsMailings($client);

$result = $mailingsMailings->mailingsMailingsUnarchive(
    id: '',
    data: []
);```
