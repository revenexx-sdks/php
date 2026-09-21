<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Allocation;
use Revenexx\Enums\PromotionsConditionsCreateKind;
use Revenexx\Enums\MatchMode;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;
use Revenexx\Enums\PromotionsGroupsCreateMode;
use Revenexx\Enums\ConditionMatch;
use Revenexx\Enums\Reach;
use Revenexx\Enums\RecurrenceKind;
use Revenexx\Enums\ReturnBehaviour;
use Revenexx\Enums\PromotionsPromotionsCreateStatus;

class PromotionsPromotions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The offers that count items rather than money: buy three pay two, the
     * cheapest of any four free, a packet of coffee with every machine. A bundle
     * forms from the units a cart holds and repeats up to a cap.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $name
     * @param ?string $unitsRequired
     * @param ?string $maxPerCart
     * @param ?string $allocation
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $name = null, ?string $unitsRequired = null, ?string $maxPerCart = null, ?string $allocation = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/bundles'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($unitsRequired)) {
            $apiParams['units_required'] = $unitsRequired;
        }

        if (!is_null($maxPerCart)) {
            $apiParams['max_per_cart'] = $maxPerCart;
        }

        if (!is_null($allocation)) {
            $apiParams['allocation'] = $allocation;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $name
     * @param string $promotionId
     * @param ?Allocation $allocation
     * @param ?int $maxPerCart
     * @param ?array $selectors
     * @param ?int $unitsRequired
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesCreate(string $name, string $promotionId, ?Allocation $allocation = null, ?int $maxPerCart = null, ?array $selectors = null, ?int $unitsRequired = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/bundles'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($allocation)) {
            $apiParams['allocation'] = $allocation;
        }

        if (!is_null($maxPerCart)) {
            $apiParams['max_per_cart'] = $maxPerCart;
        }

        if (!is_null($selectors)) {
            $apiParams['selectors'] = $selectors;
        }

        if (!is_null($unitsRequired)) {
            $apiParams['units_required'] = $unitsRequired;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/bundles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/bundles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $name
     * @param string $promotionId
     * @param ?Allocation $allocation
     * @param ?int $maxPerCart
     * @param ?array $selectors
     * @param ?int $unitsRequired
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesUpdate(string $id, string $name, string $promotionId, ?Allocation $allocation = null, ?int $maxPerCart = null, ?array $selectors = null, ?int $unitsRequired = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/bundles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['name'] = $name;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($allocation)) {
            $apiParams['allocation'] = $allocation;
        }

        if (!is_null($maxPerCart)) {
            $apiParams['max_per_cart'] = $maxPerCart;
        }

        if (!is_null($selectors)) {
            $apiParams['selectors'] = $selectors;
        }

        if (!is_null($unitsRequired)) {
            $apiParams['units_required'] = $unitsRequired;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The tree that decides which purchases a promotion catches. A row is either
     * a group, which says whether all or any of what it holds must hold, or a
     * question, which asks one thing from a closed vocabulary. Read the assembled
     * tree at GET /promotions/promotions/{id}/conditions.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $parentId
     * @param ?string $kind
     * @param ?string $matchMode
     * @param ?string $negate
     * @param ?string $subject
     * @param ?string $comparison
     * @param ?string $rightSubject
     * @param ?string $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $parentId = null, ?string $kind = null, ?string $matchMode = null, ?string $negate = null, ?string $subject = null, ?string $comparison = null, ?string $rightSubject = null, ?string $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/conditions'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($matchMode)) {
            $apiParams['match_mode'] = $matchMode;
        }

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($comparison)) {
            $apiParams['comparison'] = $comparison;
        }

        if (!is_null($rightSubject)) {
            $apiParams['right_subject'] = $rightSubject;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $promotionId
     * @param ?float $addend
     * @param ?array $compareValue
     * @param ?array $compareValueTo
     * @param ?string $comparison
     * @param ?float $factor
     * @param ?PromotionsConditionsCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $rightSubject
     * @param ?string $subject
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsCreate(string $promotionId, ?float $addend = null, ?array $compareValue = null, ?array $compareValueTo = null, ?string $comparison = null, ?float $factor = null, ?PromotionsConditionsCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $parentId = null, ?int $position = null, ?string $rightSubject = null, ?string $subject = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/conditions'
        );

        $apiParams = [];
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($addend)) {
            $apiParams['addend'] = $addend;
        }

        if (!is_null($compareValue)) {
            $apiParams['compare_value'] = $compareValue;
        }

        if (!is_null($compareValueTo)) {
            $apiParams['compare_value_to'] = $compareValueTo;
        }

        if (!is_null($comparison)) {
            $apiParams['comparison'] = $comparison;
        }

        if (!is_null($factor)) {
            $apiParams['factor'] = $factor;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($matchMode)) {
            $apiParams['match_mode'] = $matchMode;
        }

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rightSubject)) {
            $apiParams['right_subject'] = $rightSubject;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * What an editor calls while a merchant is still typing, so an unknown
     * subject or a comparison that needs a second value is caught in the form
     * rather than on save.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsValidate(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/conditions/validate'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/conditions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/conditions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $promotionId
     * @param ?float $addend
     * @param ?array $compareValue
     * @param ?array $compareValueTo
     * @param ?string $comparison
     * @param ?float $factor
     * @param ?PromotionsConditionsCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $rightSubject
     * @param ?string $subject
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsUpdate(string $id, string $promotionId, ?float $addend = null, ?array $compareValue = null, ?array $compareValueTo = null, ?string $comparison = null, ?float $factor = null, ?PromotionsConditionsCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $parentId = null, ?int $position = null, ?string $rightSubject = null, ?string $subject = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/conditions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($addend)) {
            $apiParams['addend'] = $addend;
        }

        if (!is_null($compareValue)) {
            $apiParams['compare_value'] = $compareValue;
        }

        if (!is_null($compareValueTo)) {
            $apiParams['compare_value_to'] = $compareValueTo;
        }

        if (!is_null($comparison)) {
            $apiParams['comparison'] = $comparison;
        }

        if (!is_null($factor)) {
            $apiParams['factor'] = $factor;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($matchMode)) {
            $apiParams['match_mode'] = $matchMode;
        }

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($rightSubject)) {
            $apiParams['right_subject'] = $rightSubject;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Effects a tenant invents: unlock a download, extend a warranty, add a gift
     * message. The engine validates the payload when the promotion is WRITTEN and
     * hands it back verbatim when it applies — it never interprets one.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $name
     * @param ?string $shapeVersion
     * @param ?string $carriesAmount
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $name = null, ?string $shapeVersion = null, ?string $carriesAmount = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/custom-effect-types'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($shapeVersion)) {
            $apiParams['shape_version'] = $shapeVersion;
        }

        if (!is_null($carriesAmount)) {
            $apiParams['carries_amount'] = $carriesAmount;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $name
     * @param ?bool $carriesAmount
     * @param ?array $description
     * @param ?array $metadata
     * @param ?array $payloadShape
     * @param ?array $title
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesCreate(string $name, ?bool $carriesAmount = null, ?array $description = null, ?array $metadata = null, ?array $payloadShape = null, ?array $title = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/custom-effect-types'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        if (!is_null($carriesAmount)) {
            $apiParams['carries_amount'] = $carriesAmount;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($payloadShape)) {
            $apiParams['payload_shape'] = $payloadShape;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/custom-effect-types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/custom-effect-types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $name
     * @param ?bool $carriesAmount
     * @param ?array $description
     * @param ?array $metadata
     * @param ?array $payloadShape
     * @param ?array $title
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesUpdate(string $id, string $name, ?bool $carriesAmount = null, ?array $description = null, ?array $metadata = null, ?array $payloadShape = null, ?array $title = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/custom-effect-types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['name'] = $name;

        if (!is_null($carriesAmount)) {
            $apiParams['carries_amount'] = $carriesAmount;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($payloadShape)) {
            $apiParams['payload_shape'] = $payloadShape;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * What a promotion takes off. Three amount shapes against six target scopes
     * — the unit price, the line total, the cart subtotal, the grand total, the
     * shipping cost, the payment fee — plus free items, surcharges, notices,
     * bundles and types a tenant registered itself.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $position
     * @param ?string $kind
     * @param ?string $valueType
     * @param ?string $targetScope
     * @param ?string $bundleId
     * @param ?string $unitChoice
     * @param ?string $unitPosition
     * @param ?string $spread
     * @param ?string $freeItemQuantity
     * @param ?string $requiresChoice
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $position = null, ?string $kind = null, ?string $valueType = null, ?string $targetScope = null, ?string $bundleId = null, ?string $unitChoice = null, ?string $unitPosition = null, ?string $spread = null, ?string $freeItemQuantity = null, ?string $requiresChoice = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/effects'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($valueType)) {
            $apiParams['value_type'] = $valueType;
        }

        if (!is_null($targetScope)) {
            $apiParams['target_scope'] = $targetScope;
        }

        if (!is_null($bundleId)) {
            $apiParams['bundle_id'] = $bundleId;
        }

        if (!is_null($unitChoice)) {
            $apiParams['unit_choice'] = $unitChoice;
        }

        if (!is_null($unitPosition)) {
            $apiParams['unit_position'] = $unitPosition;
        }

        if (!is_null($spread)) {
            $apiParams['spread'] = $spread;
        }

        if (!is_null($freeItemQuantity)) {
            $apiParams['free_item_quantity'] = $freeItemQuantity;
        }

        if (!is_null($requiresChoice)) {
            $apiParams['requires_choice'] = $requiresChoice;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $promotionId
     * @param ?float $amount
     * @param ?array $appliesTo
     * @param ?string $bundleId
     * @param ?array $customPayload
     * @param ?int $customShapeVersion
     * @param ?string $customTypeId
     * @param ?int $freeItemQuantity
     * @param ?array $freeItems
     * @param ?PromotionsEffectsCreateKind $kind
     * @param ?float $maxDiscount
     * @param ?array $message
     * @param ?array $metadata
     * @param ?int $position
     * @param ?bool $requiresChoice
     * @param ?bool $spread
     * @param ?TargetScope $targetScope
     * @param ?UnitChoice $unitChoice
     * @param ?int $unitPosition
     * @param ?ValueType $valueType
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsCreate(string $promotionId, ?float $amount = null, ?array $appliesTo = null, ?string $bundleId = null, ?array $customPayload = null, ?int $customShapeVersion = null, ?string $customTypeId = null, ?int $freeItemQuantity = null, ?array $freeItems = null, ?PromotionsEffectsCreateKind $kind = null, ?float $maxDiscount = null, ?array $message = null, ?array $metadata = null, ?int $position = null, ?bool $requiresChoice = null, ?bool $spread = null, ?TargetScope $targetScope = null, ?UnitChoice $unitChoice = null, ?int $unitPosition = null, ?ValueType $valueType = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/effects'
        );

        $apiParams = [];
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($amount)) {
            $apiParams['amount'] = $amount;
        }

        if (!is_null($appliesTo)) {
            $apiParams['applies_to'] = $appliesTo;
        }

        if (!is_null($bundleId)) {
            $apiParams['bundle_id'] = $bundleId;
        }

        if (!is_null($customPayload)) {
            $apiParams['custom_payload'] = $customPayload;
        }

        if (!is_null($customShapeVersion)) {
            $apiParams['custom_shape_version'] = $customShapeVersion;
        }

        if (!is_null($customTypeId)) {
            $apiParams['custom_type_id'] = $customTypeId;
        }

        if (!is_null($freeItemQuantity)) {
            $apiParams['free_item_quantity'] = $freeItemQuantity;
        }

        if (!is_null($freeItems)) {
            $apiParams['free_items'] = $freeItems;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($maxDiscount)) {
            $apiParams['max_discount'] = $maxDiscount;
        }

        if (!is_null($message)) {
            $apiParams['message'] = $message;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($requiresChoice)) {
            $apiParams['requires_choice'] = $requiresChoice;
        }

        if (!is_null($spread)) {
            $apiParams['spread'] = $spread;
        }

        if (!is_null($targetScope)) {
            $apiParams['target_scope'] = $targetScope;
        }

        if (!is_null($unitChoice)) {
            $apiParams['unit_choice'] = $unitChoice;
        }

        if (!is_null($unitPosition)) {
            $apiParams['unit_position'] = $unitPosition;
        }

        if (!is_null($valueType)) {
            $apiParams['value_type'] = $valueType;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/effects/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/effects/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $promotionId
     * @param ?float $amount
     * @param ?array $appliesTo
     * @param ?string $bundleId
     * @param ?array $customPayload
     * @param ?int $customShapeVersion
     * @param ?string $customTypeId
     * @param ?int $freeItemQuantity
     * @param ?array $freeItems
     * @param ?PromotionsEffectsCreateKind $kind
     * @param ?float $maxDiscount
     * @param ?array $message
     * @param ?array $metadata
     * @param ?int $position
     * @param ?bool $requiresChoice
     * @param ?bool $spread
     * @param ?TargetScope $targetScope
     * @param ?UnitChoice $unitChoice
     * @param ?int $unitPosition
     * @param ?ValueType $valueType
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsUpdate(string $id, string $promotionId, ?float $amount = null, ?array $appliesTo = null, ?string $bundleId = null, ?array $customPayload = null, ?int $customShapeVersion = null, ?string $customTypeId = null, ?int $freeItemQuantity = null, ?array $freeItems = null, ?PromotionsEffectsCreateKind $kind = null, ?float $maxDiscount = null, ?array $message = null, ?array $metadata = null, ?int $position = null, ?bool $requiresChoice = null, ?bool $spread = null, ?TargetScope $targetScope = null, ?UnitChoice $unitChoice = null, ?int $unitPosition = null, ?ValueType $valueType = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/effects/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($amount)) {
            $apiParams['amount'] = $amount;
        }

        if (!is_null($appliesTo)) {
            $apiParams['applies_to'] = $appliesTo;
        }

        if (!is_null($bundleId)) {
            $apiParams['bundle_id'] = $bundleId;
        }

        if (!is_null($customPayload)) {
            $apiParams['custom_payload'] = $customPayload;
        }

        if (!is_null($customShapeVersion)) {
            $apiParams['custom_shape_version'] = $customShapeVersion;
        }

        if (!is_null($customTypeId)) {
            $apiParams['custom_type_id'] = $customTypeId;
        }

        if (!is_null($freeItemQuantity)) {
            $apiParams['free_item_quantity'] = $freeItemQuantity;
        }

        if (!is_null($freeItems)) {
            $apiParams['free_items'] = $freeItems;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($maxDiscount)) {
            $apiParams['max_discount'] = $maxDiscount;
        }

        if (!is_null($message)) {
            $apiParams['message'] = $message;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($requiresChoice)) {
            $apiParams['requires_choice'] = $requiresChoice;
        }

        if (!is_null($spread)) {
            $apiParams['spread'] = $spread;
        }

        if (!is_null($targetScope)) {
            $apiParams['target_scope'] = $targetScope;
        }

        if (!is_null($unitChoice)) {
            $apiParams['unit_choice'] = $unitChoice;
        }

        if (!is_null($unitPosition)) {
            $apiParams['unit_position'] = $unitPosition;
        }

        if (!is_null($valueType)) {
            $apiParams['value_type'] = $valueType;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The sets promotions are weighed in. Whether two offers add up, compete on
     * value or shadow each other is a property of the SET, which a flag on one
     * promotion cannot state. Groups nest, and a nested group competes in its
     * parent as one entry worth what it gives in total.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $mode
     * @param ?string $parentId
     * @param ?string $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $mode = null, ?string $parentId = null, ?string $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/groups'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $code
     * @param string $name
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?PromotionsGroupsCreateMode $mode
     * @param ?string $parentId
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsCreate(string $code, string $name, ?array $labels = null, ?array $metadata = null, ?PromotionsGroupsCreateMode $mode = null, ?string $parentId = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/groups'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/groups/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/groups/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $code
     * @param string $name
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?PromotionsGroupsCreateMode $mode
     * @param ?string $parentId
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsUpdate(string $id, string $code, string $name, ?array $labels = null, ?array $metadata = null, ?PromotionsGroupsCreateMode $mode = null, ?string $parentId = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/groups/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every promotion this tenant has written down, whatever state it is in.
     * Filter `?status=active` for the ones that may apply at all — whether one
     * is live ALSO depends on its window and its recurrence, which GET
     * /promotions/promotions/{id}/state answers.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $description
     * @param ?string $reach
     * @param ?string $status
     * @param ?string $priority
     * @param ?string $exclusive
     * @param ?string $groupId
     * @param ?string $searchBestCombination
     * @param ?string $conditionMatch
     * @param ?string $recurrenceKind
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $description = null, ?string $reach = null, ?string $status = null, ?string $priority = null, ?string $exclusive = null, ?string $groupId = null, ?string $searchBestCombination = null, ?string $conditionMatch = null, ?string $recurrenceKind = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
        }

        if (!is_null($order)) {
            $apiParams['order'] = $order;
        }

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($reach)) {
            $apiParams['reach'] = $reach;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($exclusive)) {
            $apiParams['exclusive'] = $exclusive;
        }

        if (!is_null($groupId)) {
            $apiParams['group_id'] = $groupId;
        }

        if (!is_null($searchBestCombination)) {
            $apiParams['search_best_combination'] = $searchBestCombination;
        }

        if (!is_null($conditionMatch)) {
            $apiParams['condition_match'] = $conditionMatch;
        }

        if (!is_null($recurrenceKind)) {
            $apiParams['recurrence_kind'] = $recurrenceKind;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $code
     * @param string $name
     * @param ?float $budgetDiscount
     * @param ?int $budgetRedemptions
     * @param ?string $campaignRef
     * @param ?string $channelId
     * @param ?ConditionMatch $conditionMatch
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?bool $exclusive
     * @param ?string $groupId
     * @param ?array $labels
     * @param ?int $limitPerContact
     * @param ?int $limitPerOrganization
     * @param ?array $metadata
     * @param ?int $priority
     * @param ?Reach $reach
     * @param ?array $recurrenceDays
     * @param ?string $recurrenceFrom
     * @param ?RecurrenceKind $recurrenceKind
     * @param ?string $recurrenceUntil
     * @param ?array $recurrenceWeekdays
     * @param ?ReturnBehaviour $returnBehaviour
     * @param ?bool $searchBestCombination
     * @param ?string $startsAt
     * @param ?PromotionsPromotionsCreateStatus $status
     * @param ?array $tags
     * @param ?string $timezone
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsCreate(string $code, string $name, ?float $budgetDiscount = null, ?int $budgetRedemptions = null, ?string $campaignRef = null, ?string $channelId = null, ?ConditionMatch $conditionMatch = null, ?string $currency = null, ?string $description = null, ?string $endsAt = null, ?bool $exclusive = null, ?string $groupId = null, ?array $labels = null, ?int $limitPerContact = null, ?int $limitPerOrganization = null, ?array $metadata = null, ?int $priority = null, ?Reach $reach = null, ?array $recurrenceDays = null, ?string $recurrenceFrom = null, ?RecurrenceKind $recurrenceKind = null, ?string $recurrenceUntil = null, ?array $recurrenceWeekdays = null, ?ReturnBehaviour $returnBehaviour = null, ?bool $searchBestCombination = null, ?string $startsAt = null, ?PromotionsPromotionsCreateStatus $status = null, ?array $tags = null, ?string $timezone = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($budgetDiscount)) {
            $apiParams['budget_discount'] = $budgetDiscount;
        }

        if (!is_null($budgetRedemptions)) {
            $apiParams['budget_redemptions'] = $budgetRedemptions;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($conditionMatch)) {
            $apiParams['condition_match'] = $conditionMatch;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($endsAt)) {
            $apiParams['ends_at'] = $endsAt;
        }

        if (!is_null($exclusive)) {
            $apiParams['exclusive'] = $exclusive;
        }

        if (!is_null($groupId)) {
            $apiParams['group_id'] = $groupId;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($limitPerContact)) {
            $apiParams['limit_per_contact'] = $limitPerContact;
        }

        if (!is_null($limitPerOrganization)) {
            $apiParams['limit_per_organization'] = $limitPerOrganization;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($reach)) {
            $apiParams['reach'] = $reach;
        }

        if (!is_null($recurrenceDays)) {
            $apiParams['recurrence_days'] = $recurrenceDays;
        }

        if (!is_null($recurrenceFrom)) {
            $apiParams['recurrence_from'] = $recurrenceFrom;
        }

        if (!is_null($recurrenceKind)) {
            $apiParams['recurrence_kind'] = $recurrenceKind;
        }

        if (!is_null($recurrenceUntil)) {
            $apiParams['recurrence_until'] = $recurrenceUntil;
        }

        if (!is_null($recurrenceWeekdays)) {
            $apiParams['recurrence_weekdays'] = $recurrenceWeekdays;
        }

        if (!is_null($returnBehaviour)) {
            $apiParams['return_behaviour'] = $returnBehaviour;
        }

        if (!is_null($searchBestCombination)) {
            $apiParams['search_best_combination'] = $searchBestCombination;
        }

        if (!is_null($startsAt)) {
            $apiParams['starts_at'] = $startsAt;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }

        if (!is_null($timezone)) {
            $apiParams['timezone'] = $timezone;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param string $id
     * @param string $code
     * @param string $name
     * @param ?float $budgetDiscount
     * @param ?int $budgetRedemptions
     * @param ?string $campaignRef
     * @param ?string $channelId
     * @param ?ConditionMatch $conditionMatch
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?bool $exclusive
     * @param ?string $groupId
     * @param ?array $labels
     * @param ?int $limitPerContact
     * @param ?int $limitPerOrganization
     * @param ?array $metadata
     * @param ?int $priority
     * @param ?Reach $reach
     * @param ?array $recurrenceDays
     * @param ?string $recurrenceFrom
     * @param ?RecurrenceKind $recurrenceKind
     * @param ?string $recurrenceUntil
     * @param ?array $recurrenceWeekdays
     * @param ?ReturnBehaviour $returnBehaviour
     * @param ?bool $searchBestCombination
     * @param ?string $startsAt
     * @param ?PromotionsPromotionsCreateStatus $status
     * @param ?array $tags
     * @param ?string $timezone
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsUpdate(string $id, string $code, string $name, ?float $budgetDiscount = null, ?int $budgetRedemptions = null, ?string $campaignRef = null, ?string $channelId = null, ?ConditionMatch $conditionMatch = null, ?string $currency = null, ?string $description = null, ?string $endsAt = null, ?bool $exclusive = null, ?string $groupId = null, ?array $labels = null, ?int $limitPerContact = null, ?int $limitPerOrganization = null, ?array $metadata = null, ?int $priority = null, ?Reach $reach = null, ?array $recurrenceDays = null, ?string $recurrenceFrom = null, ?RecurrenceKind $recurrenceKind = null, ?string $recurrenceUntil = null, ?array $recurrenceWeekdays = null, ?ReturnBehaviour $returnBehaviour = null, ?bool $searchBestCombination = null, ?string $startsAt = null, ?PromotionsPromotionsCreateStatus $status = null, ?array $tags = null, ?string $timezone = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($budgetDiscount)) {
            $apiParams['budget_discount'] = $budgetDiscount;
        }

        if (!is_null($budgetRedemptions)) {
            $apiParams['budget_redemptions'] = $budgetRedemptions;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($conditionMatch)) {
            $apiParams['condition_match'] = $conditionMatch;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($endsAt)) {
            $apiParams['ends_at'] = $endsAt;
        }

        if (!is_null($exclusive)) {
            $apiParams['exclusive'] = $exclusive;
        }

        if (!is_null($groupId)) {
            $apiParams['group_id'] = $groupId;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($limitPerContact)) {
            $apiParams['limit_per_contact'] = $limitPerContact;
        }

        if (!is_null($limitPerOrganization)) {
            $apiParams['limit_per_organization'] = $limitPerOrganization;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($reach)) {
            $apiParams['reach'] = $reach;
        }

        if (!is_null($recurrenceDays)) {
            $apiParams['recurrence_days'] = $recurrenceDays;
        }

        if (!is_null($recurrenceFrom)) {
            $apiParams['recurrence_from'] = $recurrenceFrom;
        }

        if (!is_null($recurrenceKind)) {
            $apiParams['recurrence_kind'] = $recurrenceKind;
        }

        if (!is_null($recurrenceUntil)) {
            $apiParams['recurrence_until'] = $recurrenceUntil;
        }

        if (!is_null($recurrenceWeekdays)) {
            $apiParams['recurrence_weekdays'] = $recurrenceWeekdays;
        }

        if (!is_null($returnBehaviour)) {
            $apiParams['return_behaviour'] = $returnBehaviour;
        }

        if (!is_null($searchBestCombination)) {
            $apiParams['search_best_combination'] = $searchBestCombination;
        }

        if (!is_null($startsAt)) {
            $apiParams['starts_at'] = $startsAt;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }

        if (!is_null($timezone)) {
            $apiParams['timezone'] = $timezone;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The rows of the condition list, built into the tree the engine evaluates,
     * with the depth it reaches. What an editor renders and what a reader checks
     * an offer against.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsConditions(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/conditions'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * An empty group holds for nothing or for everything, so whichever a merchant
     * meant, one of the two silently ruins the promotion. This finds those, and a
     * tree deeper than the tenant allows, before a shopper does.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsConditionsCheck(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/conditions/check'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Two facts, never one: the state a merchant set, and what the clock has made
     * of it. A surface showing only the first tells a merchant their finished
     * campaign is still running. Also reports whether any buyer can reach it, and
     * what is left of its budget.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsState(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/state'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}