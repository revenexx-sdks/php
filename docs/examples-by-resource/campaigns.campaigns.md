# campaigns.campaigns

## campaigns-campaigns-list

List campaigns

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    description: '', // optional
    status: '', // optional
    effectiveState: '', // optional
    ownerId: '', // optional
    utmCampaign: '', // optional
    goalMetric: '', // optional
    currency: '', // optional
    ordersCount: '', // optional
    externalId: '' // optional
);```

## campaigns-campaigns-create

Write a campaign down

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\GoalMetric;
use Revenexx\Enums\CampaignsCampaignsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsCreate(
    code: '',
    name: '',
    currency: '', // optional
    description: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    externalId: '', // optional
    externalRefs: , // optional
    goalMetric: GoalMetric::REVENUE(), // optional
    goalValue: 9.99, // optional
    metadata: , // optional
    ownerId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: CampaignsCampaignsCreateStatus::DRAFT(), // optional
    tags: , // optional
    utmCampaign: '' // optional
);```

## campaigns-campaigns-empty-trash

Empty the campaign trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsEmptyTrash();
```

## campaigns-campaigns-purge

Delete the campaigns that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsPurge();
```

## campaigns-campaigns-delete

Move a campaign to the trash, or delete it for good from there

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsDelete(
    id: ''
);```

## campaigns-campaigns-get

Read one campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsGet(
    id: ''
);```

## campaigns-campaigns-update

Correct a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\GoalMetric;
use Revenexx\Enums\CampaignsCampaignsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsUpdate(
    id: '',
    code: '', // optional
    currency: '', // optional
    description: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    externalId: '', // optional
    externalRefs: , // optional
    goalMetric: GoalMetric::REVENUE(), // optional
    goalValue: 9.99, // optional
    metadata: , // optional
    name: '', // optional
    ownerId: '', // optional
    sourceData: , // optional
    sourceSyncedAt: '2026-01-01T12:00:00Z', // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: CampaignsCampaignsCreateStatus::DRAFT(), // optional
    tags: , // optional
    utmCampaign: '' // optional
);```

## campaigns-campaigns-attach

Attach an asset to a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\AssetApp;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsAttach(
    id: '',
    adCampaignLinkId: '', // optional
    assetApp: AssetApp::PROMOTIONS(), // optional
    assetEntity: '', // optional
    assetId: '', // optional
    formId: '', // optional
    journeyId: '', // optional
    label: '', // optional
    libraryItemId: '', // optional
    mailingId: '', // optional
    pageId: '', // optional
    promotionId: '' // optional
);```

## campaigns-campaigns-detach

Release an asset from a campaign

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\AssetApp;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsDetach(
    id: '',
    adCampaignLinkId: '', // optional
    assetApp: AssetApp::PROMOTIONS(), // optional
    assetEntity: '', // optional
    assetId: '', // optional
    formId: '', // optional
    journeyId: '', // optional
    label: '', // optional
    libraryItemId: '', // optional
    mailingId: '', // optional
    pageId: '', // optional
    promotionId: '' // optional
);```

## campaigns-campaigns-links

Build a URL tagged with the campaign UTM values

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsLinks(
    id: '',
    medium: '',
    url: '',
    content: '', // optional
    source: '', // optional
    term: '' // optional
);```

## campaigns-campaigns-performance

Read what a campaign achieved against its goal

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;
use Revenexx\Enums\Model;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsPerformance(
    id: '',
    model: Model::FIRSTTOUCH() // optional
);```

## campaigns-campaigns-restore

Bring a campaign back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\CampaignsCampaigns;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$campaignsCampaigns = new CampaignsCampaigns($client);

$result = $campaignsCampaigns->campaignsCampaignsRestore(
    id: ''
);```
