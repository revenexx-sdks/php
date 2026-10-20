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
