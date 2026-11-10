# journeys.journeys

## journeys-journeys-list

List journeys

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    name: '', // optional
    description: '', // optional
    status: '', // optional
    triggerKind: '', // optional
    reenrol: '', // optional
    reenrolGapDays: '', // optional
    campaignRef: '', // optional
    templateCode: '', // optional
    currentVersion: '', // optional
    draftVersion: '', // optional
    triggerRanOn: '', // optional
    enrolledCount: '', // optional
    activeCount: '' // optional
);```

## journeys-journeys-create

Create a draft journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;
use Revenexx\Enums\TriggerKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysCreate(
    name: '',
    campaignRef: '', // optional
    currency: '', // optional
    description: '', // optional
    entry: '', // optional
    goalConfig: , // optional
    metadata: , // optional
    reenrol: true, // optional
    reenrolGapDays: 1, // optional
    steps: [], // optional
    triggerConfig: , // optional
    triggerKind: TriggerKind::EVENT() // optional
);```

## journeys-journeys-empty-trash

Empty the journey trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysEmptyTrash();
```

## journeys-journeys-purge

Delete the journeys that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysPurge();
```

## journeys-journeys-delete

Move a journey to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysDelete(
    id: ''
);```

## journeys-journeys-get

Read one journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysGet(
    id: ''
);```

## journeys-journeys-update

Correct a journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;
use Revenexx\Enums\TriggerKind;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysUpdate(
    id: '',
    campaignRef: '', // optional
    currency: '', // optional
    description: '', // optional
    goalConfig: , // optional
    metadata: , // optional
    name: '', // optional
    reenrol: true, // optional
    reenrolGapDays: 1, // optional
    triggerConfig: , // optional
    triggerKind: TriggerKind::EVENT() // optional
);```

## journeys-journeys-archive

Archive a journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysArchive(
    id: '',
    data: []
);```

## journeys-journeys-enrol

Put one person into a live journey by hand

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysEnrol(
    id: '',
    contactId: '', // optional
    data: [], // optional
    email: '', // optional
    key: '', // optional
    market: '' // optional
);```

## journeys-journeys-graph

Read the steps of a journey version

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysGraph(
    id: '',
    version: '' // optional
);```

## journeys-journeys-save-graph

Save the canvas as the draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysSaveGraph(
    id: '',
    steps: [],
    entry: '', // optional
    notes: '' // optional
);```

## journeys-journeys-pause

Pause a live journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysPause(
    id: '',
    data: []
);```

## journeys-journeys-publish

Publish the draft

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysPublish(
    id: '',
    data: []
);```

## journeys-journeys-report

Read per-step counts of a journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysReport(
    id: '',
    version: '' // optional
);```

## journeys-journeys-restore

Bring a journey back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysRestore(
    id: ''
);```

## journeys-journeys-resume

Resume a paused journey

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysResume(
    id: '',
    data: []
);```

## journeys-journeys-run

Process the due steps of one journey now

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysRun(
    id: '',
    data: []
);```

## journeys-journeys-timeline

Read entries and reached goals of a journey per day

```php
<?php

use Revenexx\Client;
use Revenexx\Services\JourneysJourneys;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$journeysJourneys = new JourneysJourneys($client);

$result = $journeysJourneys->journeysJourneysTimeline(
    id: ''
);```
