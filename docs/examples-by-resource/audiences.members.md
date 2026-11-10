# audiences.members

## audiences-members-composition

Read who is in an audience by market and by source, as bar-list rows

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersComposition(
    id: ''
);```

## audiences-audiences-import

Import rows into a static audience, with the reason for every row refused

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesAudiencesImport(
    id: '',
    emails: '', // optional
    filename: '', // optional
    rows: [] // optional
);```

## audiences-members-read

Read the members of an audience, keyset-paged and stable

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersRead(
    id: '',
    cursor: '', // optional
    limit: 200 // optional
);```

## audiences-members-add

Add contacts to a static audience

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersAdd(
    id: '',
    contactId: '', // optional
    contactIds: [] // optional
);```

## audiences-members-remove

Take one contact out of a static audience

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersRemove(
    id: '',
    contactId: ''
);```

## audiences-members-timeline

Read the joins and leaves of an audience per day

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersTimeline(
    id: ''
);```

## audiences-imports-list

List imports

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesImportsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    audienceId: '', // optional
    filename: '', // optional
    rows: '', // optional
    accepted: '', // optional
    rejected: '', // optional
    state: '' // optional
);```

## audiences-imports-get

Read one import

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesImportsGet(
    id: ''
);```

## audiences-member-events-list

List joins and leaves

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMemberEventsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    audienceId: '', // optional
    contactId: '', // optional
    kind: '', // optional
    source: '', // optional
    reason: '' // optional
);```

## audiences-member-events-get

Read one join or leave

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMemberEventsGet(
    id: ''
);```

## audiences-members-list

List membership rows

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    audienceId: '', // optional
    audienceCode: '', // optional
    contactId: '', // optional
    organizationId: '', // optional
    email: '', // optional
    locale: '', // optional
    market: '', // optional
    eligible: '', // optional
    source: '' // optional
);```

## audiences-members-get

Read one membership row

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersGet(
    id: ''
);```

## audiences-members-memberships

Say which audiences one contact is in

```php
<?php

use Revenexx\Client;
use Revenexx\Services\AudiencesMembers;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$audiencesMembers = new AudiencesMembers($client);

$result = $audiencesMembers->audiencesMembersMemberships(
    contactId: ''
);```
