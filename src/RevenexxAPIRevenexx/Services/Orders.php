<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\OrderCommentVisibility;
use RevenexxAPIRevenexx\Enums\OrderPaymentStatus;

class Orders extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/number-ranges'
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
     * @param string $code
     * @param ?string $channelId
     * @param ?int $counter
     * @param ?array $metadata
     * @param ?int $padding
     * @param ?int $positionStep
     * @param ?string $prefix
     * @param ?int $step
     * @param ?string $suffix
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesCreate(string $code, ?string $channelId = null, ?int $counter = null, ?array $metadata = null, ?int $padding = null, ?int $positionStep = null, ?string $prefix = null, ?int $step = null, ?string $suffix = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/number-ranges'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($counter)) {
            $apiParams['counter'] = $counter;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($padding)) {
            $apiParams['padding'] = $padding;
        }

        if (!is_null($positionStep)) {
            $apiParams['position_step'] = $positionStep;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($step)) {
            $apiParams['step'] = $step;
        }

        if (!is_null($suffix)) {
            $apiParams['suffix'] = $suffix;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/number-ranges/defaults'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/number-ranges/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/number-ranges/{id}'
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
     * @param ?string $channelId
     * @param ?string $code
     * @param ?int $counter
     * @param ?array $metadata
     * @param ?int $padding
     * @param ?int $positionStep
     * @param ?string $prefix
     * @param ?int $step
     * @param ?string $suffix
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersNumberRangesUpdate(string $id, ?string $channelId = null, ?string $code = null, ?int $counter = null, ?array $metadata = null, ?int $padding = null, ?int $positionStep = null, ?string $prefix = null, ?int $step = null, ?string $suffix = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/number-ranges/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($counter)) {
            $apiParams['counter'] = $counter;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($padding)) {
            $apiParams['padding'] = $padding;
        }

        if (!is_null($positionStep)) {
            $apiParams['position_step'] = $positionStep;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($step)) {
            $apiParams['step'] = $step;
        }

        if (!is_null($suffix)) {
            $apiParams['suffix'] = $suffix;
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
     * @param array $items
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $cartId
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $customerOrderNumber
     * @param ?float $grandTotal
     * @param ?string $marketId
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?array $payment
     * @param ?array $shipping
     * @param ?array $shippingAddress
     * @param ?float $shippingTotal
     * @param ?array $userData
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersPlace(array $items, ?array $billingAddress = null, ?array $buyer = null, ?string $cartId = null, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $customerOrderNumber = null, ?float $grandTotal = null, ?string $marketId = null, ?array $metadata = null, ?string $organizationId = null, ?array $payment = null, ?array $shipping = null, ?array $shippingAddress = null, ?float $shippingTotal = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/place'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['billing_address'] = $billingAddress;
        $apiParams['buyer'] = $buyer;
        $apiParams['cart_id'] = $cartId;
        $apiParams['channel_id'] = $channelId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['customer_order_number'] = $customerOrderNumber;
        $apiParams['grand_total'] = $grandTotal;
        $apiParams['market_id'] = $marketId;
        $apiParams['metadata'] = $metadata;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['payment'] = $payment;
        $apiParams['shipping'] = $shipping;
        $apiParams['shipping_address'] = $shippingAddress;
        $apiParams['shipping_total'] = $shippingTotal;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}'
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
     * @param ?string $customerOrderNumber
     * @param ?array $metadata
     * @param ?array $shippingAddress
     * @param ?array $userData
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersUpdate(string $id, ?array $billingAddress = null, ?array $buyer = null, ?string $customerOrderNumber = null, ?array $metadata = null, ?array $shippingAddress = null, ?array $userData = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($billingAddress)) {
            $apiParams['billing_address'] = $billingAddress;
        }

        if (!is_null($buyer)) {
            $apiParams['buyer'] = $buyer;
        }

        if (!is_null($customerOrderNumber)) {
            $apiParams['customer_order_number'] = $customerOrderNumber;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($shippingAddress)) {
            $apiParams['shipping_address'] = $shippingAddress;
        }

        if (!is_null($userData)) {
            $apiParams['user_data'] = $userData;
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
     * @param string $id
     * @param ?string $externalRef
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersAcknowledge(string $id, ?string $externalRef = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/acknowledge'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($externalRef)) {
            $apiParams['external_ref'] = $externalRef;
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
     * @param ?string $cancelledBy
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersCancel(string $id, ?string $cancelledBy = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/cancel'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($cancelledBy)) {
            $apiParams['cancelled_by'] = $cancelledBy;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersCommentsList(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/comments'
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
     * @param string $body
     * @param ?string $author
     * @param ?OrderCommentVisibility $visibility
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersCommentsCreate(string $id, string $body, ?string $author = null, ?OrderCommentVisibility $visibility = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/comments'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['body'] = $body;

        if (!is_null($author)) {
            $apiParams['author'] = $author;
        }

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersEventsList(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/events'
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
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersHold(string $id, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/hold'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * @param array $positions
     * @param ?string $cancelledBy
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersItemsCancel(string $id, array $positions, ?string $cancelledBy = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/items/cancel'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['positions'] = $positions;

        if (!is_null($cancelledBy)) {
            $apiParams['cancelled_by'] = $cancelledBy;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * @param OrderPaymentStatus $status
     * @param ?string $paymentId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersPaymentStatusUpdate(string $id, OrderPaymentStatus $status, ?string $paymentId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/payment-status'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['status'] = $status;

        if (!is_null($paymentId)) {
            $apiParams['payment_id'] = $paymentId;
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
     * @param array $positions
     * @param ?array $metadata
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersReturn(string $id, array $positions, ?array $metadata = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/return'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['positions'] = $positions;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
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
     * @param string $rid
     * @param ?string $resolution
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersReturnsComplete(string $id, string $rid, ?string $resolution = null): array
    {
        $apiPath = str_replace(
            ['{id}', '{rid}'],
            [$id, $rid],
            '/v1/orders/{id}/returns/{rid}/complete'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['rid'] = $rid;

        if (!is_null($resolution)) {
            $apiParams['resolution'] = $resolution;
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
     * @param string $rid
     * @param array $data
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersReturnsReceive(string $id, string $rid, array $data): array
    {
        $apiPath = str_replace(
            ['{id}', '{rid}'],
            [$id, $rid],
            '/v1/orders/{id}/returns/{rid}/receive'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['rid'] = $rid;
        $apiParams = \array_merge($apiParams, $data);

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
     * @param string $rid
     * @param ?string $reason
     * @param ?string $resolution
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersReturnsReject(string $id, string $rid, ?string $reason = null, ?string $resolution = null): array
    {
        $apiPath = str_replace(
            ['{id}', '{rid}'],
            [$id, $rid],
            '/v1/orders/{id}/returns/{rid}/reject'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['rid'] = $rid;

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($resolution)) {
            $apiParams['resolution'] = $resolution;
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
     * @param ?string $carrier
     * @param ?array $metadata
     * @param ?string $number
     * @param ?array $positions
     * @param ?string $shippedAt
     * @param ?string $trackingCode
     * @param ?string $trackingUrl
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersShip(string $id, ?string $carrier = null, ?array $metadata = null, ?string $number = null, ?array $positions = null, ?string $shippedAt = null, ?string $trackingCode = null, ?string $trackingUrl = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/ship'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($carrier)) {
            $apiParams['carrier'] = $carrier;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($positions)) {
            $apiParams['positions'] = $positions;
        }

        if (!is_null($shippedAt)) {
            $apiParams['shipped_at'] = $shippedAt;
        }

        if (!is_null($trackingCode)) {
            $apiParams['tracking_code'] = $trackingCode;
        }

        if (!is_null($trackingUrl)) {
            $apiParams['tracking_url'] = $trackingUrl;
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
     * @param array $data
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function ordersUnhold(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/unhold'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams = \array_merge($apiParams, $data);

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