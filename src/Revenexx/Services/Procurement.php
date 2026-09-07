<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Condition;
use Revenexx\Enums\Effect;
use Revenexx\Enums\ApproverType;
use Revenexx\Enums\ProcurementPurchaseRequestItemsCreateType;

class Procurement extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function procurementApprovalRulesList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/approval-rules'
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

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * @param Condition $condition
     * @param Effect $effect
     * @param string $name
     * @param ?bool $active
     * @param ?string $approverRef
     * @param ?ApproverType $approverType
     * @param ?array $conditionParameters
     * @param ?string $costCenterId
     * @param ?array $effectParameters
     * @param ?array $metadata
     * @param ?int $sequence
     * @param ?bool $showCondition
     * @throws RevenexxException
     * @return array
     */
    public function procurementApprovalRulesCreate(Condition $condition, Effect $effect, string $name, ?bool $active = null, ?string $approverRef = null, ?ApproverType $approverType = null, ?array $conditionParameters = null, ?string $costCenterId = null, ?array $effectParameters = null, ?array $metadata = null, ?int $sequence = null, ?bool $showCondition = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/approval-rules'
        );

        $apiParams = [];
        $apiParams['condition'] = $condition;
        $apiParams['effect'] = $effect;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['approver_ref'] = $approverRef;

        if (!is_null($approverType)) {
            $apiParams['approver_type'] = $approverType;
        }
        $apiParams['condition_parameters'] = $conditionParameters;
        $apiParams['cost_center_id'] = $costCenterId;
        $apiParams['effect_parameters'] = $effectParameters;
        $apiParams['metadata'] = $metadata;

        if (!is_null($sequence)) {
            $apiParams['sequence'] = $sequence;
        }

        if (!is_null($showCondition)) {
            $apiParams['show_condition'] = $showCondition;
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
    public function procurementApprovalRulesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/approval-rules/{id}'
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
    public function procurementApprovalRulesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/approval-rules/{id}'
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
     * @param ?string $approverRef
     * @param ?ApproverType $approverType
     * @param ?Condition $condition
     * @param ?array $conditionParameters
     * @param ?string $costCenterId
     * @param ?Effect $effect
     * @param ?array $effectParameters
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $sequence
     * @param ?bool $showCondition
     * @throws RevenexxException
     * @return array
     */
    public function procurementApprovalRulesUpdate(string $id, ?bool $active = null, ?string $approverRef = null, ?ApproverType $approverType = null, ?Condition $condition = null, ?array $conditionParameters = null, ?string $costCenterId = null, ?Effect $effect = null, ?array $effectParameters = null, ?array $metadata = null, ?string $name = null, ?int $sequence = null, ?bool $showCondition = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/approval-rules/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['approver_ref'] = $approverRef;

        if (!is_null($approverType)) {
            $apiParams['approver_type'] = $approverType;
        }

        if (!is_null($condition)) {
            $apiParams['condition'] = $condition;
        }
        $apiParams['condition_parameters'] = $conditionParameters;
        $apiParams['cost_center_id'] = $costCenterId;

        if (!is_null($effect)) {
            $apiParams['effect'] = $effect;
        }
        $apiParams['effect_parameters'] = $effectParameters;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($sequence)) {
            $apiParams['sequence'] = $sequence;
        }

        if (!is_null($showCondition)) {
            $apiParams['show_condition'] = $showCondition;
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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function procurementPendingApprovalsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/pending-approvals'
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
     * @throws RevenexxException
     * @return array
     */
    public function procurementPendingApprovalsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/pending-approvals/{id}'
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
     * @param ?string $by
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function procurementPendingApprovalsApprove(string $id, ?string $by = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/pending-approvals/{id}/approve'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['by'] = $by;
        $apiParams['reason'] = $reason;

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
     * @param ?string $by
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function procurementPendingApprovalsDecline(string $id, ?string $by = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/pending-approvals/{id}/decline'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['by'] = $by;
        $apiParams['reason'] = $reason;

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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestEventsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/purchase-request-events'
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
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestEventsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-request-events/{id}'
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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestItemsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/purchase-request-items'
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
     * @param string $purchaseRequestId
     * @param float $quantity
     * @param ?array $configuration
     * @param ?string $costCenter
     * @param ?float $lineTotal
     * @param ?array $metadata
     * @param ?int $position
     * @param ?string $positionText
     * @param ?array $product
     * @param ?string $productId
     * @param ?string $sku
     * @param ?float $taxAmount
     * @param ?float $taxRate
     * @param ?ProcurementPurchaseRequestItemsCreateType $type
     * @param ?string $unit
     * @param ?float $unitPrice
     * @param ?array $userData
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestItemsCreate(string $name, string $purchaseRequestId, float $quantity, ?array $configuration = null, ?string $costCenter = null, ?float $lineTotal = null, ?array $metadata = null, ?int $position = null, ?string $positionText = null, ?array $product = null, ?string $productId = null, ?string $sku = null, ?float $taxAmount = null, ?float $taxRate = null, ?ProcurementPurchaseRequestItemsCreateType $type = null, ?string $unit = null, ?float $unitPrice = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/purchase-request-items'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['purchase_request_id'] = $purchaseRequestId;
        $apiParams['quantity'] = $quantity;
        $apiParams['configuration'] = $configuration;
        $apiParams['cost_center'] = $costCenter;

        if (!is_null($lineTotal)) {
            $apiParams['line_total'] = $lineTotal;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['position_text'] = $positionText;
        $apiParams['product'] = $product;
        $apiParams['product_id'] = $productId;
        $apiParams['sku'] = $sku;

        if (!is_null($taxAmount)) {
            $apiParams['tax_amount'] = $taxAmount;
        }

        if (!is_null($taxRate)) {
            $apiParams['tax_rate'] = $taxRate;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['unit'] = $unit;

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
        }
        $apiParams['user_data'] = $userData;

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
    public function procurementPurchaseRequestItemsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-request-items/{id}'
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
    public function procurementPurchaseRequestItemsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-request-items/{id}'
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
     * @param ?array $configuration
     * @param ?string $costCenter
     * @param ?float $lineTotal
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?string $positionText
     * @param ?array $product
     * @param ?string $productId
     * @param ?string $purchaseRequestId
     * @param ?float $quantity
     * @param ?string $sku
     * @param ?float $taxAmount
     * @param ?float $taxRate
     * @param ?ProcurementPurchaseRequestItemsCreateType $type
     * @param ?string $unit
     * @param ?float $unitPrice
     * @param ?array $userData
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestItemsUpdate(string $id, ?array $configuration = null, ?string $costCenter = null, ?float $lineTotal = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $positionText = null, ?array $product = null, ?string $productId = null, ?string $purchaseRequestId = null, ?float $quantity = null, ?string $sku = null, ?float $taxAmount = null, ?float $taxRate = null, ?ProcurementPurchaseRequestItemsCreateType $type = null, ?string $unit = null, ?float $unitPrice = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-request-items/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['configuration'] = $configuration;
        $apiParams['cost_center'] = $costCenter;

        if (!is_null($lineTotal)) {
            $apiParams['line_total'] = $lineTotal;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['position_text'] = $positionText;
        $apiParams['product'] = $product;
        $apiParams['product_id'] = $productId;

        if (!is_null($purchaseRequestId)) {
            $apiParams['purchase_request_id'] = $purchaseRequestId;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }
        $apiParams['sku'] = $sku;

        if (!is_null($taxAmount)) {
            $apiParams['tax_amount'] = $taxAmount;
        }

        if (!is_null($taxRate)) {
            $apiParams['tax_rate'] = $taxRate;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['unit'] = $unit;

        if (!is_null($unitPrice)) {
            $apiParams['unit_price'] = $unitPrice;
        }
        $apiParams['user_data'] = $userData;

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
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/purchase-requests'
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
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-requests/{id}'
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
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $cartId
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $customerOrderNumber
     * @param ?string $externalRef
     * @param ?float $grandTotal
     * @param ?int $itemCount
     * @param ?array $metadata
     * @param ?string $number
     * @param ?string $organizationId
     * @param ?array $payment
     * @param ?array $shipping
     * @param ?array $shippingAddress
     * @param ?float $shippingTotal
     * @param ?float $subtotal
     * @param ?float $taxTotal
     * @param ?array $userData
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestsUpdate(string $id, ?array $billingAddress = null, ?array $buyer = null, ?string $cartId = null, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $customerOrderNumber = null, ?string $externalRef = null, ?float $grandTotal = null, ?int $itemCount = null, ?array $metadata = null, ?string $number = null, ?string $organizationId = null, ?array $payment = null, ?array $shipping = null, ?array $shippingAddress = null, ?float $shippingTotal = null, ?float $subtotal = null, ?float $taxTotal = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-requests/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['billing_address'] = $billingAddress;
        $apiParams['buyer'] = $buyer;
        $apiParams['cart_id'] = $cartId;
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['customer_order_number'] = $customerOrderNumber;
        $apiParams['external_ref'] = $externalRef;

        if (!is_null($grandTotal)) {
            $apiParams['grand_total'] = $grandTotal;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }
        $apiParams['organization_id'] = $organizationId;
        $apiParams['payment'] = $payment;
        $apiParams['shipping'] = $shipping;
        $apiParams['shipping_address'] = $shippingAddress;

        if (!is_null($shippingTotal)) {
            $apiParams['shipping_total'] = $shippingTotal;
        }

        if (!is_null($subtotal)) {
            $apiParams['subtotal'] = $subtotal;
        }

        if (!is_null($taxTotal)) {
            $apiParams['tax_total'] = $taxTotal;
        }
        $apiParams['user_data'] = $userData;

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
     * @param string $id
     * @param ?string $by
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestsApprove(string $id, ?string $by = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-requests/{id}/approve'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['by'] = $by;
        $apiParams['reason'] = $reason;

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
     * @param ?string $by
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function procurementPurchaseRequestsCancel(string $id, ?string $by = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-requests/{id}/cancel'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['by'] = $by;
        $apiParams['reason'] = $reason;

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
    public function procurementPurchaseRequestsOrder(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/procurement/purchase-requests/{id}/order'
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
     * @param ?int $limit
     * @throws RevenexxException
     * @return array
     */
    public function procurementReconcile(?int $limit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/reconcile'
        );

        $apiParams = [];

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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
     * @param string $cartId
     * @param array $items
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $customerOrderNumber
     * @param ?string $externalRef
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?array $payment
     * @param ?array $shipping
     * @param ?array $shippingAddress
     * @param ?array $userData
     * @throws RevenexxException
     * @return array
     */
    public function procurementSubmit(string $cartId, array $items, ?array $billingAddress = null, ?array $buyer = null, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $customerOrderNumber = null, ?string $externalRef = null, ?array $metadata = null, ?string $organizationId = null, ?array $payment = null, ?array $shipping = null, ?array $shippingAddress = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/procurement/submit'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;
        $apiParams['items'] = $items;
        $apiParams['billing_address'] = $billingAddress;
        $apiParams['buyer'] = $buyer;
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['customer_order_number'] = $customerOrderNumber;
        $apiParams['external_ref'] = $externalRef;
        $apiParams['metadata'] = $metadata;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['payment'] = $payment;
        $apiParams['shipping'] = $shipping;
        $apiParams['shipping_address'] = $shippingAddress;
        $apiParams['user_data'] = $userData;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}