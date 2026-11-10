# search

## search-list-collections

List the tenant's collections

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchListCollections();
```

## search-get-collection

Get a collection's schema

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection as CollectionEnum;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchGetCollection(
    collection: CollectionEnum::CATEGORIES()
);```

## search-search-documents-get

Search a collection (query parameters)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection as CollectionEnum;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchSearchDocumentsGet(
    collection: CollectionEnum::CATEGORIES(),
    q: '', // optional
    queryBy: '', // optional
    filterBy: '', // optional
    sortBy: '', // optional
    facetBy: '', // optional
    maxFacetValues: 1, // optional
    groupBy: '', // optional
    includeFields: '', // optional
    excludeFields: '', // optional
    highlightFullFields: '', // optional
    numTypos: 1, // optional
    prefix: '', // optional
    page: 1, // optional
    perPage: 1 // optional
);```

## search-search-documents

Search a collection

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection as CollectionEnum;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchSearchDocuments(
    collection: CollectionEnum::CATEGORIES(),
    excludeFields: '', // optional
    facetBy: '', // optional
    filterBy: '', // optional
    groupBy: '', // optional
    highlightFullFields: '', // optional
    includeFields: '', // optional
    maxFacetValues: 1, // optional
    numTypos: 1, // optional
    page: 1, // optional
    perPage: 1, // optional
    prefix: '', // optional
    q: '', // optional
    queryBy: '', // optional
    sortBy: '' // optional
);```

## search-get-document

Get a document

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\Collection as CollectionEnum;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchGetDocument(
    collection: CollectionEnum::CATEGORIES(),
    documentId: ''
);```

## search-events

Report what a shopper did with a result

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;
use Revenexx\Enums\SearchEventsType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchEvents(
    collection: '',
    type: SearchEventsType::CLICK(),
    docId: '', // optional
    position: 1, // optional
    q: '', // optional
    queryId: '', // optional
    userToken: '' // optional
);```

## gateway-facet-resync

Re-sync the tenant's dynamic `attrs.<code>` facet fields

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->gatewayFacetResync(
    app: '', // optional
    vendor: '' // optional
);```

## search-multi-search

Federated multi-search

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchMultiSearch(
    searches: []
);```

## search-query

View-based search

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchQuery(
    collection: '',
    filters: [], // optional
    page: 1, // optional
    perPage: 1, // optional
    q: '', // optional
    sort: '', // optional
    view: '' // optional
);```

## search-suggest

Quick search over several collections

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Search;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$search = new Search($client);

$result = $search->searchSuggest(
    q: '',
    collections: [], // optional
    perPage: 1 // optional
);```
