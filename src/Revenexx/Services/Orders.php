<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\OrderStatus;
use Revenexx\Enums\OrderPaymentStatus;
use Revenexx\Enums\OrderFulfillmentStatus;
use Revenexx\Enums\OrdersVocabulariesGetName;
use Revenexx\Enums\OrderCommentVisibility;
use Revenexx\Enums\OrderReturnSettlement;
use Revenexx\Enums\OrderReturnRefusal;

class Orders extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The route behind every order overview: the open orders of one customer,
     * everything on hold, everything a market placed last week, or the one order
     * somebody is quoting a number for (?number=ORD-000123 — the number is not
     * the id, and this is how one becomes the other). The order LIST: the order
     * rows without their positions, shipments, returns or cancellations — read
     * GET /orders/{id} for the aggregate of one. Every parameter below is an
     * exact match on the column it names, and combining them is an AND. Two kinds
     * of key are not offered: one that names NO column is dropped silently, so a
     * mistyped ?stauts=placed answers 200 with the whole list (compare the
     * 'filter' echo against what you sent — no status code reports it), and the
     * jsonb columns buyer, billing_address, shipping_address, payment, shipping,
     * user_data and metadata reach the database as a text comparison and answer
     * 400 invalid_value for anything that is not a whole JSON document.
     *
     * @param ?string $id
     * @param ?string $number
     * @param ?string $customerOrderNumber
     * @param ?string $externalRef
     * @param ?string $acknowledgedAt
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $channelId
     * @param ?string $currency
     * @param ?OrderStatus $status
     * @param ?OrderPaymentStatus $paymentStatus
     * @param ?OrderFulfillmentStatus $fulfillmentStatus
     * @param ?bool $onHold
     * @param ?string $holdReason
     * @param ?int $itemCount
     * @param ?float $subtotal
     * @param ?float $shippingTotal
     * @param ?float $taxTotal
     * @param ?float $grandTotal
     * @param ?string $placedAt
     * @param ?string $completedAt
     * @param ?string $cancelledAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function ordersList(?string $id = null, ?string $number = null, ?string $customerOrderNumber = null, ?string $externalRef = null, ?string $acknowledgedAt = null, ?string $cartId = null, ?string $contactId = null, ?string $organizationId = null, ?string $channelId = null, ?string $currency = null, ?OrderStatus $status = null, ?OrderPaymentStatus $paymentStatus = null, ?OrderFulfillmentStatus $fulfillmentStatus = null, ?bool $onHold = null, ?string $holdReason = null, ?int $itemCount = null, ?float $subtotal = null, ?float $shippingTotal = null, ?float $taxTotal = null, ?float $grandTotal = null, ?string $placedAt = null, ?string $completedAt = null, ?string $cancelledAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }

        if (!is_null($customerOrderNumber)) {
            $apiParams['customer_order_number'] = $customerOrderNumber;
        }

        if (!is_null($externalRef)) {
            $apiParams['external_ref'] = $externalRef;
        }

        if (!is_null($acknowledgedAt)) {
            $apiParams['acknowledged_at'] = $acknowledgedAt;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($paymentStatus)) {
            $apiParams['payment_status'] = $paymentStatus;
        }

        if (!is_null($fulfillmentStatus)) {
            $apiParams['fulfillment_status'] = $fulfillmentStatus;
        }

        if (!is_null($onHold)) {
            $apiParams['on_hold'] = $onHold;
        }

        if (!is_null($holdReason)) {
            $apiParams['hold_reason'] = $holdReason;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }

        if (!is_null($subtotal)) {
            $apiParams['subtotal'] = $subtotal;
        }

        if (!is_null($shippingTotal)) {
            $apiParams['shipping_total'] = $shippingTotal;
        }

        if (!is_null($taxTotal)) {
            $apiParams['tax_total'] = $taxTotal;
        }

        if (!is_null($grandTotal)) {
            $apiParams['grand_total'] = $grandTotal;
        }

        if (!is_null($placedAt)) {
            $apiParams['placed_at'] = $placedAt;
        }

        if (!is_null($completedAt)) {
            $apiParams['completed_at'] = $completedAt;
        }

        if (!is_null($cancelledAt)) {
            $apiParams['cancelled_at'] = $cancelledAt;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

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
     * The counters this tenant numbers its orders, delivery notes and returns
     * from — what an operator sees on the Number ranges settings page, and what
     * a migration reads to check the prefixes and the padding before it imports
     * anything. Every parameter below is an exact-match filter on the column it
     * names (?code=order finds the order counter). Two things are not: a key that
     * names NO column is dropped silently — the call answers 200 with the
     * unfiltered page, so compare the 'filter' echo against what you sent — and
     * the jsonb column 'metadata' is honoured by the router but refused by the
     * database (400 invalid_value) unless the value is a whole JSON document,
     * which is why it is not offered here. It does not draw a number: `counter`
     * is the last number DRAWN, and only placing an order, a shipment or a return
     * moves it.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?string $prefix
     * @param ?string $suffix
     * @param ?int $padding
     * @param ?int $counter
     * @param ?int $step
     * @param ?int $positionStep
     * @param ?string $channelId
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function ordersNumberRangesList(?string $id = null, ?string $code = null, ?string $prefix = null, ?string $suffix = null, ?int $padding = null, ?int $counter = null, ?int $step = null, ?int $positionStep = null, ?string $channelId = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/number-ranges'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($suffix)) {
            $apiParams['suffix'] = $suffix;
        }

        if (!is_null($padding)) {
            $apiParams['padding'] = $padding;
        }

        if (!is_null($counter)) {
            $apiParams['counter'] = $counter;
        }

        if (!is_null($step)) {
            $apiParams['step'] = $step;
        }

        if (!is_null($positionStep)) {
            $apiParams['position_step'] = $positionStep;
        }

        if (!is_null($channelId)) {
            $apiParams['channel_id'] = $channelId;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

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
     * Add a counter beyond the three a tenant is seeded with, and give it the
     * shape a merchant's numbers actually have: {prefix}{counter padded to
     * `padding`}{suffix}, moving by `step` per draw. A new range is what the
     * order_number_range_code / delivery_number_range_code /
     * return_number_range_code settings can then be pointed at — the code is
     * the name those settings use, and a setting naming a code no range carries
     * makes placing an order answer 422. `code` is unique per tenant, so this is
     * a 409 for one that is taken rather than a second counter under the same
     * name. It does not renumber anything that already exists, and setting
     * `counter` to a value already issued re-issues those numbers, which the
     * unique index on the order number then refuses.
     *
     * @param string $code
     * @param ?string $channelId
     * @param ?int $counter
     * @param ?array $metadata
     * @param ?int $padding
     * @param ?int $positionStep
     * @param ?string $prefix
     * @param ?int $step
     * @param ?string $suffix
     * @throws RevenexxException
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
     * Make sure the three codes this app draws from exist: 'order' (ORD-),
     * 'delivery' (DEL-) and 'return' (RET-), each padded to six digits and
     * stepping by one. The app runs it for you on install, so a fresh tenant
     * needs nothing; call it by hand after a range was deleted, or to check what
     * a tenant has. Idempotent: a code that already exists comes back under
     * 'existing' and is left EXACTLY as it is, counter included, so a merchant
     * who changed the prefix keeps their change. Answers 200, never 201 — it is
     * a reconcile, not a create — and it never repairs or renames a range that
     * is already there.
     *
     * @throws RevenexxException
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
     * Remove a counter a tenant no longer numbers anything from. It touches
     * nothing that was numbered out of it: existing orders, delivery notes and
     * returns keep the numbers they were given, because a number is copied onto
     * the row at place-time and is not a reference to this table. Deleting one of
     * the three standard codes is allowed and is usually a mistake — the next
     * draw against it answers 422 'number_range_missing', unless POST
     * /orders/number-ranges/defaults or a reinstall seeds it again, which starts
     * its counter back at 0.
     *
     * @param string $id
     * @throws RevenexxException
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
     * One counter with its whole configuration: the prefix and suffix around the
     * number, how wide it is padded, how far each draw moves it, where it
     * currently stands, and the position_step new order lines are numbered in.
     * Reach for it when you hold the id — from the list, or from what a create
     * answered — and want the row as it stands now. Reading does not draw a
     * number and does not move `counter`; the id is the range's uuid, not its
     * `code`, and a code is turned into a range through GET
     * /orders/number-ranges?code=order.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Change the format or the state of an existing counter: a new prefix or
     * suffix, a wider padding, a different step, a different position_step for
     * new order lines — or `counter` itself, which is state rather than
     * configuration. Everything takes effect on the NEXT draw only: nothing that
     * was already numbered is renumbered, so widening the padding leaves
     * ORD-000123 and starts writing ORD-0000124. Moving `counter` forward skips
     * numbers, and moving it back re-issues numbers that exist, which the unique
     * index on the order number answers 409 for at place-time rather than here.
     * Renaming `code` to one another range of this tenant already holds is a 409.
     *
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
     * @throws RevenexxException
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
     * The way an order comes into existence — the call a checkout, a punch-out
     * or an ERP import makes once the basket is final. The body is a SNAPSHOT:
     * items with their product copies, plus the buyer, the addresses and the
     * payment and shipping choices frozen as they were at this moment, so the
     * order stays readable when the catalogue or the customer changes underneath
     * it. The app draws the order number from the tenant's order range, numbers
     * the positions, computes subtotal, tax and grand_total from the lines, and
     * writes the order.placed event that carries the order onto the bus. It does
     * not reserve stock, take payment or talk to an ERP: those are separate
     * capabilities, and this route's job ends when the event is on the bus. Two
     * things can turn a placement into a REQUEST awaiting approval, and both
     * still answer 201 — with status='pending' and no placed_at: a principal
     * holding only orders.request, and an order worth more than the tenant's
     * require_approval_above_value (a principal holding orders.approve is exempt
     * from the threshold). The order.requested event says which, in
     * 'approval_reason'. The currency defaults to the market's default_currency
     * setting and the position cap is the tenant's max_items_per_order.
     *
     * @param array $items
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $cartId
     * @param ?string $channelId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $customerOrderNumber
     * @param ?float $grandTotal
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?array $payment
     * @param ?array $shipping
     * @param ?array $shippingAddress
     * @param ?float $shippingTotal
     * @param ?array $userData
     * @throws RevenexxException
     * @return array
     */
    public function ordersPlace(array $items, ?array $billingAddress = null, ?array $buyer = null, ?string $cartId = null, ?string $channelId = null, ?string $contactId = null, ?string $currency = null, ?string $customerOrderNumber = null, ?float $grandTotal = null, ?array $metadata = null, ?string $organizationId = null, ?array $payment = null, ?array $shipping = null, ?array $shippingAddress = null, ?float $shippingTotal = null, ?array $userData = null): array
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
     * What each company has bought, as numbers another app can keep: order count,
     * lifetime revenue, first and last order date, and the same count and revenue
     * over the last 30, 90 and 365 days. This is what a customer segment like
     * "bought for more than 100k last year" is built on, and the customers app
     * materialises it into a local projection its segment rules query. It answers
     * about ORGANIZATIONS only — a private or guest order carries none and is
     * counted in orders_without_organization rather than attributed to anybody
     * — and it converts nothing, so an organization that ordered in two
     * currencies gets both listed and one summed number to read with care.
     * Revenue lives in orders, customer segments live in the customers app, and
     * the two may not join (ADR-0055: no cross-app FK, grant or view). This
     * capability is the hand-over. Every number is additive (count/sum/min/max)
     * so partial answers merge; the average order value is deliberately not
     * returned — it is revenue_total / order_count over the merged parts.
     * Windows are anchored at as_of, which is echoed back so a loop measures one
     * consistent picture.
     *
     * @param ?string $asOf
     * @param ?string $cursor
     * @param ?array $organizationIds
     * @param ?array $statuses
     * @throws RevenexxException
     * @return array
     */
    public function ordersReportsCustomerRollup(?string $asOf = null, ?string $cursor = null, ?array $organizationIds = null, ?array $statuses = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/reports/customer-rollup'
        );

        $apiParams = [];
        $apiParams['as_of'] = $asOf;
        $apiParams['cursor'] = $cursor;
        $apiParams['organization_ids'] = $organizationIds;
        $apiParams['statuses'] = $statuses;

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
     * Which value sets this app will describe for you, by name — order
     * statuses, payment statuses, fulfillment statuses, item types, return
     * statuses and return resolutions — so a client can discover them instead
     * of shipping its own copy of five statuses that goes stale one release
     * later. The values themselves are deliberately NOT here: this is the index,
     * and each set is fetched on its own. Discovery for the vocabulary routes.
     * Names: cancellation-scopes, comment-visibilities, fulfillment-statuses,
     * item-types, payment-statuses, return-resolutions, return-statuses,
     * statuses. Fetch one with GET /orders/vocabularies/{name}; a client holding
     * the qualified pair 'orders.<name>' builds that URL from the pair alone.
     * 'title' and 'description' are locale maps wherever somebody wrote the copy
     * and plain strings where the fallback did — read both forms.
     *
     * @throws RevenexxException
     * @return array
     */
    public function ordersVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/orders/vocabularies'
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
     * Everything a UI needs to render one of this app's value sets without
     * knowing it: every permitted value, in order, each with a title and
     * description in the locales somebody wrote and a badge tone to colour it.
     * Fetch it once and a status filter, a status badge and a resolution picker
     * all stay correct through a lifecycle change, because the set served IS the
     * set enforced. It answers about values, not about rows — nothing here says
     * how many orders are in a status. The values are read out of the column's
     * CHECK constraint, so the served set IS the enforced set and the two cannot
     * drift — a value added to the constraint appears here even before anyone
     * labels it, titled from its own key. Values come back in constraint order,
     * which is lifecycle order for a status, and 'final' marks the values that
     * END the lifecycle (completed, cancelled) so a client can ask "is this order
     * still open?" instead of matching names it guessed. Every set is exhaustive
     * ('closed' is always true); 'source' says who enforces it — 'schema' for a
     * CHECK constraint, 'app' for 'return-resolutions', whose column carries none
     * and whose words the return routes enforce instead. Those values
     * additionally carry 'stage' (complete | reject): the transition that accepts
     * them. 'title' and 'description' are locale maps where the copy was written
     * and plain strings where the key-derived fallback answered, on the
     * vocabulary and on every value alike. Names: cancellation-scopes,
     * comment-visibilities, fulfillment-statuses, item-types, payment-statuses,
     * return-resolutions, return-statuses, statuses.
     *
     * @param OrdersVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function ordersVocabulariesGet(OrdersVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/orders/vocabularies/{name}'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The single source of order information, and what an order detail screen is
     * built from: the order row plus its positions, its shipments with the
     * shipment_items each one booked, its returns and its cancellations — one
     * call, no assembling five lists. A cancellation's and a return's 'positions'
     * are ARRAYS of {order_item_id, quantity}; a return's entries additionally
     * carry 'restock'. Two things it does not carry: the comments and the event
     * trail, which are their own paginated routes because both grow without
     * bound. Addressed by uuid — an order number goes through GET
     * /orders?number=… first.
     *
     * @param string $id
     * @throws RevenexxException
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
     * The narrow correction window a service desk needs: the customer gave the
     * wrong delivery address, the buyer's name is misspelled, their
     * purchase-order number was missing. Six columns and no others —
     * customer_order_number, buyer, billing_address, shipping_address, user_data
     * and metadata — and each is REPLACED whole, not merged, so send the entire
     * address rather than the one line that changed. It moves nothing: status,
     * payment_status, fulfillment_status and the quantities belong to the action
     * routes, and a body carrying them is accepted with those keys quietly
     * dropped. The window closes when the fulfilling system acknowledges the
     * order, because from then on the ERP holds the copy that ships — unless
     * the tenant set allow_modification_after_acknowledge. Every accepted change
     * writes an order.updated event naming the columns it touched.
     *
     * @param string $id
     * @param ?array $billingAddress
     * @param ?array $buyer
     * @param ?string $customerOrderNumber
     * @param ?array $metadata
     * @param ?array $shippingAddress
     * @param ?array $userData
     * @throws RevenexxException
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
     * The return channel for whatever fulfils the order. An Integration Studio
     * workflow picks up order.placed, books the order into the ERP, and calls
     * this with the id the ERP gave it — which lands in external_ref and makes
     * the two systems mutually findable. It stamps acknowledged_at from the
     * server's clock, and that timestamp is what closes the correction window:
     * PUT /orders/{id} refuses afterwards, because the copy that ships now lives
     * elsewhere. It is a handshake and nothing more — it does not change
     * status, payment_status or fulfillment_status, and it does not ship
     * anything. Once only: a second call is a 422 rather than a silent overwrite
     * of the first system's reference.
     *
     * @param string $id
     * @param ?string $externalRef
     * @throws RevenexxException
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
     * Call the whole order off: every position's full quantity is booked as
     * cancelled, the order moves to 'cancelled', a cancellation record is written
     * with the reason and who gave it, and an order.cancelled event goes onto the
     * bus. Only while NOTHING has shipped — once a single position has gone out
     * the order is partly real and this answers 422; take the remaining
     * quantities off with POST /orders/{id}/items/cancel instead, and handle what
     * already shipped as a return. It refunds nothing and returns nothing to
     * stock: payment travels through /payment-status and restocking is an
     * explicit inventories call by the orchestrator. A tenant may require a
     * reason (cancel_requires_reason), and a hold may block it (on_hold_blocks =
     * 'shipping_and_cancel').
     *
     * @param string $id
     * @param ?string $cancelledBy
     * @param ?string $reason
     * @throws RevenexxException
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
     * What people have written about this order, oldest first: the service desk's
     * own notes and the messages meant for the customer, in one list. Filter by
     * ?visibility=customer to build the version a customer may see, and by
     * ?visibility=internal for the desk's own — the route does NOT decide that
     * for you, so a customer-facing surface has to ask for the customer ones.
     * Comments are prose about the order and never move it; the lifecycle lives
     * in the event trail. Every parameter below is an exact match on the column
     * it names. `order_id` is deliberately absent: the route fixes it from the
     * path AFTER the query filter is read, so sending one is accepted and then
     * overwritten — it filters nothing. DEPRECATED KEY: the response also
     * repeats 'items' under 'comments' for compatibility with the pre-envelope
     * shape. It is the same array; read 'items'. The alias is removed in the next
     * minor version.
     *
     * @param string $id
     * @param ?string $idQuery
     * @param ?string $body
     * @param ?OrderCommentVisibility $visibility
     * @param ?string $author
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function ordersCommentsList(string $id, ?string $idQuery = null, ?string $body = null, ?OrderCommentVisibility $visibility = null, ?string $author = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/comments'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($idQuery)) {
            $apiParams['id'] = $idQuery;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($visibility)) {
            $apiParams['visibility'] = $visibility;
        }

        if (!is_null($author)) {
            $apiParams['author'] = $author;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

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
     * Write down what happened that the state machine cannot record: what the
     * customer said on the phone, why an exception was made, what the warehouse
     * found in the box. `visibility` decides who the note is for — 'internal'
     * for the service desk, 'customer' for text meant to be shown to the buyer
     * — and it defaults to the tenant's default_comment_visibility, which is
     * 'internal' out of the box, so a note is never accidentally customer-facing.
     * Adding one writes an order.comment.added event, so the trail shows that a
     * note was made and its visibility, without copying the text onto the bus. It
     * changes nothing about the order, and it sends nothing to anybody: this
     * stores a comment, it does not email the customer.
     *
     * @param string $id
     * @param string $body
     * @param ?string $author
     * @param ?OrderCommentVisibility $visibility
     * @throws RevenexxException
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
     * Declare the order finished, whatever the quantities say — the service was
     * delivered, the download was fetched, or an operator has decided the rest is
     * not coming. status moves to 'completed' and completed_at is stamped from
     * the server's clock. It does NOT ship anything or change the quantities, so
     * fulfillment_status stays whatever the positions make it, and an order
     * completed with lines still open shows exactly that. A completed order is
     * final: modification, shipping and cancellation all refuse afterwards, and
     * only a return may still be registered against it. The counterpart of
     * auto_complete_on = 'payment' | 'manual': something has to close an order
     * that shipping no longer closes by itself, and it is also the honest end for
     * a service or digital order that never ships. Writes an order_events row
     * 'order.completed' with via='manual'.
     *
     * @param string $id
     * @param ?string $completedBy
     * @throws RevenexxException
     * @return array
     */
    public function ordersComplete(string $id, ?string $completedBy = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/complete'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($completedBy)) {
            $apiParams['completed_by'] = $completedBy;
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
     * Everything that has ever happened to this order, oldest first: placed or
     * requested, updated, acknowledged, shipped, held, paid, returned, completed,
     * cancelled — each with the payload the action carried. This is the audit
     * trail an operator reads to answer "why is this order in this state", and it
     * is the same row the platform publishes as a domain event, so what a
     * workflow reacted to and what a person sees here cannot diverge. It is
     * append-only and this route is read-only: rows are written by the action
     * routes and there is no way to add, edit or remove one. An order's trail
     * grows for as long as the order lives, so it is paginated like every other
     * list — 'page.hasMore' says whether more of it exists. Every parameter
     * below is an exact match on the column it names; `order_id` is deliberately
     * absent, because the route fixes it from the path after the query filter is
     * read and a value sent for it is overwritten rather than honoured. The jsonb
     * column 'payload' is not offered for the same reason it is not offered on
     * the order list: the data plane answers 400 for anything that is not a whole
     * JSON document. DEPRECATED KEY: the response also repeats 'items' under
     * 'events' for compatibility with the pre-envelope shape. It is the same
     * array; read 'items'. The alias is removed in the next minor version.
     *
     * @param string $id
     * @param ?string $idQuery
     * @param ?string $name
     * @param ?string $actor
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function ordersEventsList(string $id, ?string $idQuery = null, ?string $name = null, ?string $actor = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/events'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($idQuery)) {
            $apiParams['id'] = $idQuery;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($actor)) {
            $apiParams['actor'] = $actor;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

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
     * Stop an order from moving while a human sorts something out — a credit
     * check, a suspected fraud, an address nobody can deliver to. It sets a flag
     * with the reason attached, and the flag is deliberately ORTHOGONAL to the
     * lifecycle: the order keeps its status, its payment status and its
     * quantities, and appears on a worklist as 'held' rather than being pushed
     * into a state it will have to come back out of. How far the hold reaches is
     * the tenant's setting on_hold_blocks: shipping only, shipping and
     * cancellation (the credit-check case, where the order must move in neither
     * direction), or nothing at all, which leaves the flag advisory. Holding an
     * order twice is allowed and simply replaces the reason; releasing it is POST
     * /orders/{id}/unhold.
     *
     * @param string $id
     * @param ?string $reason
     * @throws RevenexxException
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
     * Take quantities off an order that is otherwise going ahead — three of the
     * ten are discontinued, one line is out of stock and the customer would
     * rather not wait. Each named quantity is booked onto its position as
     * cancelled and guarded against the OPEN quantity (ordered − shipped −
     * cancelled), so nothing already shipped can be cancelled away underneath a
     * shipment. The order's fulfillment_status is re-derived afterwards, and when
     * every position ends up fully cancelled the order itself moves to
     * 'cancelled' — which is how this becomes a full cancel by arithmetic
     * rather than by a second call. Positions are REQUIRED here, unlike on /ship
     * and /return: cancelling an entire order by omitting a field is not
     * something anybody should be able to do by accident; that is what POST
     * /orders/{id}/cancel is for. Read GET /orders/{id}/shippable for the open
     * quantity per position before calling.
     *
     * @param string $id
     * @param array $positions
     * @param ?string $cancelledBy
     * @param ?string $reason
     * @throws RevenexxException
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
     * Payment is the one status dimension this app does not decide for itself: it
     * is FED IN from whatever took the money — the payments app, a PSP webhook
     * relayed by a workflow, or a finance clerk marking an invoice settled. This
     * route writes that word onto the order and records the change as an
     * order.payment_status.changed event carrying the previous value, so the
     * trail shows the sequence and not just the current state. Optionally attach
     * the payment_id of the transaction it came from. It takes no money, refunds
     * none and validates nothing about the amount — it records a fact somebody
     * else established, and any of the seven words may follow any other. The
     * other half of auto_complete_on = 'payment': an order that has shipped in
     * full is completed by this call when the status becomes 'paid'.
     *
     * @param string $id
     * @param OrderPaymentStatus $status
     * @param ?string $paymentId
     * @throws RevenexxException
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
     * Open a return case: the customer has announced goods are coming back, and
     * this is where that becomes a tracked thing with a return number of its own,
     * drawn from the tenant's return range. Positions are guarded against what
     * actually SHIPPED and has not already come back, so a return cannot exceed
     * the goods that left. Each position carries a `restock` flag saying whether
     * the item is expected to be sellable again — recorded now, acted on only
     * when the return completes. Omitting `positions` registers everything still
     * returnable, the 'the customer sent the whole delivery back' case. Nothing
     * is booked yet: quantity_returned stays where it is and the order does not
     * move — the return starts as 'registered' and travels through receive and
     * complete or reject. Allowed on a completed order, refused on a cancelled
     * one.
     *
     * @param string $id
     * @param ?array $metadata
     * @param ?array $positions
     * @param ?string $reason
     * @param ?bool $restock
     * @throws RevenexxException
     * @return array
     */
    public function ordersReturn(string $id, ?array $metadata = null, ?array $positions = null, ?string $reason = null, ?bool $restock = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/return'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($positions)) {
            $apiParams['positions'] = $positions;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($restock)) {
            $apiParams['restock'] = $restock;
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
     * Accept the return and close the case: the goods are taken back on the
     * order's books and the settlement is recorded as one of the published words
     * — refunded, credited, replaced and so on. This is the step a refund or a
     * credit note hangs off, and the only step that moves quantity_returned. It
     * does not refund money and does not put stock back itself: the answer's
     * 'restock' array names what the orchestrator should hand to
     * inventories.restock, and payment travels through /payment-status. Once
     * completed the return is final — receive, complete and reject all refuse
     * afterwards. The goods accounting moves here and nowhere else:
     * quantity_returned is booked onto each position, completed_at is stamped by
     * the SERVER, and positions flagged restock are reported back in the answer's
     * 'restock' array for the orchestrator's inventories.restock call.
     * 'resolution' is validated against the settlement words this app publishes
     * (refund, partial_refund, replacement, repair, store_credit — see GET
     * /orders/vocabularies/return-resolutions); anything else is refused rather
     * than stored as a word no reader knows. It is checked before the positions
     * are booked, so a rejected value leaves nothing behind.
     *
     * @param string $id
     * @param string $rid
     * @param ?OrderReturnSettlement $resolution
     * @throws RevenexxException
     * @return array
     */
    public function ordersReturnsComplete(string $id, string $rid, ?OrderReturnSettlement $resolution = null): array
    {
        $apiPath = str_replace(
            ['{id}', '{rid}'],
            [$id, $rid],
            '/v1/orders/{id}/returns/{rid}/complete'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['rid'] = $rid;
        $apiParams['resolution'] = $resolution;

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
     * The goods-in scan: the parcel is physically back, warehouse staff have it
     * in their hands, and nobody has decided yet whether the customer gets their
     * money. It moves the return from 'registered' to 'received' and stamps
     * received_at, which is what separates 'announced' from 'here' on a returns
     * worklist. It books nothing — quantity_returned is written by the complete
     * step and by nothing else — so a return that arrives damaged can still be
     * rejected afterwards. Only a registered return can be received; a second
     * call, or one against a settled return, is a 422. This step is skippable: a
     * return may be completed straight from 'registered' where a merchant does
     * not scan goods in.
     *
     * @param string $id
     * @param string $rid
     * @param array $data
     * @throws RevenexxException
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
     * Close the case against the customer: the goods came back used, outside the
     * window, or were never covered in the first place. The return moves to
     * 'rejected', rejected_at is stamped, and the refusal is recorded either as
     * one of the published refusal words or as a sentence somebody wrote about
     * this one return. The order is untouched — the quantities still count as
     * shipped and not returned, which is the point: a rejected return must leave
     * the books exactly as they were. Rejection is final, and it says nothing
     * about where the physical goods go. Nothing is booked onto the positions.
     * 'resolution' is validated against the refusal words (wear_and_tear,
     * not_returnable); 'reason' stays free text — a sentence about this one
     * return rather than a value out of a set — and is what is stored when no
     * resolution is named.
     *
     * @param string $id
     * @param string $rid
     * @param ?string $reason
     * @param ?OrderReturnRefusal $resolution
     * @throws RevenexxException
     * @return array
     */
    public function ordersReturnsReject(string $id, string $rid, ?string $reason = null, ?OrderReturnRefusal $resolution = null): array
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
        $apiParams['resolution'] = $resolution;

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
     * Book goods out: which positions and how much of each, with the carrier and
     * the tracking code that go to the customer. It draws a delivery-note number
     * from the tenant's delivery range, books quantity_shipped onto every named
     * position, re-derives the order's fulfillment_status from the arithmetic
     * (unfulfilled → partial → fulfilled) and emits order.shipment.created.
     * Omitting `positions` means everything still open, in full, which is the
     * ordinary 'send the rest' case and the only one a UI without a line editor
     * can express; the answer always names the quantities that actually went out.
     * It does not print a label, buy postage or notify anybody — a shipping
     * workflow reacts to the event. Whether a full shipment CLOSES the order is
     * the tenant's call (setting auto_complete_on): 'shipment' completes it here,
     * 'payment' leaves it in_fulfillment until payment_status becomes paid,
     * 'manual' waits for orders.complete. The order.completed event follows the
     * order, so it is only emitted when the order actually completed.
     *
     * @param string $id
     * @param ?string $carrier
     * @param ?array $metadata
     * @param ?string $number
     * @param ?array $positions
     * @param ?string $shippedAt
     * @param ?string $trackingCode
     * @param ?string $trackingUrl
     * @throws RevenexxException
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
     * What a shipment dialog needs before it can offer anything: the open
     * quantity per position, and one boolean saying whether a shipment would be
     * accepted at all. Reach for it to fill a picking screen or to decide whether
     * a 'create shipment' button is enabled, instead of subtracting the
     * quantities client-side. It changes nothing and books nothing — it is the
     * question POST /orders/{id}/ship answers with an action. The read half of
     * orders.ship. The open quantity per position and the two guards
     * (cancelled/completed order, hold) are the SAME code the ship route runs, so
     * what this answers and what that accepts cannot drift — a client
     * subtracting the quantities itself eventually offers a shipment the server
     * refuses, or one it should have refused. 'shippable' is false with a
     * 'blocked_reason' when the order is held, cancelled, completed or has
     * nothing open.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function ordersShippable(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/orders/{id}/shippable'
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
     * The whole of the release: the flag comes off, the reason is cleared, and an
     * order.unheld event says the order may move again. Whatever the hold was
     * blocking — shipping, and cancellation on tenants configured that way —
     * is accepted from this call on. It restores nothing else and skips nothing:
     * the order continues from exactly the status and quantities it had when it
     * was held, and any shipping that was due meanwhile still has to be done by
     * hand. An order that is not on hold answers 422 rather than pretending to
     * release one, so this is safe to give to a worklist and not to a loop that
     * calls it blindly.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
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