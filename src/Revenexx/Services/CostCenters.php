<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Conditions;
use Revenexx\Enums\CostCentersRestrictionsCreateType;

class CostCenters extends Service
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
    public function costCentersBudgetChangesList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/budget-changes'
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
    public function costCentersBudgetChangesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/budget-changes/{id}'
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
    public function costCentersBudgetsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/budgets'
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
     * @param string $costCenterId
     * @param string $name
     * @param ?bool $active
     * @param ?float $initialValue
     * @param ?array $metadata
     * @param ?int $periodLength
     * @param ?string $periodStart
     * @param ?bool $recurring
     * @param ?int $sequence
     * @param ?array $takeover
     * @throws RevenexxException
     * @return array
     */
    public function costCentersBudgetsCreate(string $costCenterId, string $name, ?bool $active = null, ?float $initialValue = null, ?array $metadata = null, ?int $periodLength = null, ?string $periodStart = null, ?bool $recurring = null, ?int $sequence = null, ?array $takeover = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/budgets'
        );

        $apiParams = [];
        $apiParams['cost_center_id'] = $costCenterId;
        $apiParams['name'] = $name;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($initialValue)) {
            $apiParams['initial_value'] = $initialValue;
        }
        $apiParams['metadata'] = $metadata;
        $apiParams['period_length'] = $periodLength;
        $apiParams['period_start'] = $periodStart;

        if (!is_null($recurring)) {
            $apiParams['recurring'] = $recurring;
        }

        if (!is_null($sequence)) {
            $apiParams['sequence'] = $sequence;
        }
        $apiParams['takeover'] = $takeover;

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
     * @param ?string $today
     * @throws RevenexxException
     * @return array
     */
    public function costCentersBudgetsRollover(?string $today = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/budgets/rollover/run'
        );

        $apiParams = [];
        $apiParams['today'] = $today;

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
    public function costCentersBudgetsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/budgets/{id}'
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
     * @param ?string $costCenterId
     * @param ?float $initialValue
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $periodLength
     * @param ?string $periodStart
     * @param ?bool $recurring
     * @param ?int $sequence
     * @param ?array $takeover
     * @throws RevenexxException
     * @return array
     */
    public function costCentersBudgetsUpdate(string $id, ?bool $active = null, ?string $costCenterId = null, ?float $initialValue = null, ?array $metadata = null, ?string $name = null, ?int $periodLength = null, ?string $periodStart = null, ?bool $recurring = null, ?int $sequence = null, ?array $takeover = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/budgets/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($costCenterId)) {
            $apiParams['cost_center_id'] = $costCenterId;
        }

        if (!is_null($initialValue)) {
            $apiParams['initial_value'] = $initialValue;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['period_length'] = $periodLength;
        $apiParams['period_start'] = $periodStart;

        if (!is_null($recurring)) {
            $apiParams['recurring'] = $recurring;
        }

        if (!is_null($sequence)) {
            $apiParams['sequence'] = $sequence;
        }
        $apiParams['takeover'] = $takeover;

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
     * @param string $actor
     * @param ?float $amount
     * @param ?string $currency
     * @param ?string $note
     * @param ?float $target
     * @throws RevenexxException
     * @return array
     */
    public function costCentersBudgetsAdjust(string $id, string $actor, ?float $amount = null, ?string $currency = null, ?string $note = null, ?float $target = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/budgets/{id}/adjust'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['actor'] = $actor;
        $apiParams['amount'] = $amount;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;
        $apiParams['target'] = $target;

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
     * @param array $allocations
     * @param string $orderId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function costCentersCommit(array $allocations, string $orderId, ?string $contactId = null, ?string $currency = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/commit'
        );

        $apiParams = [];
        $apiParams['allocations'] = $allocations;
        $apiParams['order_id'] = $orderId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;

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
     * @param string $purchaseRequestId
     * @param ?string $currency
     * @param ?string $note
     * @param ?string $orderId
     * @throws RevenexxException
     * @return array
     */
    public function costCentersConfirm(string $purchaseRequestId, ?string $currency = null, ?string $note = null, ?string $orderId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/confirm'
        );

        $apiParams = [];
        $apiParams['purchase_request_id'] = $purchaseRequestId;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;
        $apiParams['order_id'] = $orderId;

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
    public function costCentersContactLimitsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/contact-limits'
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
     * @param string $contactId
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?float $monetaryLimit
     * @throws RevenexxException
     * @return array
     */
    public function costCentersContactLimitsCreate(string $contactId, ?string $currency = null, ?array $metadata = null, ?float $monetaryLimit = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/contact-limits'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($monetaryLimit)) {
            $apiParams['monetary_limit'] = $monetaryLimit;
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
    public function costCentersContactLimitsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/contact-limits/{id}'
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
    public function costCentersContactLimitsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/contact-limits/{id}'
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
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?float $monetaryLimit
     * @throws RevenexxException
     * @return array
     */
    public function costCentersContactLimitsUpdate(string $id, ?string $contactId = null, ?string $currency = null, ?array $metadata = null, ?float $monetaryLimit = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/contact-limits/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($monetaryLimit)) {
            $apiParams['monetary_limit'] = $monetaryLimit;
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
    public function costCentersCostCentersList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/cost-centers'
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
     * @param string $code
     * @param string $name
     * @param ?string $accountableContactId
     * @param ?bool $active
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function costCentersCostCentersCreate(string $code, string $name, ?string $accountableContactId = null, ?bool $active = null, ?string $currency = null, ?array $metadata = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/cost-centers'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['accountable_contact_id'] = $accountableContactId;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['metadata'] = $metadata;
        $apiParams['organization_id'] = $organizationId;

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
    public function costCentersCostCentersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/cost-centers/{id}'
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
    public function costCentersCostCentersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/cost-centers/{id}'
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
     * @param ?string $accountableContactId
     * @param ?bool $active
     * @param ?string $code
     * @param ?string $currency
     * @param ?array $metadata
     * @param ?string $name
     * @param ?string $organizationId
     * @throws RevenexxException
     * @return array
     */
    public function costCentersCostCentersUpdate(string $id, ?string $accountableContactId = null, ?bool $active = null, ?string $code = null, ?string $currency = null, ?array $metadata = null, ?string $name = null, ?string $organizationId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/cost-centers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['accountable_contact_id'] = $accountableContactId;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['organization_id'] = $organizationId;

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
     * @param float $amount
     * @param ?string $actor
     * @param ?string $currency
     * @param ?string $note
     * @param ?string $orderId
     * @param ?string $purchaseRequestId
     * @throws RevenexxException
     * @return array
     */
    public function costCentersCostCentersConsume(string $id, float $amount, ?string $actor = null, ?string $currency = null, ?string $note = null, ?string $orderId = null, ?string $purchaseRequestId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/cost-centers/{id}/consume'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['amount'] = $amount;
        $apiParams['actor'] = $actor;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;
        $apiParams['order_id'] = $orderId;
        $apiParams['purchase_request_id'] = $purchaseRequestId;

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
     * @param float $amount
     * @param ?array $conditions
     * @param ?string $contactId
     * @param ?string $costCenterId
     * @param ?string $currency
     * @throws RevenexxException
     * @return array
     */
    public function costCentersEvaluate(float $amount, ?array $conditions = null, ?string $contactId = null, ?string $costCenterId = null, ?string $currency = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/evaluate'
        );

        $apiParams = [];
        $apiParams['amount'] = $amount;

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
        }
        $apiParams['contact_id'] = $contactId;

        if (!is_null($costCenterId)) {
            $apiParams['cost_center_id'] = $costCenterId;
        }
        $apiParams['currency'] = $currency;

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
     * @param array $allocations
     * @param string $purchaseRequestId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function costCentersReserve(array $allocations, string $purchaseRequestId, ?string $contactId = null, ?string $currency = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/reserve'
        );

        $apiParams = [];
        $apiParams['allocations'] = $allocations;
        $apiParams['purchase_request_id'] = $purchaseRequestId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;

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
     * @param array $allocations
     * @param string $purchaseRequestId
     * @param ?string $contactId
     * @param ?string $currency
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function costCentersReserveAdjust(array $allocations, string $purchaseRequestId, ?string $contactId = null, ?string $currency = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/reserve/adjust'
        );

        $apiParams = [];
        $apiParams['allocations'] = $allocations;
        $apiParams['purchase_request_id'] = $purchaseRequestId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;

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
    public function costCentersRestrictionsList(?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/restrictions'
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
     * @param string $costCenterId
     * @param array $parameters
     * @param CostCentersRestrictionsCreateType $type
     * @param ?bool $active
     * @throws RevenexxException
     * @return array
     */
    public function costCentersRestrictionsCreate(string $costCenterId, array $parameters, CostCentersRestrictionsCreateType $type, ?bool $active = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/restrictions'
        );

        $apiParams = [];
        $apiParams['cost_center_id'] = $costCenterId;
        $apiParams['parameters'] = $parameters;
        $apiParams['type'] = $type;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
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
    public function costCentersRestrictionsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/restrictions/{id}'
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
    public function costCentersRestrictionsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/restrictions/{id}'
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
     * @param ?string $costCenterId
     * @param ?array $parameters
     * @param ?CostCentersRestrictionsCreateType $type
     * @throws RevenexxException
     * @return array
     */
    public function costCentersRestrictionsUpdate(string $id, ?bool $active = null, ?string $costCenterId = null, ?array $parameters = null, ?CostCentersRestrictionsCreateType $type = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/cost-centers/restrictions/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($costCenterId)) {
            $apiParams['cost_center_id'] = $costCenterId;
        }

        if (!is_null($parameters)) {
            $apiParams['parameters'] = $parameters;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
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
     * @param array $lines
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?array $roles
     * @throws RevenexxException
     * @return array
     */
    public function costCentersUsable(array $lines, ?string $contactId = null, ?string $organizationId = null, ?array $roles = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/usable'
        );

        $apiParams = [];
        $apiParams['lines'] = $lines;
        $apiParams['contact_id'] = $contactId;
        $apiParams['organization_id'] = $organizationId;

        if (!is_null($roles)) {
            $apiParams['roles'] = $roles;
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
     * @param string $purchaseRequestId
     * @param ?string $currency
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function costCentersWithdraw(string $purchaseRequestId, ?string $currency = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/cost-centers/withdraw'
        );

        $apiParams = [];
        $apiParams['purchase_request_id'] = $purchaseRequestId;
        $apiParams['currency'] = $currency;
        $apiParams['note'] = $note;

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