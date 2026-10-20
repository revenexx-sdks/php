```php
<?php

use Revenexx\Client;
use Revenexx\Services\QuotesPricing;
use Revenexx\Enums\QuotesPricingReviewState;

$client = (new Client())
    ->setEndpoint('https://api.revenexx.com') // Your API Endpoint
    ->setTenant('<TENANT_SLUG>') // Your tenant slug
    ->setApiKeyAuth('<API_KEY>') // A gateway-managed scoped API key (rvxk_…).
;

$quotesPricing = new QuotesPricing($client);

$result = $quotesPricing->quotesPricingReview(
    id: '',
    contactId: '', // optional
    createdAt: '2026-01-01T12:00:00Z', // optional
    expiresAt: '2026-01-01T12:00:00Z', // optional
    idBody: '', // optional
    issuedCount: 1, // optional
    items: , // optional
    journeyRef: '', // optional
    locale: '', // optional
    market: '', // optional
    metadata: , // optional
    orderId: '', // optional
    orderNumber: '', // optional
    organizationId: '', // optional
    productIds: , // optional
    reviewedCount: 1, // optional
    state: QuotesPricingReviewState::ISSUED(), // optional
    updatedAt: '2026-01-01T12:00:00Z', // optional
    usedAt: '2026-01-01T12:00:00Z' // optional
);```
