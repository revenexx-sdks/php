# mailings.analysis

## mailings-analysis-list-clicks

List clicked links of mailings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisListClicks(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    mailingId: '', // optional
    url: '' // optional
);```

## mailings-analysis-get-click

Read one clicked link

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisGetClick(
    id: ''
);```

## mailings-analysis-list-engagements

List recorded reactions to mailings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisListEngagements(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    mailingId: '', // optional
    kind: '', // optional
    email: '', // optional
    contactId: '', // optional
    messageId: '', // optional
    isMachine: '' // optional
);```

## mailings-analysis-get-engagement

Read one recorded reaction

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisGetEngagement(
    id: ''
);```

## mailings-analysis-clicks

Read the click map of a mailing

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisClicks(
    id: ''
);```

## mailings-analysis-stats

Read what a mailing achieved

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisStats(
    id: ''
);```

## mailings-analysis-timeline

Read the opens and clicks of a mailing per day

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisTimeline(
    id: ''
);```

## mailings-analysis-list-stats

List the figures of mailings

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisListStats(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    mailingId: '' // optional
);```

## mailings-analysis-sweep

Bring the figures of the last 30 days up to date

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisSweep(
    data: []
);```

## mailings-analysis-get-stats

Read one figures row

```php
<?php

use Revenexx\Client;
use Revenexx\Services\MailingsAnalysis;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$mailingsAnalysis = new MailingsAnalysis($client);

$result = $mailingsAnalysis->mailingsAnalysisGetStats(
    id: ''
);```
