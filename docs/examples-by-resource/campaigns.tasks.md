# campaigns.tasks

## campaigns-tasks-list

List campaign tasks

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    campaignId: '', // optional
    title: '', // optional
    notes: '', // optional
    assignee: '' // optional
);```

## campaigns-tasks-create

Add a task to a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksCreate(
    campaignId: '',
    title: '',
    assignee: '', // optional
    doneAt: '2026-01-01T12:00:00Z', // optional
    dueAt: '2026-01-01T12:00:00Z', // optional
    notes: '' // optional
);```

## campaigns-tasks-delete

Delete a task

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksDelete(
    id: ''
);```

## campaigns-tasks-get

Read one task

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksGet(
    id: ''
);```

## campaigns-tasks-update

Correct a task

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksUpdate(
    id: '',
    assignee: '', // optional
    campaignId: '', // optional
    doneAt: '2026-01-01T12:00:00Z', // optional
    dueAt: '2026-01-01T12:00:00Z', // optional
    notes: '', // optional
    title: '' // optional
);```

## campaigns-tasks-complete

Tick a task off

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksComplete(
    id: ''
);```

## campaigns-tasks-reopen

Open a task again

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsTasks;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsTasks = new CampaignsTasks($client);

$result = $campaignsTasks->campaignsTasksReopen(
    id: ''
);```
