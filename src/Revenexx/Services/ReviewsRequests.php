<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class ReviewsRequests extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?state=`, `?order_id=`, `?contact_id=`, `?journey_ref=`. A token is
     * never part of the answer and cannot be filtered on.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $orderId
     * @param ?string $orderNumber
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $state
     * @param ?string $journeyRef
     * @param ?string $market
     * @param ?string $locale
     * @param ?string $reviewedCount
     * @param ?string $issuedCount
     * @throws RevenexxException
     * @return array
     */
    public function reviewsRequestsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $orderId = null, ?string $orderNumber = null, ?string $contactId = null, ?string $organizationId = null, ?string $state = null, ?string $journeyRef = null, ?string $market = null, ?string $locale = null, ?string $reviewedCount = null, ?string $issuedCount = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/requests'
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

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($orderNumber)) {
            $apiParams['order_number'] = $orderNumber;
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

        if (!is_null($journeyRef)) {
            $apiParams['journey_ref'] = $journeyRef;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($reviewedCount)) {
            $apiParams['reviewed_count'] = $reviewedCount;
        }

        if (!is_null($issuedCount)) {
            $apiParams['issued_count'] = $issuedCount;
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
     * Called by the journeys `request_review` step. The same order and contact
     * answer the same link while it is valid; an expired link is replaced. The
     * link names the order's products the contact has not reviewed yet.
     *
     * @param string $contactId
     * @param string $orderId
     * @param ?string $journeyRef
     * @param ?string $locale
     * @param ?string $market
     * @param ?array $productIds
     * @throws RevenexxException
     * @return array
     */
    public function reviewsRequestsIssue(string $contactId, string $orderId, ?string $journeyRef = null, ?string $locale = null, ?string $market = null, ?array $productIds = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/requests'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['order_id'] = $orderId;

        if (!is_null($journeyRef)) {
            $apiParams['journey_ref'] = $journeyRef;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($productIds)) {
            $apiParams['product_ids'] = $productIds;
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
     * The products of the link and which of them are reviewed. The storefront
     * renders the form from it.
     *
     * @param string $token
     * @throws RevenexxException
     * @return array
     */
    public function reviewsRequestsForm(string $token): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/reviews/requests/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * One review per product of the link. Entries that cannot be accepted are
     * named in `rejected` while the others are written. Reviews wait for
     * moderation unless the tenant publishes high ratings at once.
     *
     * @param string $token
     * @param ?string $locale
     * @param ?array $reviews
     * @throws RevenexxException
     * @return array
     */
    public function reviewsRequestsSubmit(string $token, ?string $locale = null, ?array $reviews = null): array
    {
        $apiPath = str_replace(
            ['{token}'],
            [$token],
            '/v1/reviews/submit/{token}'
        );

        $apiParams = [];
        $apiParams['token'] = $token;

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($reviews)) {
            $apiParams['reviews'] = $reviews;
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