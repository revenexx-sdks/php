```php
<?php

use Revenexx\Client;
use Revenexx\Services\Orders;
use Revenexx\Enums\OrderReturnStatus;
use Revenexx\Enums\OrderReturnRefundMode;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$orders = new Orders($client);

$result = $orders->ordersReturnsList(
    id: '', // optional
    orderId: '', // optional
    number: 'RET-000123', // optional
    status: OrderReturnStatus::REGISTERED(), // optional
    reasonCode: 'damaged', // optional
    reason: 'Two of the four arrived with a cracked housing', // optional
    registeredAt: 'gte.2026-10-01T00:00:00Z', // optional
    receivedAt: 'gte.2026-10-01T00:00:00Z', // optional
    completedAt: 'gte.2026-10-01T00:00:00Z', // optional
    rejectedAt: 'gte.2026-10-01T00:00:00Z', // optional
    resolution: 'refund', // optional
    refundMode: OrderReturnRefundMode::PROPORTIONAL(), // optional
    refundTotal: 64.67, // optional
    discountReturned: 5.23, // optional
    externalId: 'RMA-000271', // optional
    sourceSyncedAt: 'gte.2026-10-01T00:00:00Z', // optional
    createdAt: 'gte.2026-10-01T00:00:00Z', // optional
    updatedAt: 'gte.2026-10-01T00:00:00Z', // optional
    organizationId: '', // optional
    limit: 50, // optional
    offset: 0, // optional
    order: 'created_at.desc' // optional
);```
