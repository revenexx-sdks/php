<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Channel;
use Revenexx\Enums\AudiencesRulesCreateKind;
use Revenexx\Enums\MatchMode;

class AudiencesRules extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The rule rows of every active audience; filter `?audience_id=` for one
     * audience's tree.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $audienceId
     * @param ?string $parentId
     * @param ?string $kind
     * @param ?string $matchMode
     * @param ?string $negate
     * @param ?string $subject
     * @param ?string $field
     * @param ?string $operator
     * @param ?string $windowDays
     * @param ?string $channel
     * @param ?string $position
     * @throws RevenexxException
     * @return array
     */
    public function audiencesRulesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $audienceId = null, ?string $parentId = null, ?string $kind = null, ?string $matchMode = null, ?string $negate = null, ?string $subject = null, ?string $field = null, ?string $operator = null, ?string $windowDays = null, ?string $channel = null, ?string $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/rules'
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

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }

        if (!is_null($parentId)) {
            $apiParams['parent_id'] = $parentId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($matchMode)) {
            $apiParams['match_mode'] = $matchMode;
        }

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($field)) {
            $apiParams['field'] = $field;
        }

        if (!is_null($operator)) {
            $apiParams['operator'] = $operator;
        }

        if (!is_null($windowDays)) {
            $apiParams['window_days'] = $windowDays;
        }

        if (!is_null($channel)) {
            $apiParams['channel'] = $channel;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * @param string $audienceId
     * @param ?Channel $channel
     * @param ?string $field
     * @param ?AudiencesRulesCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $operator
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $subject
     * @param ?mixed $value
     * @param ?mixed $valueTo
     * @param ?int $windowDays
     * @throws RevenexxException
     * @return array
     */
    public function audiencesRulesCreate(string $audienceId, ?Channel $channel = null, ?string $field = null, ?AudiencesRulesCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $operator = null, ?string $parentId = null, ?int $position = null, ?string $subject = null, mixed $value = null, mixed $valueTo = null, ?int $windowDays = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/rules'
        );

        $apiParams = [];
        $apiParams['audience_id'] = $audienceId;
        $apiParams['channel'] = $channel;
        $apiParams['field'] = $field;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['match_mode'] = $matchMode;

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }
        $apiParams['operator'] = $operator;
        $apiParams['parent_id'] = $parentId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['subject'] = $subject;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($valueTo)) {
            $apiParams['value_to'] = $valueTo;
        }
        $apiParams['window_days'] = $windowDays;

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
    public function audiencesRulesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/rules/{id}'
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
    public function audiencesRulesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/rules/{id}'
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
     * @param ?string $audienceId
     * @param ?Channel $channel
     * @param ?string $field
     * @param ?AudiencesRulesCreateKind $kind
     * @param ?MatchMode $matchMode
     * @param ?bool $negate
     * @param ?string $operator
     * @param ?string $parentId
     * @param ?int $position
     * @param ?string $subject
     * @param ?mixed $value
     * @param ?mixed $valueTo
     * @param ?int $windowDays
     * @throws RevenexxException
     * @return array
     */
    public function audiencesRulesUpdate(string $id, ?string $audienceId = null, ?Channel $channel = null, ?string $field = null, ?AudiencesRulesCreateKind $kind = null, ?MatchMode $matchMode = null, ?bool $negate = null, ?string $operator = null, ?string $parentId = null, ?int $position = null, ?string $subject = null, mixed $value = null, mixed $valueTo = null, ?int $windowDays = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/rules/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($audienceId)) {
            $apiParams['audience_id'] = $audienceId;
        }
        $apiParams['channel'] = $channel;
        $apiParams['field'] = $field;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['match_mode'] = $matchMode;

        if (!is_null($negate)) {
            $apiParams['negate'] = $negate;
        }
        $apiParams['operator'] = $operator;
        $apiParams['parent_id'] = $parentId;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['subject'] = $subject;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($valueTo)) {
            $apiParams['value_to'] = $valueTo;
        }
        $apiParams['window_days'] = $windowDays;

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