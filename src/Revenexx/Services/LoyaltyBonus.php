<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\TurnoverSource;

class LoyaltyBonus extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filter `?organization_id=`, `?period=2026`, `?state=calculated` for the
     * year-end queue.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $programId
     * @param ?string $membershipId
     * @param ?string $organizationId
     * @param ?string $period
     * @param ?string $periodStart
     * @param ?string $periodEnd
     * @param ?string $baseSource
     * @param ?string $turnoverSource
     * @param ?string $reachedTierId
     * @param ?string $reachedTierCode
     * @param ?string $projectedTierCode
     * @param ?string $currency
     * @param ?string $state
     * @param ?string $receivablesCleared
     * @param ?string $receivablesCheckedBy
     * @param ?string $forfeitReason
     * @param ?string $documentRef
     * @param ?string $payoutRef
     * @param ?string $approvedBy
     * @param ?string $externalId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $programId = null, ?string $membershipId = null, ?string $organizationId = null, ?string $period = null, ?string $periodStart = null, ?string $periodEnd = null, ?string $baseSource = null, ?string $turnoverSource = null, ?string $reachedTierId = null, ?string $reachedTierCode = null, ?string $projectedTierCode = null, ?string $currency = null, ?string $state = null, ?string $receivablesCleared = null, ?string $receivablesCheckedBy = null, ?string $forfeitReason = null, ?string $documentRef = null, ?string $payoutRef = null, ?string $approvedBy = null, ?string $externalId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/bonus-agreements'
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

        if (!is_null($programId)) {
            $apiParams['program_id'] = $programId;
        }

        if (!is_null($membershipId)) {
            $apiParams['membership_id'] = $membershipId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($period)) {
            $apiParams['period'] = $period;
        }

        if (!is_null($periodStart)) {
            $apiParams['period_start'] = $periodStart;
        }

        if (!is_null($periodEnd)) {
            $apiParams['period_end'] = $periodEnd;
        }

        if (!is_null($baseSource)) {
            $apiParams['base_source'] = $baseSource;
        }

        if (!is_null($turnoverSource)) {
            $apiParams['turnover_source'] = $turnoverSource;
        }

        if (!is_null($reachedTierId)) {
            $apiParams['reached_tier_id'] = $reachedTierId;
        }

        if (!is_null($reachedTierCode)) {
            $apiParams['reached_tier_code'] = $reachedTierCode;
        }

        if (!is_null($projectedTierCode)) {
            $apiParams['projected_tier_code'] = $projectedTierCode;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($state)) {
            $apiParams['state'] = $state;
        }

        if (!is_null($receivablesCleared)) {
            $apiParams['receivables_cleared'] = $receivablesCleared;
        }

        if (!is_null($receivablesCheckedBy)) {
            $apiParams['receivables_checked_by'] = $receivablesCheckedBy;
        }

        if (!is_null($forfeitReason)) {
            $apiParams['forfeit_reason'] = $forfeitReason;
        }

        if (!is_null($documentRef)) {
            $apiParams['document_ref'] = $documentRef;
        }

        if (!is_null($payoutRef)) {
            $apiParams['payout_ref'] = $payoutRef;
        }

        if (!is_null($approvedBy)) {
            $apiParams['approved_by'] = $approvedBy;
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
     * Enrols the company if needed, freezes the programme tiers against the base,
     * and reads the year so far from orders. Without `base_turnover` the base is
     * last year: the previous agreement, else last year completed orders.
     *
     * @param string $organizationId
     * @param string $programId
     * @param ?float $baseTurnover
     * @param ?string $contactId
     * @param ?string $documentRef
     * @param ?string $period
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusCreate(string $organizationId, string $programId, ?float $baseTurnover = null, ?string $contactId = null, ?string $documentRef = null, ?string $period = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/bonus-agreements'
        );

        $apiParams = [];
        $apiParams['organization_id'] = $organizationId;
        $apiParams['program_id'] = $programId;

        if (!is_null($baseTurnover)) {
            $apiParams['base_turnover'] = $baseTurnover;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($documentRef)) {
            $apiParams['document_ref'] = $documentRef;
        }

        if (!is_null($period)) {
            $apiParams['period'] = $period;
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
    public function loyaltyBonusGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}'
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
     * Changing the base re-prices the frozen tiers; only while the year runs.
     * Everything else on an agreement is kept by this app.
     *
     * @param string $id
     * @param ?float $baseTurnover
     * @param ?string $documentRef
     * @param ?mixed $metadata
     * @param ?TurnoverSource $turnoverSource
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusUpdate(string $id, ?float $baseTurnover = null, ?string $documentRef = null, mixed $metadata = null, ?TurnoverSource $turnoverSource = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($baseTurnover)) {
            $apiParams['base_turnover'] = $baseTurnover;
        }
        $apiParams['document_ref'] = $documentRef;

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($turnoverSource)) {
            $apiParams['turnover_source'] = $turnoverSource;
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
     * @param ?string $checkedBy
     * @param ?bool $receivablesCleared
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusApprove(string $id, ?string $checkedBy = null, ?bool $receivablesCleared = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/approve'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($checkedBy)) {
            $apiParams['checked_by'] = $checkedBy;
        }

        if (!is_null($receivablesCleared)) {
            $apiParams['receivables_cleared'] = $receivablesCleared;
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
     * Final turnover, reached tier and bonus (that tier percentage of the whole
     * year). Announces bonus_agreement.calculated. A calculated agreement may be
     * calculated again after a late return.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusCalculate(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/calculate'
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

    /**
     * @param string $id
     * @param string $reason
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusForfeit(string $id, string $reason): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/forfeit'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
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
     * @param ?string $payoutRef
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusPay(string $id, ?string $payoutRef = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/pay'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($payoutRef)) {
            $apiParams['payout_ref'] = $payoutRef;
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
     * Turnover so far, projection to year end, every tier with its range, the
     * tier reached, the gap to the next with its projected date, the bonus now
     * and the expected bonus — the storefront Premium page and the cockpit
     * panel read it. `bars` carries the tiers as rows of label and value, worded
     * in the caller language, with the year gone and the bonus now as `footer`
     * rows.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusProgress(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/progress'
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
     * Adds every completed order of the year not yet counted; an order already
     * counted is not counted twice. Not for agreements fed by ERP imports.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusRebuild(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/bonus-agreements/{id}/rebuild'
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

    /**
     * Filter `?agreement_id=`, `?source=`.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $agreementId
     * @param ?string $entryKey
     * @param ?string $source
     * @param ?string $ref
     * @param ?string $orderId
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusEntriesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $agreementId = null, ?string $entryKey = null, ?string $source = null, ?string $ref = null, ?string $orderId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/turnover-entries'
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

        if (!is_null($agreementId)) {
            $apiParams['agreement_id'] = $agreementId;
        }

        if (!is_null($entryKey)) {
            $apiParams['entry_key'] = $entryKey;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
        }

        if (!is_null($ref)) {
            $apiParams['ref'] = $ref;
        }

        if (!is_null($orderId)) {
            $apiParams['order_id'] = $orderId;
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
     * A signed correction line with a reason (`ref`). A `key` makes a retry book
     * once.
     *
     * @param string $agreementId
     * @param float $amount
     * @param string $ref
     * @param ?string $at
     * @param ?string $key
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusEntriesCorrect(string $agreementId, float $amount, string $ref, ?string $at = null, ?string $key = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/turnover-entries'
        );

        $apiParams = [];
        $apiParams['agreement_id'] = $agreementId;
        $apiParams['amount'] = $amount;
        $apiParams['ref'] = $ref;

        if (!is_null($at)) {
            $apiParams['at'] = $at;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
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
    public function loyaltyBonusEntriesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/loyalty/turnover-entries/{id}'
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
     * At most 500 rows, each one line under its own reference. From the first
     * imported line an agreement counts imported lines only.
     *
     * @param array $rows
     * @throws RevenexxException
     * @return array
     */
    public function loyaltyBonusImport(array $rows): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/loyalty/turnover-imports'
        );

        $apiParams = [];
        $apiParams['rows'] = $rows;

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