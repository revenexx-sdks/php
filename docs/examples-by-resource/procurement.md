# procurement

## procurement-approval-rules-list

List ApprovalRule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-approval-rules-create

Create a approval rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;
use Revenexx\Enums\ApproverType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesCreate(
    condition: Condition::ALWAYS(),
    effect: Effect::PENDINGORDER(),
    name: '',
    active: true, // optional
    approverContactId: '', // optional
    approverRole: '', // optional
    approverType: ApproverType::CONTACT(), // optional
    conditionParameters: [], // optional
    costCenterId: '', // optional
    effectParameters: [], // optional
    metadata: [], // optional
    sequence: 1, // optional
    showCondition: true // optional
);```

## procurement-approval-rules-delete

Delete a approval rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesDelete(
    id: ''
);```

## procurement-approval-rules-get

Read one approval rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesGet(
    id: ''
);```

## procurement-approval-rules-update

Update a approval rule

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ApproverType;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementApprovalRulesUpdate(
    id: '',
    active: true, // optional
    approverContactId: '', // optional
    approverRole: '', // optional
    approverType: ApproverType::CONTACT(), // optional
    condition: Condition::ALWAYS(), // optional
    conditionParameters: [], // optional
    costCenterId: '', // optional
    effect: Effect::PENDINGORDER(), // optional
    effectParameters: [], // optional
    metadata: [], // optional
    name: '', // optional
    sequence: 1, // optional
    showCondition: true // optional
);```

## procurement-budget-releases-list

List BudgetRelease

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementBudgetReleasesList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-budget-releases-get

Read one budget release

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementBudgetReleasesGet(
    id: ''
);```

## procurement-budget-releases-retry

Retry giving back a cancelled order's budget — from pending or refused (409 otherwise)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementBudgetReleasesRetry(
    id: ''
);```

## procurement-budget-releases-settle

Settle a refused budget release by hand, with a note — the budget then stays booked for that order (administrator; 409 unless refused)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementBudgetReleasesSettle(
    id: '',
    note: ''
);```

## procurement-direct-orders-list

List DirectOrder

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementDirectOrdersList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-direct-orders-get

Read one direct order

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementDirectOrdersGet(
    id: ''
);```

## procurement-direct-orders-commit

Retry a direct order's budget commit from the movement recorded at submit — from commit_pending or commit_refused (409 otherwise)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementDirectOrdersCommit(
    id: ''
);```

## procurement-direct-orders-settle

Settle a refused budget commit by hand, with a note — the budget is then never booked for that order (administrator; 409 unless commit_refused)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementDirectOrdersSettle(
    id: '',
    note: ''
);```

## procurement-purchase-request-items-open

List the lines of open purchase requests that name a product

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsOpen(
    productId: '',
    status: 'pending,approved', // optional
    limit: 1, // optional
    offset: 1 // optional
);```

## procurement-pending-approvals-list

List PendingApproval

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPendingApprovalsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-pending-approvals-get

Read one pending approval

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPendingApprovalsGet(
    id: ''
);```

## procurement-pending-approvals-approve

Approve one pending approval layer; unlocks the next, or approves the PR when all chains clear

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPendingApprovalsApprove(
    id: '',
    reason: '' // optional
);```

## procurement-pending-approvals-decline

Decline one pending approval — terminates the whole purchase request and withdraws its budget

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPendingApprovalsDecline(
    id: '',
    reason: '' // optional
);```

## procurement-purchase-request-events-list

List PurchaseRequestEvent

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestEventsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-purchase-request-events-get

Read one purchase request outcome event

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestEventsGet(
    id: ''
);```

## procurement-purchase-request-items-list

List PurchaseRequestItem

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-purchase-request-items-create

Create a purchase request item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ProcurementPurchaseRequestItemsCreateType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsCreate(
    name: '',
    purchaseRequestId: '',
    quantity: 9.99,
    configuration: [], // optional
    costCenter: '', // optional
    lineTotal: 9.99, // optional
    metadata: [], // optional
    position: 1, // optional
    positionText: '', // optional
    product: [], // optional
    productId: '', // optional
    sku: '', // optional
    taxAmount: 9.99, // optional
    taxRate: 9.99, // optional
    type: ProcurementPurchaseRequestItemsCreateType::PRODUCT(), // optional
    unit: '', // optional
    unitPrice: 9.99, // optional
    userData: [] // optional
);```

## procurement-purchase-request-items-delete

Delete a purchase request item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsDelete(
    id: ''
);```

## procurement-purchase-request-items-get

Read one purchase request item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsGet(
    id: ''
);```

## procurement-purchase-request-items-update

Update a purchase request item

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ProcurementPurchaseRequestItemsCreateType;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestItemsUpdate(
    id: '',
    configuration: [], // optional
    costCenter: '', // optional
    lineTotal: 9.99, // optional
    metadata: [], // optional
    name: '', // optional
    position: 1, // optional
    positionText: '', // optional
    product: [], // optional
    productId: '', // optional
    purchaseRequestId: '', // optional
    quantity: 9.99, // optional
    sku: '', // optional
    taxAmount: 9.99, // optional
    taxRate: 9.99, // optional
    type: ProcurementPurchaseRequestItemsCreateType::PRODUCT(), // optional
    unit: '', // optional
    unitPrice: 9.99, // optional
    userData: [] // optional
);```

## procurement-purchase-requests-list

List PurchaseRequest

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsList(
    limit: 1, // optional
    offset: 1, // optional
    order: '' // optional
);```

## procurement-purchase-requests-get

Read one purchase request

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsGet(
    id: ''
);```

## procurement-purchase-requests-update

Update a purchase request

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsUpdate(
    id: '',
    billingAddress: [], // optional
    buyer: [], // optional
    cartId: '', // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    customerOrderNumber: '', // optional
    externalRef: '', // optional
    grandTotal: 9.99, // optional
    itemCount: 1, // optional
    metadata: [], // optional
    number: '', // optional
    organizationId: '', // optional
    payment: [], // optional
    senderCountry: 'DE', // optional
    shipping: [], // optional
    shippingAddress: [], // optional
    shippingTotal: 9.99, // optional
    subtotal: 9.99, // optional
    taxTotal: 9.99, // optional
    userData: [] // optional
);```

## procurement-purchase-requests-approve

Super-approve — clear all outstanding approval layers at once and drive the PR to ordered

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsApprove(
    id: '',
    reason: '' // optional
);```

## procurement-purchase-requests-cancel

Cancel a pending purchase request (admin) and withdraw its budget

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsCancel(
    id: '',
    reason: '' // optional
);```

## procurement-purchase-requests-order

Retry-safe approved→ordered: idempotently place the Order and confirm the budget

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementPurchaseRequestsOrder(
    id: ''
);```

## procurement-reconcile

Reconciliation sweep — complete stuck approved→ordered promotions, release orphaned budget reservations, record any outcome whose write failed, finish direct orders whose budget commit is owed, and retry budget releases of cancelled orders

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementReconcile(
    limit: 1 // optional
);```

## procurement-submit

Authoritative checkout submit — evaluate approval rules and create a direct Order, a Purchase Request, or block (409)

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementSubmit(
    cartId: '',
    items: [],
    billingAddress: [], // optional
    buyer: [], // optional
    channelId: '', // optional
    contactId: '', // optional
    currency: '', // optional
    customerOrderNumber: '', // optional
    externalRef: '', // optional
    metadata: [], // optional
    organizationId: '', // optional
    payment: [], // optional
    senderCountry: 'DE', // optional
    shipping: [], // optional
    shippingAddress: [], // optional
    userData: [] // optional
);```

## procurement-submit-cart

Check out a stored cart by id — read it from carts and submit it as /procurement/submit does, then mark the cart ordered once an Order exists

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementSubmitCart(
    cartId: '',
    costCenterId: '', // optional
    customerOrderNumber: '' // optional
);```

## procurement-vocabularies-list

List the enums this app publishes, by name and title, without their values

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementVocabulariesList();
```

## procurement-vocabularies-get

Read one vocabulary — every permitted value in constraint order, with its title and badge tone; 404 for a name that is not one

```php
<?php

use Revenexx\Client;
use Revenexx\Services\Procurement;
use Revenexx\Enums\ProcurementVocabulariesGetName;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$procurement = new Procurement($client);

$result = $procurement->procurementVocabulariesGet(
    name: ProcurementVocabulariesGetName::APPROVALSTATUSES()
);```
