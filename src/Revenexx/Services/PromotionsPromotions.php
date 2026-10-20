<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Allocation;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;
use Revenexx\Enums\PromotionsEffectsCreateKind;
use Revenexx\Enums\TargetScope;
use Revenexx\Enums\UnitChoice;
use Revenexx\Enums\ValueType;
use Revenexx\Enums\PromotionsGroupsCreateMode;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\ConditionMatch;
use Revenexx\Enums\Reach;
use Revenexx\Enums\RecurrenceKind;
use Revenexx\Enums\ReturnBehaviour;
use Revenexx\Enums\PromotionsPromotionsCreateStatus;
use Revenexx\Enums\PromotionsPromotionsCopyParts;
use Revenexx\Enums\When;

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
     * @param ?mixed $selectors
     * @param ?int $unitsRequired
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesCreate(string $name, string $promotionId, ?Allocation $allocation = null, ?int $maxPerCart = null, mixed $selectors = null, ?int $unitsRequired = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/bundles'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['promotion_id'] = $promotionId;
        $apiParams['allocation'] = $allocation;
        $apiParams['max_per_cart'] = $maxPerCart;

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
     * @param ?Allocation $allocation
     * @param ?int $maxPerCart
     * @param ?string $name
     * @param ?string $promotionId
     * @param ?mixed $selectors
     * @param ?int $unitsRequired
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBundlesUpdate(string $id, ?Allocation $allocation = null, ?int $maxPerCart = null, ?string $name = null, ?string $promotionId = null, mixed $selectors = null, ?int $unitsRequired = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/bundles/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['allocation'] = $allocation;
        $apiParams['max_per_cart'] = $maxPerCart;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
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
     * @param ?string $summary
     * @param ?string $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $parentId = null, ?string $kind = null, ?string $matchMode = null, ?string $negate = null, ?string $subject = null, ?string $comparison = null, ?string $rightSubject = null, ?string $summary = null, ?string $position = null): array
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

        if (!is_null($summary)) {
            $apiParams['summary'] = $summary;
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
     * @param ?mixed $compareValue
     * @param ?mixed $compareValueTo
     * @param ?string $comparison
     * @param ?float $factor
     * @param ?AudiencesRulesCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $rightSubject
     * @param ?string $subject
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsCreate(string $promotionId, ?float $addend = null, mixed $compareValue = null, mixed $compareValueTo = null, ?string $comparison = null, ?float $factor = null, ?AudiencesRulesCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $parentId = null, ?int $position = null, ?string $rightSubject = null, ?string $subject = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/conditions'
        );

        $apiParams = [];
        $apiParams['promotion_id'] = $promotionId;
        $apiParams['addend'] = $addend;

        if (!is_null($compareValue)) {
            $apiParams['compare_value'] = $compareValue;
        }

        if (!is_null($compareValueTo)) {
            $apiParams['compare_value_to'] = $compareValueTo;
        }
        $apiParams['comparison'] = $comparison;
        $apiParams['factor'] = $factor;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['match_mode'] = $matchMode;

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }
        $apiParams['parent_id'] = $parentId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['right_subject'] = $rightSubject;
        $apiParams['subject'] = $subject;

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
     * @param ?float $addend
     * @param ?mixed $compareValue
     * @param ?mixed $compareValueTo
     * @param ?string $comparison
     * @param ?float $factor
     * @param ?AudiencesRulesCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $promotionId
     * @param ?string $rightSubject
     * @param ?string $subject
     * @throws RevenexxException
     * @return array
     */
    public function promotionsConditionsUpdate(string $id, ?float $addend = null, mixed $compareValue = null, mixed $compareValueTo = null, ?string $comparison = null, ?float $factor = null, ?AudiencesRulesCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $parentId = null, ?int $position = null, ?string $promotionId = null, ?string $rightSubject = null, ?string $subject = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/conditions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['addend'] = $addend;

        if (!is_null($compareValue)) {
            $apiParams['compare_value'] = $compareValue;
        }

        if (!is_null($compareValueTo)) {
            $apiParams['compare_value_to'] = $compareValueTo;
        }
        $apiParams['comparison'] = $comparison;
        $apiParams['factor'] = $factor;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['match_mode'] = $matchMode;

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }
        $apiParams['parent_id'] = $parentId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }
        $apiParams['right_subject'] = $rightSubject;
        $apiParams['subject'] = $subject;

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
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $name = null, ?string $shapeVersion = null, ?string $carriesAmount = null, ?string $active = null): array
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

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param ?bool $active
     * @param ?bool $carriesAmount
     * @param ?mixed $description
     * @param ?mixed $metadata
     * @param ?mixed $payloadShape
     * @param ?mixed $title
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesCreate(string $name, ?bool $active = null, ?bool $carriesAmount = null, mixed $description = null, mixed $metadata = null, mixed $payloadShape = null, mixed $title = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/custom-effect-types'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

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
     * @param ?bool $active
     * @param ?bool $carriesAmount
     * @param ?mixed $description
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?mixed $payloadShape
     * @param ?mixed $title
     * @throws RevenexxException
     * @return array
     */
    public function promotionsCustomEffectTypesUpdate(string $id, ?bool $active = null, ?bool $carriesAmount = null, mixed $description = null, mixed $metadata = null, ?string $name = null, mixed $payloadShape = null, mixed $title = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/custom-effect-types/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($carriesAmount)) {
            $apiParams['carries_amount'] = $carriesAmount;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
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
     * @param ?mixed $appliesTo
     * @param ?string $bundleId
     * @param ?mixed $customPayload
     * @param ?int $customShapeVersion
     * @param ?string $customTypeId
     * @param ?int $freeItemQuantity
     * @param ?mixed $freeItems
     * @param ?PromotionsEffectsCreateKind $kind
     * @param ?float $maxDiscount
     * @param ?mixed $message
     * @param ?mixed $metadata
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
    public function promotionsEffectsCreate(string $promotionId, ?float $amount = null, mixed $appliesTo = null, ?string $bundleId = null, mixed $customPayload = null, ?int $customShapeVersion = null, ?string $customTypeId = null, ?int $freeItemQuantity = null, mixed $freeItems = null, ?PromotionsEffectsCreateKind $kind = null, ?float $maxDiscount = null, mixed $message = null, mixed $metadata = null, ?int $position = null, ?bool $requiresChoice = null, ?bool $spread = null, ?TargetScope $targetScope = null, ?UnitChoice $unitChoice = null, ?int $unitPosition = null, ?ValueType $valueType = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/effects'
        );

        $apiParams = [];
        $apiParams['promotion_id'] = $promotionId;
        $apiParams['amount'] = $amount;

        if (!is_null($appliesTo)) {
            $apiParams['applies_to'] = $appliesTo;
        }
        $apiParams['bundle_id'] = $bundleId;

        if (!is_null($customPayload)) {
            $apiParams['custom_payload'] = $customPayload;
        }
        $apiParams['custom_shape_version'] = $customShapeVersion;
        $apiParams['custom_type_id'] = $customTypeId;
        $apiParams['free_item_quantity'] = $freeItemQuantity;

        if (!is_null($freeItems)) {
            $apiParams['free_items'] = $freeItems;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['max_discount'] = $maxDiscount;

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
        $apiParams['target_scope'] = $targetScope;
        $apiParams['unit_choice'] = $unitChoice;
        $apiParams['unit_position'] = $unitPosition;
        $apiParams['value_type'] = $valueType;

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
     * @param ?float $amount
     * @param ?mixed $appliesTo
     * @param ?string $bundleId
     * @param ?mixed $customPayload
     * @param ?int $customShapeVersion
     * @param ?string $customTypeId
     * @param ?int $freeItemQuantity
     * @param ?mixed $freeItems
     * @param ?PromotionsEffectsCreateKind $kind
     * @param ?float $maxDiscount
     * @param ?mixed $message
     * @param ?mixed $metadata
     * @param ?int $position
     * @param ?string $promotionId
     * @param ?bool $requiresChoice
     * @param ?bool $spread
     * @param ?TargetScope $targetScope
     * @param ?UnitChoice $unitChoice
     * @param ?int $unitPosition
     * @param ?ValueType $valueType
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEffectsUpdate(string $id, ?float $amount = null, mixed $appliesTo = null, ?string $bundleId = null, mixed $customPayload = null, ?int $customShapeVersion = null, ?string $customTypeId = null, ?int $freeItemQuantity = null, mixed $freeItems = null, ?PromotionsEffectsCreateKind $kind = null, ?float $maxDiscount = null, mixed $message = null, mixed $metadata = null, ?int $position = null, ?string $promotionId = null, ?bool $requiresChoice = null, ?bool $spread = null, ?TargetScope $targetScope = null, ?UnitChoice $unitChoice = null, ?int $unitPosition = null, ?ValueType $valueType = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/effects/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['amount'] = $amount;

        if (!is_null($appliesTo)) {
            $apiParams['applies_to'] = $appliesTo;
        }
        $apiParams['bundle_id'] = $bundleId;

        if (!is_null($customPayload)) {
            $apiParams['custom_payload'] = $customPayload;
        }
        $apiParams['custom_shape_version'] = $customShapeVersion;
        $apiParams['custom_type_id'] = $customTypeId;
        $apiParams['free_item_quantity'] = $freeItemQuantity;

        if (!is_null($freeItems)) {
            $apiParams['free_items'] = $freeItems;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['max_discount'] = $maxDiscount;

        if (!is_null($message)) {
            $apiParams['message'] = $message;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($promotionId)) {
            $apiParams['promotion_id'] = $promotionId;
        }

        if (!is_null($requiresChoice)) {
            $apiParams['requires_choice'] = $requiresChoice;
        }

        if (!is_null($spread)) {
            $apiParams['spread'] = $spread;
        }
        $apiParams['target_scope'] = $targetScope;
        $apiParams['unit_choice'] = $unitChoice;
        $apiParams['unit_position'] = $unitPosition;
        $apiParams['value_type'] = $valueType;

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
     * @param ?string $active
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $mode = null, ?string $parentId = null, ?string $position = null, ?string $active = null): array
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

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
     * @param ?bool $active
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?PromotionsGroupsCreateMode $mode
     * @param ?string $parentId
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsCreate(string $code, string $name, ?bool $active = null, mixed $labels = null, mixed $metadata = null, ?PromotionsGroupsCreateMode $mode = null, ?string $parentId = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/groups'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }
        $apiParams['parent_id'] = $parentId;

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
     * @param ?bool $active
     * @param ?string $code
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?PromotionsGroupsCreateMode $mode
     * @param ?string $name
     * @param ?string $parentId
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function promotionsGroupsUpdate(string $id, ?bool $active = null, ?string $code = null, mixed $labels = null, mixed $metadata = null, ?PromotionsGroupsCreateMode $mode = null, ?string $name = null, ?string $parentId = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/groups/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($mode)) {
            $apiParams['mode'] = $mode;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['parent_id'] = $parentId;

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
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $description
     * @param ?string $reach
     * @param ?string $status
     * @param ?string $effectiveState
     * @param ?string $priority
     * @param ?string $exclusive
     * @param ?string $groupId
     * @param ?string $searchBestCombination
     * @param ?string $conditionMatch
     * @param ?string $campaignRef
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $description = null, ?string $reach = null, ?string $status = null, ?string $effectiveState = null, ?string $priority = null, ?string $exclusive = null, ?string $groupId = null, ?string $searchBestCombination = null, ?string $conditionMatch = null, ?string $campaignRef = null): array
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

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
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

        if (!is_null($effectiveState)) {
            $apiParams['effective_state'] = $effectiveState;
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

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
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
     * @param ?mixed $audienceChannels
     * @param ?mixed $audienceRoles
     * @param ?mixed $audienceSegments
     * @param ?float $budgetDiscount
     * @param ?int $budgetRedemptions
     * @param ?string $campaignRef
     * @param ?string $channelId
     * @param ?ConditionMatch $conditionMatch
     * @param ?string $currency
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?bool $exclusive
     * @param ?string $groupId
     * @param ?mixed $labels
     * @param ?int $limitPerContact
     * @param ?int $limitPerOrganization
     * @param ?mixed $metadata
     * @param ?int $priority
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?Reach $reach
     * @param ?mixed $recurrenceDays
     * @param ?string $recurrenceFrom
     * @param ?RecurrenceKind $recurrenceKind
     * @param ?string $recurrenceUntil
     * @param ?mixed $recurrenceWeekdays
     * @param ?ReturnBehaviour $returnBehaviour
     * @param ?bool $searchBestCombination
     * @param ?string $startsAt
     * @param ?PromotionsPromotionsCreateStatus $status
     * @param ?mixed $tags
     * @param ?string $template
     * @param ?string $timezone
     * @param ?string $trashBatch
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsCreate(string $code, string $name, mixed $audienceChannels = null, mixed $audienceRoles = null, mixed $audienceSegments = null, ?float $budgetDiscount = null, ?int $budgetRedemptions = null, ?string $campaignRef = null, ?string $channelId = null, ?ConditionMatch $conditionMatch = null, ?string $currency = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $description = null, ?string $endsAt = null, ?bool $exclusive = null, ?string $groupId = null, mixed $labels = null, ?int $limitPerContact = null, ?int $limitPerOrganization = null, mixed $metadata = null, ?int $priority = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?Reach $reach = null, mixed $recurrenceDays = null, ?string $recurrenceFrom = null, ?RecurrenceKind $recurrenceKind = null, ?string $recurrenceUntil = null, mixed $recurrenceWeekdays = null, ?ReturnBehaviour $returnBehaviour = null, ?bool $searchBestCombination = null, ?string $startsAt = null, ?PromotionsPromotionsCreateStatus $status = null, mixed $tags = null, ?string $template = null, ?string $timezone = null, ?string $trashBatch = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;

        if (!is_null($audienceChannels)) {
            $apiParams['audience_channels'] = $audienceChannels;
        }

        if (!is_null($audienceRoles)) {
            $apiParams['audience_roles'] = $audienceRoles;
        }

        if (!is_null($audienceSegments)) {
            $apiParams['audience_segments'] = $audienceSegments;
        }
        $apiParams['budget_discount'] = $budgetDiscount;
        $apiParams['budget_redemptions'] = $budgetRedemptions;
        $apiParams['campaign_ref'] = $campaignRef;
        $apiParams['channel_id'] = $channelId;

        if (!is_null($conditionMatch)) {
            $apiParams['condition_match'] = $conditionMatch;
        }
        $apiParams['currency'] = $currency;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['description'] = $description;
        $apiParams['ends_at'] = $endsAt;

        if (!is_null($exclusive)) {
            $apiParams['exclusive'] = $exclusive;
        }
        $apiParams['group_id'] = $groupId;

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }
        $apiParams['limit_per_contact'] = $limitPerContact;
        $apiParams['limit_per_organization'] = $limitPerOrganization;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;

        if (!is_null($reach)) {
            $apiParams['reach'] = $reach;
        }

        if (!is_null($recurrenceDays)) {
            $apiParams['recurrence_days'] = $recurrenceDays;
        }
        $apiParams['recurrence_from'] = $recurrenceFrom;

        if (!is_null($recurrenceKind)) {
            $apiParams['recurrence_kind'] = $recurrenceKind;
        }
        $apiParams['recurrence_until'] = $recurrenceUntil;

        if (!is_null($recurrenceWeekdays)) {
            $apiParams['recurrence_weekdays'] = $recurrenceWeekdays;
        }
        $apiParams['return_behaviour'] = $returnBehaviour;

        if (!is_null($searchBestCombination)) {
            $apiParams['search_best_combination'] = $searchBestCombination;
        }
        $apiParams['starts_at'] = $startsAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }
        $apiParams['template'] = $template;
        $apiParams['timezone'] = $timezone;
        $apiParams['trash_batch'] = $trashBatch;

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
     * The question the Cockpit wizard asks before a promotion exists: `ok` is
     * false while any promotion is running, and `overlaps` names them, so the
     * merchant checks the priorities.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsOverlapCheck(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions/overlap-check'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every promotion in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. A right of its own, apart
     * from deleting.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions/trash/empty'
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
     * What the daily purge does, callable by hand: every promotion in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/promotions/trash/purge'
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
     * The first delete moves the promotion to the trash: it applies nowhere, its
     * code stays reserved, and its conditions, effects, bundles, vouchers and
     * batches stay with it untouched. Refused for a promotion that has been
     * redeemed, which is archived instead. The second delete, on a promotion
     * already in the trash, deletes it for good — only then do its parts go and
     * `promotion.deleted` fire.
     *
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
     * @param ?mixed $audienceChannels
     * @param ?mixed $audienceRoles
     * @param ?mixed $audienceSegments
     * @param ?float $budgetDiscount
     * @param ?int $budgetRedemptions
     * @param ?string $campaignRef
     * @param ?string $channelId
     * @param ?string $code
     * @param ?ConditionMatch $conditionMatch
     * @param ?string $currency
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $description
     * @param ?string $endsAt
     * @param ?bool $exclusive
     * @param ?string $groupId
     * @param ?mixed $labels
     * @param ?int $limitPerContact
     * @param ?int $limitPerOrganization
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?int $priority
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?Reach $reach
     * @param ?mixed $recurrenceDays
     * @param ?string $recurrenceFrom
     * @param ?RecurrenceKind $recurrenceKind
     * @param ?string $recurrenceUntil
     * @param ?mixed $recurrenceWeekdays
     * @param ?ReturnBehaviour $returnBehaviour
     * @param ?bool $searchBestCombination
     * @param ?string $startsAt
     * @param ?PromotionsPromotionsCreateStatus $status
     * @param ?mixed $tags
     * @param ?string $template
     * @param ?string $timezone
     * @param ?string $trashBatch
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsUpdate(string $id, mixed $audienceChannels = null, mixed $audienceRoles = null, mixed $audienceSegments = null, ?float $budgetDiscount = null, ?int $budgetRedemptions = null, ?string $campaignRef = null, ?string $channelId = null, ?string $code = null, ?ConditionMatch $conditionMatch = null, ?string $currency = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $description = null, ?string $endsAt = null, ?bool $exclusive = null, ?string $groupId = null, mixed $labels = null, ?int $limitPerContact = null, ?int $limitPerOrganization = null, mixed $metadata = null, ?string $name = null, ?int $priority = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?Reach $reach = null, mixed $recurrenceDays = null, ?string $recurrenceFrom = null, ?RecurrenceKind $recurrenceKind = null, ?string $recurrenceUntil = null, mixed $recurrenceWeekdays = null, ?ReturnBehaviour $returnBehaviour = null, ?bool $searchBestCombination = null, ?string $startsAt = null, ?PromotionsPromotionsCreateStatus $status = null, mixed $tags = null, ?string $template = null, ?string $timezone = null, ?string $trashBatch = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($audienceChannels)) {
            $apiParams['audience_channels'] = $audienceChannels;
        }

        if (!is_null($audienceRoles)) {
            $apiParams['audience_roles'] = $audienceRoles;
        }

        if (!is_null($audienceSegments)) {
            $apiParams['audience_segments'] = $audienceSegments;
        }
        $apiParams['budget_discount'] = $budgetDiscount;
        $apiParams['budget_redemptions'] = $budgetRedemptions;
        $apiParams['campaign_ref'] = $campaignRef;
        $apiParams['channel_id'] = $channelId;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($conditionMatch)) {
            $apiParams['condition_match'] = $conditionMatch;
        }
        $apiParams['currency'] = $currency;
        $apiParams['deleted_at'] = $deletedAt;
        $apiParams['deleted_by'] = $deletedBy;
        $apiParams['deleted_by_id'] = $deletedById;
        $apiParams['description'] = $description;
        $apiParams['ends_at'] = $endsAt;

        if (!is_null($exclusive)) {
            $apiParams['exclusive'] = $exclusive;
        }
        $apiParams['group_id'] = $groupId;

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }
        $apiParams['limit_per_contact'] = $limitPerContact;
        $apiParams['limit_per_organization'] = $limitPerOrganization;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }
        $apiParams['purge_at'] = $purgeAt;
        $apiParams['purge_blocked_reason'] = $purgeBlockedReason;

        if (!is_null($reach)) {
            $apiParams['reach'] = $reach;
        }

        if (!is_null($recurrenceDays)) {
            $apiParams['recurrence_days'] = $recurrenceDays;
        }
        $apiParams['recurrence_from'] = $recurrenceFrom;

        if (!is_null($recurrenceKind)) {
            $apiParams['recurrence_kind'] = $recurrenceKind;
        }
        $apiParams['recurrence_until'] = $recurrenceUntil;

        if (!is_null($recurrenceWeekdays)) {
            $apiParams['recurrence_weekdays'] = $recurrenceWeekdays;
        }
        $apiParams['return_behaviour'] = $returnBehaviour;

        if (!is_null($searchBestCombination)) {
            $apiParams['search_best_combination'] = $searchBestCombination;
        }
        $apiParams['starts_at'] = $startsAt;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($tags)) {
            $apiParams['tags'] = $tags;
        }
        $apiParams['template'] = $template;
        $apiParams['timezone'] = $timezone;
        $apiParams['trash_batch'] = $trashBatch;

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
     * A draft with everything the promotion says about itself, under a new code,
     * plus the parts asked for: `conditions` (the whole tree) and `effects`.
     * Vouchers, redemptions and the budget used are never copied — they are
     * what happened to the original. Answers the new promotion with `copied`
     * counting what came along.
     *
     * @param string $id
     * @param string $code
     * @param ?array $parts
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsCopy(string $id, string $code, ?array $parts = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/copy'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['code'] = $code;

        if (!is_null($parts)) {
            $apiParams['parts'] = $parts;
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
     * Sets the end of a running, scheduled or paused promotion — now, or at a
     * later date — and nothing else, so its redemptions stay as they are. Holds
     * open carts carry keep counting, unless `honour_reservations` is false and
     * it ends now: then they are given back as expired.
     *
     * @param string $id
     * @param ?string $at
     * @param ?bool $honourReservations
     * @param ?When $when
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsEnd(string $id, ?string $at = null, ?bool $honourReservations = null, ?When $when = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/end'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($at)) {
            $apiParams['at'] = $at;
        }

        if (!is_null($honourReservations)) {
            $apiParams['honour_reservations'] = $honourReservations;
        }

        if (!is_null($when)) {
            $apiParams['when'] = $when;
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
     * Running or scheduled promotions whose window overlaps this one, that act on
     * the same kind of amount (goods or shipping) and share a market — a
     * promotion in no market is in every one. Each says when and where they meet,
     * and how they combine by exclusivity and priority.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsOverlaps(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/overlaps'
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
     * Two panels of German sentences for the Cockpit record: `effect` (the
     * sentence, every effect, the goods, whether it combines) and `runtime`
     * (state against release, time left, budget used, a forecast of when the
     * budget runs out at the current pace, and how many carts hold it now).
     * `usage` carries the discount budget, the redemption ceiling and the runtime
     * as rows of label and value with the share gone, worded in the caller
     * language (Accept-Language; German unless English is asked for), the carts
     * holding it as a `footer` row.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsOverview(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/overview'
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
     * Clears the trash marks on the promotion. Its conditions, effects, bundles,
     * vouchers and batches were never touched, so they come back with it, and it
     * applies again exactly as it did before — in the state it was in. The same
     * right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/restore'
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

    /**
     * Redemptions committed per day, and of those the ones later taken back (a
     * cancellation or a return) on the day they were taken back, in the promotion
     * time zone (Europe/Berlin when it names none) — from the first such day to
     * the last with every day between, at most the latest 60 days.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsPromotionsTimeline(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/promotions/{id}/timeline'
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