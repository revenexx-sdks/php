<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\ReviewsReviewsCreateSource;
use Revenexx\Enums\ReviewsReviewsCreateState;

class ReviewsReviews extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every review of this tenant in every state, without the trash unless
     * `trashed` asks for it. Filter `?state=pending` for the moderation queue,
     * `?product_id=`, `?contact_id=` (what the audiences rule reads), `?rating=`,
     * `?verified_purchase=true`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $productId
     * @param ?string $sku
     * @param ?string $productName
     * @param ?string $orderId
     * @param ?string $orderNumber
     * @param ?string $requestId
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $authorFirstName
     * @param ?string $authorLastName
     * @param ?string $rating
     * @param ?string $title
     * @param ?string $body
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $verifiedPurchase
     * @param ?string $source
     * @param ?string $state
     * @param ?string $rejectionReason
     * @param ?string $moderatedBy
     * @param ?string $merchantReply
     * @param ?string $repliedBy
     * @param ?string $externalId
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $productId = null, ?string $sku = null, ?string $productName = null, ?string $orderId = null, ?string $orderNumber = null, ?string $requestId = null, ?string $contactId = null, ?string $organizationId = null, ?string $authorFirstName = null, ?string $authorLastName = null, ?string $rating = null, ?string $title = null, ?string $body = null, ?string $locale = null, ?string $market = null, ?string $verifiedPurchase = null, ?string $source = null, ?string $state = null, ?string $rejectionReason = null, ?string $moderatedBy = null, ?string $merchantReply = null, ?string $repliedBy = null, ?string $externalId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/reviews'
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

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($productName)) {
            $apiParams['product_name'] = $productName;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
        }

        if (!is_null($orderNumber)) {
            $apiParams['order_number'] = $orderNumber;
        }

        if (!is_null($requestId)) {
            $apiParams['request_id'] = $requestId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($authorFirstName)) {
            $apiParams['author_first_name'] = $authorFirstName;
        }

        if (!is_null($authorLastName)) {
            $apiParams['author_last_name'] = $authorLastName;
        }

        if (!is_null($rating)) {
            $apiParams['rating'] = $rating;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($body)) {
            $apiParams['body'] = $body;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
        }

        if (!is_null($verifiedPurchase)) {
            $apiParams['verified_purchase'] = $verifiedPurchase;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($rejectionReason)) {
            $apiParams['rejection_reason'] = $rejectionReason;
        }

        if (!is_null($moderatedBy)) {
            $apiParams['moderated_by'] = $moderatedBy;
        }

        if (!is_null($merchantReply)) {
            $apiParams['merchant_reply'] = $merchantReply;
        }

        if (!is_null($repliedBy)) {
            $apiParams['replied_by'] = $repliedBy;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
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
     * For reviews collected elsewhere. The purchase is verified only when
     * `order_id` and `contact_id` name a completed order of that contact holding
     * the product — never because a caller says so.
     *
     * @param string $productId
     * @param int $rating
     * @param ?string $authorFirstName
     * @param ?string $authorLastName
     * @param ?string $body
     * @param ?string $contactId
     * @param ?string $externalId
     * @param ?array $externalRefs
     * @param ?string $locale
     * @param ?string $market
     * @param ?string $orderId
     * @param ?string $productName
     * @param ?string $publishedAt
     * @param ?string $sku
     * @param ?ReviewsReviewsCreateSource $source
     * @param ?array $sourceData
     * @param ?string $sourceSyncedAt
     * @param ?ReviewsReviewsCreateState $state
     * @param ?string $title
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsCreate(string $productId, int $rating, ?string $authorFirstName = null, ?string $authorLastName = null, ?string $body = null, ?string $contactId = null, ?string $externalId = null, ?array $externalRefs = null, ?string $locale = null, ?string $market = null, ?string $orderId = null, ?string $productName = null, ?string $publishedAt = null, ?string $sku = null, ?ReviewsReviewsCreateSource $source = null, ?array $sourceData = null, ?string $sourceSyncedAt = null, ?ReviewsReviewsCreateState $state = null, ?string $title = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/reviews'
        );

        $apiParams = [];
        $apiParams['product_id'] = $productId;
        $apiParams['rating'] = $rating;
        $apiParams['author_first_name'] = $authorFirstName;
        $apiParams['author_last_name'] = $authorLastName;
        $apiParams['body'] = $body;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }
        $apiParams['locale'] = $locale;
        $apiParams['market'] = $market;
        $apiParams['order_id'] = $orderId;
        $apiParams['product_name'] = $productName;
        $apiParams['published_at'] = $publishedAt;
        $apiParams['sku'] = $sku;
        $apiParams['source'] = $source;

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }
        $apiParams['state'] = $state;
        $apiParams['title'] = $title;

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
     * Every review in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/reviews/trash/empty'
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
     * What the nightly purge does, callable by hand: every review in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/reviews/reviews/trash/purge'
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
     * The first DELETE moves the review into the trash: it stays, with everything
     * hanging off it, and counts nowhere until it is restored. Any review may go
     * in, published or not; while it is in the trash it leaves the product page
     * and the figures, which are recomputed. A DELETE on a review already in the
     * trash deletes it for good — refused while something still needs it, and
     * not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}'
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
    public function reviewsReviewsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}'
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
     * Clears the trash marks on the review. Its parts were never touched, so they
     * come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function reviewsReviewsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/reviews/reviews/{id}/restore'
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
}