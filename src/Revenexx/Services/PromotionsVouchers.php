<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\PromotionsBatchesCreateStatus;

class PromotionsVouchers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The unit a mailing is accounted for by. "How many of the spring codes have
     * been used" is a question about a batch, not about fifty thousand rows.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $name
     * @param ?string $pattern
     * @param ?string $alphabet
     * @param ?string $requested
     * @param ?string $createdCount
     * @param ?string $redeemedCount
     * @param ?string $status
     * @param ?string $requestRef
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $name = null, ?string $pattern = null, ?string $alphabet = null, ?string $requested = null, ?string $createdCount = null, ?string $redeemedCount = null, ?string $status = null, ?string $requestRef = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/batches'
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

        if (!is_null($pattern)) {
            $apiParams['pattern'] = $pattern;
        }

        if (!is_null($alphabet)) {
            $apiParams['alphabet'] = $alphabet;
        }

        if (!is_null($requested)) {
            $apiParams['requested'] = $requested;
        }

        if (!is_null($createdCount)) {
            $apiParams['created_count'] = $createdCount;
        }

        if (!is_null($redeemedCount)) {
            $apiParams['redeemed_count'] = $redeemedCount;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($requestRef)) {
            $apiParams['request_ref'] = $requestRef;
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
     * @param ?string $alphabet
     * @param ?array $metadata
     * @param ?string $pattern
     * @param ?string $requestRef
     * @param ?int $requested
     * @param ?PromotionsBatchesCreateStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesCreate(string $name, string $promotionId, ?string $alphabet = null, ?array $metadata = null, ?string $pattern = null, ?string $requestRef = null, ?int $requested = null, ?PromotionsBatchesCreateStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/batches'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($alphabet)) {
            $apiParams['alphabet'] = $alphabet;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($pattern)) {
            $apiParams['pattern'] = $pattern;
        }

        if (!is_null($requestRef)) {
            $apiParams['request_ref'] = $requestRef;
        }

        if (!is_null($requested)) {
            $apiParams['requested'] = $requested;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
    public function promotionsBatchesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}'
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
    public function promotionsBatchesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}'
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
     * @param ?string $alphabet
     * @param ?array $metadata
     * @param ?string $pattern
     * @param ?string $requestRef
     * @param ?int $requested
     * @param ?PromotionsBatchesCreateStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesUpdate(string $id, string $name, string $promotionId, ?string $alphabet = null, ?array $metadata = null, ?string $pattern = null, ?string $requestRef = null, ?int $requested = null, ?PromotionsBatchesCreateStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['name'] = $name;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($alphabet)) {
            $apiParams['alphabet'] = $alphabet;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($pattern)) {
            $apiParams['pattern'] = $pattern;
        }

        if (!is_null($requestRef)) {
            $apiParams['request_ref'] = $requestRef;
        }

        if (!is_null($requested)) {
            $apiParams['requested'] = $requested;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * The codes are only useful once they are out of this system and in a mailing
     * tool, so a batch that cannot leave was made for nobody.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesExport(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}/export'
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
     * Fifty thousand codes from one pattern, in one call, accounted for as one
     * batch. The alphabet omits the characters people confuse reading a code off
     * paper. A request carrying a reference makes no second batch when it is
     * retried — a retry that doubled a mailing is discovered when the codes are
     * in the post.
     *
     * @param string $id
     * @param int $count
     * @param ?string $alphabet
     * @param ?string $pattern
     * @param ?string $requestRef
     * @param ?int $usageLimit
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesGenerate(string $id, int $count, ?string $alphabet = null, ?string $pattern = null, ?string $requestRef = null, ?int $usageLimit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}/generate'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['count'] = $count;

        if (!is_null($alphabet)) {
            $apiParams['alphabet'] = $alphabet;
        }

        if (!is_null($pattern)) {
            $apiParams['pattern'] = $pattern;
        }

        if (!is_null($requestRef)) {
            $apiParams['request_ref'] = $requestRef;
        }

        if (!is_null($usageLimit)) {
            $apiParams['usage_limit'] = $usageLimit;
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
     * A personalised mailing needs one code per recipient, issued to them alone.
     * Generating them separately would turn one campaign into ten thousand calls.
     *
     * @param string $id
     * @param array $recipients
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesGenerateFor(string $id, array $recipients): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}/generate-for'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['recipients'] = $recipients;

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
     * A migrated shop has codes already printed on cards, and a code the new
     * system rewrote is a card in somebody wallet that no longer works. Every
     * collision is named rather than silently skipped — an import that quietly
     * dropped duplicates leaves a merchant believing they issued codes they did
     * not.
     *
     * @param string $id
     * @param array $codes
     * @param ?int $usageLimit
     * @throws RevenexxException
     * @return array
     */
    public function promotionsBatchesImport(string $id, array $codes, ?int $usageLimit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/batches/{id}/import'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['codes'] = $codes;

        if (!is_null($usageLimit)) {
            $apiParams['usage_limit'] = $usageLimit;
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
     * A code held FOR a buyer without being given to them — which is what a
     * shop handing a limited code to the first hundred who ask actually needs. An
     * expired reservation stops counting when the code is next looked at.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $voucherId
     * @param ?string $contactId
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVoucherReservationsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $voucherId = null, ?string $contactId = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/voucher-reservations'
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

        if (!is_null($voucherId)) {
            $apiParams['voucher_id'] = $voucherId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
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
     * @param string $voucherId
     * @param ?string $contactId
     * @param ?string $expiresAt
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVoucherReservationsCreate(string $voucherId, ?string $contactId = null, ?string $expiresAt = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/voucher-reservations'
        );

        $apiParams = [];
        $apiParams['voucher_id'] = $voucherId;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
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
    public function promotionsVoucherReservationsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/voucher-reservations/{id}'
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
    public function promotionsVoucherReservationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/voucher-reservations/{id}'
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
     * @param string $voucherId
     * @param ?string $contactId
     * @param ?string $expiresAt
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVoucherReservationsUpdate(string $id, string $voucherId, ?string $contactId = null, ?string $expiresAt = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/voucher-reservations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['voucher_id'] = $voucherId;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
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
     * The codes buyers type. A voucher belongs to exactly one promotion and
     * carries four independent limits — how often it may be redeemed, an amount
     * spent down rather than used up, the buyer it was issued to, and its own
     * validity window.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $promotionId
     * @param ?string $batchId
     * @param ?string $code
     * @param ?string $codeKey
     * @param ?string $status
     * @param ?string $usageLimit
     * @param ?string $usageCount
     * @param ?string $currency
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $reservationRequired
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVouchersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $promotionId = null, ?string $batchId = null, ?string $code = null, ?string $codeKey = null, ?string $status = null, ?string $usageLimit = null, ?string $usageCount = null, ?string $currency = null, ?string $contactId = null, ?string $organizationId = null, ?string $reservationRequired = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/vouchers'
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

        if (!is_null($batchId)) {
            $apiParams['batch_id'] = $batchId;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($codeKey)) {
            $apiParams['code_key'] = $codeKey;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($usageLimit)) {
            $apiParams['usage_limit'] = $usageLimit;
        }

        if (!is_null($usageCount)) {
            $apiParams['usage_count'] = $usageCount;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($reservationRequired)) {
            $apiParams['reservation_required'] = $reservationRequired;
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
     * @param string $promotionId
     * @param ?string $batchId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $endsAt
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?int $reservationLimit
     * @param ?bool $reservationRequired
     * @param ?float $residualValue
     * @param ?string $startsAt
     * @param ?PromotionsBatchesCreateStatus $status
     * @param ?int $usageLimit
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVouchersCreate(string $code, string $promotionId, ?string $batchId = null, ?string $contactId = null, ?string $currency = null, ?string $endsAt = null, ?array $metadata = null, ?string $organizationId = null, ?int $reservationLimit = null, ?bool $reservationRequired = null, ?float $residualValue = null, ?string $startsAt = null, ?PromotionsBatchesCreateStatus $status = null, ?int $usageLimit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/promotions/vouchers'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($batchId)) {
            $apiParams['batch_id'] = $batchId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($endsAt)) {
            $apiParams['ends_at'] = $endsAt;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($reservationLimit)) {
            $apiParams['reservation_limit'] = $reservationLimit;
        }

        if (!is_null($reservationRequired)) {
            $apiParams['reservation_required'] = $reservationRequired;
        }

        if (!is_null($residualValue)) {
            $apiParams['residual_value'] = $residualValue;
        }

        if (!is_null($startsAt)) {
            $apiParams['starts_at'] = $startsAt;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($usageLimit)) {
            $apiParams['usage_limit'] = $usageLimit;
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
    public function promotionsVouchersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/vouchers/{id}'
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
    public function promotionsVouchersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/vouchers/{id}'
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
     * @param string $promotionId
     * @param ?string $batchId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $endsAt
     * @param ?array $metadata
     * @param ?string $organizationId
     * @param ?int $reservationLimit
     * @param ?bool $reservationRequired
     * @param ?float $residualValue
     * @param ?string $startsAt
     * @param ?PromotionsBatchesCreateStatus $status
     * @param ?int $usageLimit
     * @throws RevenexxException
     * @return array
     */
    public function promotionsVouchersUpdate(string $id, string $code, string $promotionId, ?string $batchId = null, ?string $contactId = null, ?string $currency = null, ?string $endsAt = null, ?array $metadata = null, ?string $organizationId = null, ?int $reservationLimit = null, ?bool $reservationRequired = null, ?float $residualValue = null, ?string $startsAt = null, ?PromotionsBatchesCreateStatus $status = null, ?int $usageLimit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/promotions/vouchers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['code'] = $code;
        $apiParams['promotion_id'] = $promotionId;

        if (!is_null($batchId)) {
            $apiParams['batch_id'] = $batchId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($endsAt)) {
            $apiParams['ends_at'] = $endsAt;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($reservationLimit)) {
            $apiParams['reservation_limit'] = $reservationLimit;
        }

        if (!is_null($reservationRequired)) {
            $apiParams['reservation_required'] = $reservationRequired;
        }

        if (!is_null($residualValue)) {
            $apiParams['residual_value'] = $residualValue;
        }

        if (!is_null($startsAt)) {
            $apiParams['starts_at'] = $startsAt;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($usageLimit)) {
            $apiParams['usage_limit'] = $usageLimit;
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
}