# promotions.promotions

## promotions-bundles-list

List bundles

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    name: '', // optional
    unitsRequired: '', // optional
    maxPerCart: '', // optional
    allocation: '' // optional
);```

## promotions-bundles-create

Define a bundle

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\Allocation;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesCreate(
    name: '',
    promotionId: '',
    allocation: Allocation::BESTFORBUYER(), // optional
    maxPerCart: 1, // optional
    selectors: , // optional
    unitsRequired: 1 // optional
);```

## promotions-bundles-delete

Remove a bundle

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesDelete(
    id: ''
);```

## promotions-bundles-get

Read one bundle

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesGet(
    id: ''
);```

## promotions-bundles-update

Correct a bundle

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\Allocation;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsBundlesUpdate(
    id: '',
    allocation: Allocation::BESTFORBUYER(), // optional
    maxPerCart: 1, // optional
    name: '', // optional
    promotionId: '', // optional
    selectors: , // optional
    unitsRequired: 1 // optional
);```

## promotions-conditions-list

List conditions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    parentId: '', // optional
    kind: '', // optional
    matchMode: '', // optional
    negate: '', // optional
    subject: '', // optional
    comparison: '', // optional
    rightSubject: '', // optional
    summary: '', // optional
    position: '' // optional
);```

## promotions-conditions-create

Add a condition

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsCreate(
    promotionId: '',
    addend: 9.99, // optional
    compareValue: , // optional
    compareValueTo: , // optional
    comparison: '', // optional
    factor: 9.99, // optional
    kind: AudiencesRulesCreateKind::GROUP(), // optional
    matchMode: MatchMode::ALL(), // optional
    negate: true, // optional
    parentId: '', // optional
    position: 1, // optional
    rightSubject: '', // optional
    subject: '' // optional
);```

## promotions-conditions-validate

Check one condition without saving it

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsValidate();
```

## promotions-conditions-delete

Remove a condition

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsDelete(
    id: ''
);```

## promotions-conditions-get

Read one condition

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsGet(
    id: ''
);```

## promotions-conditions-update

Correct a condition

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsConditionsUpdate(
    id: '',
    addend: 9.99, // optional
    compareValue: , // optional
    compareValueTo: , // optional
    comparison: '', // optional
    factor: 9.99, // optional
    kind: AudiencesRulesCreateKind::GROUP(), // optional
    matchMode: MatchMode::ALL(), // optional
    negate: true, // optional
    parentId: '', // optional
    position: 1, // optional
    promotionId: '', // optional
    rightSubject: '', // optional
    subject: '' // optional
);```

## promotions-custom-effect-types-list

List registered effect types

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsCustomEffectTypesList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    name: '', // optional
    shapeVersion: '', // optional
    carriesAmount: '', // optional
    active: '' // optional
);```

## promotions-custom-effect-types-create

Register an effect type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsCustomEffectTypesCreate(
    name: '',
    active: true, // optional
    carriesAmount: true, // optional
    description: , // optional
    metadata: , // optional
    payloadShape: , // optional
    title:  // optional
);```

## promotions-custom-effect-types-delete

Delete an effect type nothing uses

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsCustomEffectTypesDelete(
    id: ''
);```

## promotions-custom-effect-types-get

Read one effect type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsCustomEffectTypesGet(
    id: ''
);```

## promotions-custom-effect-types-update

Change an effect type

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsCustomEffectTypesUpdate(
    id: '',
    active: true, // optional
    carriesAmount: true, // optional
    description: , // optional
    metadata: , // optional
    name: '', // optional
    payloadShape: , // optional
    title:  // optional
);```

## promotions-effects-list

List effects

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    promotionId: '', // optional
    position: '', // optional
    kind: '', // optional
    valueType: '', // optional
    targetScope: '', // optional
    bundleId: '', // optional
    unitChoice: '', // optional
    unitPosition: '', // optional
    spread: '', // optional
    freeItemQuantity: '', // optional
    requiresChoice: '' // optional
);```

## promotions-effects-create

Add an effect

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsCreate(
    promotionId: '',
    amount: 9.99, // optional
    appliesTo: , // optional
    bundleId: '', // optional
    customPayload: , // optional
    customShapeVersion: 1, // optional
    customTypeId: '', // optional
    freeItemQuantity: 1, // optional
    freeItems: , // optional
    kind: PromotionsEffectsCreateKind::DISCOUNT(), // optional
    maxDiscount: 9.99, // optional
    message: , // optional
    metadata: , // optional
    position: 1, // optional
    requiresChoice: true, // optional
    spread: true, // optional
    targetScope: TargetScope::UNITPRICE(), // optional
    unitChoice: UnitChoice::CHEAPEST(), // optional
    unitPosition: 1, // optional
    valueType: ValueType::PERCENTAGE() // optional
);```

## promotions-effects-delete

Remove an effect

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsDelete(
    id: ''
);```

## promotions-effects-get

Read one effect

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsGet(
    id: ''
);```

## promotions-effects-update

Correct an effect

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsEffectsUpdate(
    id: '',
    amount: 9.99, // optional
    appliesTo: , // optional
    bundleId: '', // optional
    customPayload: , // optional
    customShapeVersion: 1, // optional
    customTypeId: '', // optional
    freeItemQuantity: 1, // optional
    freeItems: , // optional
    kind: PromotionsEffectsCreateKind::DISCOUNT(), // optional
    maxDiscount: 9.99, // optional
    message: , // optional
    metadata: , // optional
    position: 1, // optional
    promotionId: '', // optional
    requiresChoice: true, // optional
    spread: true, // optional
    targetScope: TargetScope::UNITPRICE(), // optional
    unitChoice: UnitChoice::CHEAPEST(), // optional
    unitPosition: 1, // optional
    valueType: ValueType::PERCENTAGE() // optional
);```

## promotions-groups-list

List stacking groups

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    mode: '', // optional
    parentId: '', // optional
    position: '', // optional
    active: '' // optional
);```

## promotions-groups-create

Create a stacking group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsGroupsCreateMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsCreate(
    code: '',
    name: '',
    active: true, // optional
    labels: , // optional
    metadata: , // optional
    mode: PromotionsGroupsCreateMode::STACK(), // optional
    parentId: '', // optional
    position: 1 // optional
);```

## promotions-groups-delete

Delete a stacking group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsDelete(
    id: ''
);```

## promotions-groups-get

Read one stacking group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsGet(
    id: ''
);```

## promotions-groups-update

Correct a stacking group

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsGroupsCreateMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsGroupsUpdate(
    id: '',
    active: true, // optional
    code: '', // optional
    labels: , // optional
    metadata: , // optional
    mode: PromotionsGroupsCreateMode::STACK(), // optional
    name: '', // optional
    parentId: '', // optional
    position: 1 // optional
);```

## promotions-promotions-list

List promotions

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\Trashed;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsList(
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc', // optional
    trashed: Trashed::EXCLUDE(), // optional
    id: '', // optional
    code: '', // optional
    name: '', // optional
    description: '', // optional
    reach: '', // optional
    status: '', // optional
    effectiveState: '', // optional
    priority: '', // optional
    exclusive: '', // optional
    groupId: '', // optional
    searchBestCombination: '', // optional
    conditionMatch: '', // optional
    campaignRef: '' // optional
);```

## promotions-promotions-create

Write a promotion down

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\ConditionMatch;
use Revenexx\Enums\Reach;
use Revenexx\Enums\RecurrenceKind;
use Revenexx\Enums\ReturnBehaviour;
use Revenexx\Enums\PromotionsPromotionsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsCreate(
    code: '',
    name: '',
    audienceChannels: , // optional
    audienceRoles: , // optional
    audienceSegments: , // optional
    budgetDiscount: 9.99, // optional
    budgetRedemptions: 1, // optional
    campaignRef: '', // optional
    channelId: '', // optional
    conditionMatch: ConditionMatch::ALL(), // optional
    currency: '', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    description: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    exclusive: true, // optional
    groupId: '', // optional
    labels: , // optional
    limitPerContact: 1, // optional
    limitPerOrganization: 1, // optional
    metadata: , // optional
    priority: 1, // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    reach: Reach::AUTOMATIC(), // optional
    recurrenceDays: , // optional
    recurrenceFrom: '', // optional
    recurrenceKind: RecurrenceKind::NONE(), // optional
    recurrenceUntil: '', // optional
    recurrenceWeekdays: , // optional
    returnBehaviour: ReturnBehaviour::REVERSEPROPORTIONALLY(), // optional
    searchBestCombination: true, // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: PromotionsPromotionsCreateStatus::DRAFT(), // optional
    tags: , // optional
    template: '', // optional
    timezone: '', // optional
    trashBatch: '' // optional
);```

## promotions-promotions-overlap-check

Say whether a promotion is running that a new one would meet

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsOverlapCheck();
```

## promotions-promotions-empty-trash

Empty the promotion trash, deleting each one for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsEmptyTrash();
```

## promotions-promotions-purge

Delete the promotions that outlived the trash retention

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsPurge();
```

## promotions-promotions-delete

Move a promotion to the trash, or delete one in the trash for good

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsDelete(
    id: ''
);```

## promotions-promotions-get

Read one promotion

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsGet(
    id: ''
);```

## promotions-promotions-update

Correct a promotion

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\ConditionMatch;
use Revenexx\Enums\Reach;
use Revenexx\Enums\RecurrenceKind;
use Revenexx\Enums\ReturnBehaviour;
use Revenexx\Enums\PromotionsPromotionsCreateStatus;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsUpdate(
    id: '',
    audienceChannels: , // optional
    audienceRoles: , // optional
    audienceSegments: , // optional
    budgetDiscount: 9.99, // optional
    budgetRedemptions: 1, // optional
    campaignRef: '', // optional
    channelId: '', // optional
    code: '', // optional
    conditionMatch: ConditionMatch::ALL(), // optional
    currency: '', // optional
    deletedAt: '2026-01-01T12:00:00Z', // optional
    deletedBy: '', // optional
    deletedById: '', // optional
    description: '', // optional
    endsAt: '2026-01-01T12:00:00Z', // optional
    exclusive: true, // optional
    groupId: '', // optional
    labels: , // optional
    limitPerContact: 1, // optional
    limitPerOrganization: 1, // optional
    metadata: , // optional
    name: '', // optional
    priority: 1, // optional
    purgeAt: '2026-01-01T12:00:00Z', // optional
    purgeBlockedReason: '', // optional
    reach: Reach::AUTOMATIC(), // optional
    recurrenceDays: , // optional
    recurrenceFrom: '', // optional
    recurrenceKind: RecurrenceKind::NONE(), // optional
    recurrenceUntil: '', // optional
    recurrenceWeekdays: , // optional
    returnBehaviour: ReturnBehaviour::REVERSEPROPORTIONALLY(), // optional
    searchBestCombination: true, // optional
    startsAt: '2026-01-01T12:00:00Z', // optional
    status: PromotionsPromotionsCreateStatus::DRAFT(), // optional
    tags: , // optional
    template: '', // optional
    timezone: '', // optional
    trashBatch: '' // optional
);```

## promotions-promotions-conditions

Read a promotion condition tree, assembled

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsConditions(
    id: ''
);```

## promotions-promotions-conditions-check

Check a promotion condition tree before it is relied on

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsConditionsCheck(
    id: ''
);```

## promotions-promotions-copy

Copy a promotion as a draft under a new code

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\PromotionsPromotionsCopyParts;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsCopy(
    id: '',
    code: '',
    parts: [PromotionsPromotionsCopyParts::CONDITIONS()] // optional
);```

## promotions-promotions-end

End a promotion now or at a date

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;
use Revenexx\Enums\When;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsEnd(
    id: '',
    at: '2026-01-01T12:00:00Z', // optional
    honourReservations: true, // optional
    when: When::NOW() // optional
);```

## promotions-promotions-overlaps

List the live promotions this one can meet in one cart

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsOverlaps(
    id: ''
);```

## promotions-promotions-overview

Say what a promotion does and how it stands

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsOverview(
    id: ''
);```

## promotions-promotions-restore

Bring a promotion back out of the trash

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsRestore(
    id: ''
);```

## promotions-promotions-state

Report what a promotion is right now

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsState(
    id: ''
);```

## promotions-promotions-timeline

Read the redemptions of a promotion per day

```php
<?php

use Revenexx\Client;
use Revenexx\Services\PromotionsPromotions;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$promotionsPromotions = new PromotionsPromotions($client);

$result = $promotionsPromotions->promotionsPromotionsTimeline(
    id: ''
);```
