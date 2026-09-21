<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class PromotionsEvaluation extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A different question from what a cart is owed: a shop that can only answer
     * the second can only tell a buyer about a discount after they have earned
     * it. With a cart, each promotion states how far away it is — "12 euro
     * more" is the sentence that raises an order value. A promotion needing a
     * code is listed as needing one, and no code appears in the answer.
     *
     * @param string $currency
     * @param ?string $channel
     * @param ?string $contactId
     * @param ?int $itemCount
     * @param ?array $lines
     * @param ?string $market
     * @param ?string $organizationId
     * @param ?float $paymentFee
     * @param ?int $precision
     * @param ?string $rounding
     * @param ?float $shipping
     * @param ?float $subtotal
     * @param ?bool $taxIncluded
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEvaluationAvailable(string $currency, ?string $channel = null, ?string $contactId = null, ?int $itemCount = null, ?array $lines = null, ?string $market = null, ?string $organizationId = null, ?float $paymentFee = null, ?int $precision = null, ?string $rounding = null, ?float $shipping = null, ?float $subtotal = null, ?bool $taxIncluded = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/available'
        );

        $apiParams = [];
        $apiParams['currency'] = $currency;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }

        if (!is_null($lines)) {
            $apiParams['lines'] = $lines;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($paymentFee)) {
            $apiParams['payment_fee'] = $paymentFee;
        }

        if (!is_null($precision)) {
            $apiParams['precision'] = $precision;
        }

        if (!is_null($rounding)) {
            $apiParams['rounding'] = $rounding;
        }

        if (!is_null($shipping)) {
            $apiParams['shipping'] = $shipping;
        }

        if (!is_null($subtotal)) {
            $apiParams['subtotal'] = $subtotal;
        }

        if (!is_null($taxIncluded)) {
            $apiParams['tax_included'] = $taxIncluded;
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
     * A landing page shows an offer before a buyer has added anything, and should
     * not have to invent a cart to find out whether it is still live. The answer
     * never says WHO a code belongs to — the address is reachable by anyone who
     * can guess a code, and one that answered with a customer name would be a
     * data leak with a search box.
     *
     * @param string $code
     * @param ?string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEvaluationCheckCode(string $code, ?string $contactId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/codes/check'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
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
     * THE promotion call, and the designated override point. A priced cart goes
     * in; a list of attributed effects comes out, each naming the promotion
     * behind it and the amount it takes off. It writes nothing, so a storefront
     * may call it on every keystroke, and it prices nothing, so a line with no
     * resolved unit price is refused rather than guessed at. Promotions that
     * matched and lost are named with the reason, unless the tenant switched
     * disclosure off. The answer carries the policy it was computed under, so a
     * discount can be re-derived from its own payload.
     *
     * @param string $currency
     * @param ?string $channel
     * @param ?array $codes
     * @param ?string $contactId
     * @param ?int $itemCount
     * @param ?array $lines
     * @param ?string $market
     * @param ?string $organizationId
     * @param ?float $paymentFee
     * @param ?int $precision
     * @param ?array $previewPromotionIds
     * @param ?string $rounding
     * @param ?float $shipping
     * @param ?float $subtotal
     * @param ?bool $taxIncluded
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEvaluationEvaluate(string $currency, ?string $channel = null, ?array $codes = null, ?string $contactId = null, ?int $itemCount = null, ?array $lines = null, ?string $market = null, ?string $organizationId = null, ?float $paymentFee = null, ?int $precision = null, ?array $previewPromotionIds = null, ?string $rounding = null, ?float $shipping = null, ?float $subtotal = null, ?bool $taxIncluded = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/evaluate'
        );

        $apiParams = [];
        $apiParams['currency'] = $currency;

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($codes)) {
            $apiParams['codes'] = $codes;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($itemCount)) {
            $apiParams['item_count'] = $itemCount;
        }

        if (!is_null($lines)) {
            $apiParams['lines'] = $lines;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($paymentFee)) {
            $apiParams['payment_fee'] = $paymentFee;
        }

        if (!is_null($precision)) {
            $apiParams['precision'] = $precision;
        }

        if (!is_null($previewPromotionIds)) {
            $apiParams['preview_promotion_ids'] = $previewPromotionIds;
        }

        if (!is_null($rounding)) {
            $apiParams['rounding'] = $rounding;
        }

        if (!is_null($shipping)) {
            $apiParams['shipping'] = $shipping;
        }

        if (!is_null($subtotal)) {
            $apiParams['subtotal'] = $subtotal;
        }

        if (!is_null($taxIncluded)) {
            $apiParams['tax_included'] = $taxIncluded;
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
     * The subjects a condition may ask about, the comparisons it may use, the
     * effect kinds and target scopes, the stacking modes, and the closed lists of
     * refusal, skip and release reasons. A caller building a form reads these
     * rather than hardcoding them.
     *
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEvaluationVocabularies(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/vocabularies'
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
     * @param string $name
     * @throws RevenexxException
     * @return array
     */
    public function promotionsEvaluationVocabulary(string $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/promotions/vocabularies/{name}'
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
}