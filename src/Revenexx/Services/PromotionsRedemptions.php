<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PromotionsRedemptionsReleaseReason;

class PromotionsRedemptions extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The order is what survives the cart, so this is where a redemption stops
     * pointing at something temporary. Idempotent on the order: a checkout
     * retries a call it did not see answered, and a second commitment would count
     * the budget twice for one sale. A caller with no prior hold may commit
     * directly, which is what a back-office or an imported order needs.
     *
     * @param string $orderId
     * @param ?string $cartId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $market
     * @param ?string $organizationId
     * @param ?array $promotions
     * @param ?array $terms
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsCommit(string $orderId, ?string $cartId = null, ?string $contactId = null, ?string $currency = null, ?string $market = null, ?string $organizationId = null, ?array $promotions = null, ?array $terms = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/commit'
        );

        $apiParams = [];
        $apiParams['order_id'] = $orderId;

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($promotions)) {
            $apiParams['promotions'] = $promotions;
        }

        if (!is_null($terms)) {
            $apiParams['terms'] = $terms;
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
     * Housekeeping, and nothing depends on it: an expired hold stops counting
     * when the promotion is next looked at, whether or not this ever runs. It
     * publishes nothing, because an expiry is not a fact anybody wants mailed.
     * Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsSweep(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/holds/sweep'
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
     * The ledger. Every row is the outcome of a hold, a commitment, a release or
     * a return — a hand-written one would be a discount nobody gave, so this is
     * read-only. It is the row that answers why a past order was cheaper, for
     * support, for the margin report and for the export to a buying organisation.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $voucherId
     * @param ?string $cartId
     * @param ?string $orderId
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $state
     * @param ?string $currency
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $voucherId = null, ?string $cartId = null, ?string $orderId = null, ?string $contactId = null, ?string $organizationId = null, ?string $state = null, ?string $currency = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/redemptions'
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

        if (!is_null($voucherId)) {
            $apiParams['voucher_id'] = $voucherId;
        }

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
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
    public function promotionsRedemptionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/redemptions/{id}'
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
     * Abandoned carts are the majority of carts, and a hold that never came back
     * would exhaust every campaign within a day. Releasing is not terminal: a
     * buyer returning to a recovered cart may hold again, which is the journey
     * every recovery mail is sent for.
     *
     * @param ?string $cartId
     * @param ?string $orderId
     * @param ?PromotionsRedemptionsReleaseReason $reason
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsRelease(?string $cartId = null, ?string $orderId = null, ?PromotionsRedemptionsReleaseReason $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/release'
        );

        $apiParams = [];

        if (!is_null($cartId)) {
            $apiParams['cart_id'] = $cartId;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
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
     * A budget nobody holds is a budget every concurrent checkout is promised,
     * and the merchant pays the difference. The whole set is replaced rather than
     * added to, because a buyer edits a cart until the last moment. Naming
     * `from_cart_id` moves a hold instead of duplicating it, which is what a
     * merging cart needs.
     *
     * @param string $cartId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $fromCartId
     * @param ?string $organizationId
     * @param ?array $promotions
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsReserve(string $cartId, ?string $contactId = null, ?string $currency = null, ?string $fromCartId = null, ?string $organizationId = null, ?array $promotions = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/reserve'
        );

        $apiParams = [];
        $apiParams['cart_id'] = $cartId;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($fromCartId)) {
            $apiParams['from_cart_id'] = $fromCartId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($promotions)) {
            $apiParams['promotions'] = $promotions;
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
     * A returned line gives back the discount recorded against it, and nothing
     * else moves — unless the promotion re-decides, which is a merchant choice
     * and not an algorithm. Idempotent on the return reference: order management
     * retries, and a return credited twice hands a budget back money it never
     * spent.
     *
     * @param string $orderId
     * @param ?bool $all
     * @param ?array $lines
     * @param ?array $remainingAmounts
     * @param ?string $returnRef
     * @throws RevenexxException
     * @return array
     */
    public function promotionsRedemptionsReturns(string $orderId, ?bool $all = null, ?array $lines = null, ?array $remainingAmounts = null, ?string $returnRef = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/returns'
        );

        $apiParams = [];
        $apiParams['order_id'] = $orderId;

        if (!is_null($all)) {
            $apiParams['all'] = $all;
        }

        if (!is_null($lines)) {
            $apiParams['lines'] = $lines;
        }

        if (!is_null($remainingAmounts)) {
            $apiParams['remaining_amounts'] = $remainingAmounts;
        }

        if (!is_null($returnRef)) {
            $apiParams['return_ref'] = $returnRef;
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
}