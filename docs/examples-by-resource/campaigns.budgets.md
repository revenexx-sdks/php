# campaigns.budgets

## campaigns-budgets-list

List budget lines

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsBudgets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsBudgets = new CampaignsBudgets($client);

$result = $campaignsBudgets->campaignsBudgetsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    campaignId: '', // optional
    line: '', // optional
    currency: '', // optional
    source: '', // optional
    platform: '', // optional
    notes: '' // optional
);```

## campaigns-budgets-create

Add a budget line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsBudgets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsBudgets = new CampaignsBudgets($client);

$result = $campaignsBudgets->campaignsBudgetsCreate(
    campaignId: '',
    line: '',
    currency: '', // optional
    notes: '', // optional
    planned: 9.99, // optional
    spent: 9.99 // optional
);```

## campaigns-budgets-delete

Delete a budget line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsBudgets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsBudgets = new CampaignsBudgets($client);

$result = $campaignsBudgets->campaignsBudgetsDelete(
    id: ''
);```

## campaigns-budgets-get

Read one budget line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsBudgets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsBudgets = new CampaignsBudgets($client);

$result = $campaignsBudgets->campaignsBudgetsGet(
    id: ''
);```

## campaigns-budgets-update

Correct a budget line

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsBudgets;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsBudgets = new CampaignsBudgets($client);

$result = $campaignsBudgets->campaignsBudgetsUpdate(
    id: '',
    campaignId: '', // optional
    currency: '', // optional
    line: '', // optional
    notes: '', // optional
    planned: 9.99, // optional
    spent: 9.99 // optional
);```
