<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Source;
use Revenexx\Enums\SegmentMemberSource;
use Revenexx\Enums\RuleMatch;
use Revenexx\Enums\SegmentRuleMatch;
use Revenexx\Enums\Target;

class CustomersSegments extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * One organization inside one segment, plus the record of how it got there:
     * `source: "manual"` for a company somebody put in, `source: "rule"` for one
     * the rule engine matched. That distinction is what lets a recompute rewrite
     * its own rows and leave every hand-picked one alone. The membership rows
     * themselves — the answer to "which companies are in this segment"
     * (`segment_id`) and to "which segments is this company in"
     * (`organization_id`). Paged with `limit`/`offset`/`order`.
     *
     * @param ?string $id
     * @param ?string $segmentId
     * @param ?string $organizationId
     * @param ?Source $source
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentMembersList(?string $id = null, ?string $segmentId = null, ?string $organizationId = null, ?Source $source = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/segment_members'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($segmentId)) {
            $apiParams['segment_id'] = $segmentId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * One organization inside one segment, plus the record of how it got there:
     * `source: "manual"` for a company somebody put in, `source: "rule"` for one
     * the rule engine matched. That distinction is what lets a recompute rewrite
     * its own rows and leave every hand-picked one alone. Adds a company to a
     * segment BY HAND. The row is `source: "manual"`, which is what protects it:
     * a rule recompute rewrites the rule-derived rows of that segment and never
     * touches this one. A create cannot omit `segment_id` and `organization_id`;
     * everything else is optional or defaulted by the database. Two rows of this
     * tenant may not share the combination of `segment_id` + `organization_id`.
     *
     * @param string $organizationId
     * @param string $segmentId
     * @param ?SegmentMemberSource $source
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentMembersCreate(string $organizationId, string $segmentId, ?SegmentMemberSource $source = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/segment_members'
        );

        $apiParams = [];
        $apiParams['organization_id'] = $organizationId;
        $apiParams['segment_id'] = $segmentId;

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * One organization inside one segment, plus the record of how it got there:
     * `source: "manual"` for a company somebody put in, `source: "rule"` for one
     * the rule engine matched. That distinction is what lets a recompute rewrite
     * its own rows and leave every hand-picked one alone. Takes the company out
     * of the segment. If the segment carries rules and the company still matches
     * them, the next recompute puts it back; remove it from the rule, not from
     * the list. Nothing else in this app points at it, so nothing else goes with
     * it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentMembersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segment_members/{id}'
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
     * One organization inside one segment, plus the record of how it got there:
     * `source: "manual"` for a company somebody put in, `source: "rule"` for one
     * the rule engine matched. That distinction is what lets a recompute rewrite
     * its own rows and leave every hand-picked one alone. One membership row by
     * id, with the `source` that says how it came about.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentMembersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segment_members/{id}'
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
     * One organization inside one segment, plus the record of how it got there:
     * `source: "manual"` for a company somebody put in, `source: "rule"` for one
     * the rule engine matched. That distinction is what lets a recompute rewrite
     * its own rows and leave every hand-picked one alone. A partial update. In
     * practice there is little to change — a membership is a pair of ids — so
     * this exists for the `source` correction rather than as the normal path. Two
     * rows of this tenant may not share the combination of `segment_id` +
     * `organization_id`.
     *
     * @param string $id
     * @param ?string $organizationId
     * @param ?string $segmentId
     * @param ?SegmentMemberSource $source
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentMembersUpdate(string $id, ?string $organizationId = null, ?string $segmentId = null, ?SegmentMemberSource $source = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segment_members/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($segmentId)) {
            $apiParams['segment_id'] = $segmentId;
        }

        if (!is_null($source)) {
            $apiParams['source'] = $source;
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
     * A segment is a named group of ORGANIZATIONS — never of people — built
     * by hand, by rule, or both at once. It is what a price list, a campaign or a
     * shipping option is pointed at when the answer is "these customers, not
     * those". Every segment this tenant keeps, with its stored rules. Any column
     * filters and the page is `limit`/`offset`/`order`. Which companies are
     * actually IN one is `segment_members`, because the rule half is materialized
     * rather than evaluated on read.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?int $position
     * @param ?RuleMatch $ruleMatch
     * @param ?string $rulesComputedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsList(?string $id = null, ?string $code = null, ?int $position = null, ?RuleMatch $ruleMatch = null, ?string $rulesComputedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/segments'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

        if (!is_null($rulesComputedAt)) {
            $apiParams['rules_computed_at'] = $rulesComputedAt;
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
     * A segment is a named group of ORGANIZATIONS — never of people — built
     * by hand, by rule, or both at once. It is what a price list, a campaign or a
     * shipping option is pointed at when the answer is "these customers, not
     * those". Creates the group. Rules are optional: leave them out for a
     * hand-picked list, or store a rule document and let the recompute keep the
     * membership up to date. The `code` is what other apps point at, so pick it
     * deliberately. `code` is the only field a create cannot omit; everything
     * else is optional or defaulted by the database. Two rows of this tenant may
     * not share `code`.
     *
     * @param string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?SegmentRuleMatch $ruleMatch
     * @param ?array $rules
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsCreate(string $code, ?array $labels = null, ?int $position = null, ?SegmentRuleMatch $ruleMatch = null, ?array $rules = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/segments'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['rule_match'] = $ruleMatch;

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
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
     * Same sync as the single-segment recompute, applied to every segment with
     * non-null rules. A failing segment is reported in its result entry instead
     * of aborting the run. The run shares one budget: a segment that does not fit
     * reports done:false (or skipped:true) and keeps rules_computed_at null, so
     * the next call resumes it from its own data. Repeat until the top-level done
     * is true.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsRulesRecomputeAll(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/segments/rules/recompute-all'
        );

        $apiParams = [];
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
     * A segment is a named group of ORGANIZATIONS — never of people — built
     * by hand, by rule, or both at once. It is what a price list, a campaign or a
     * shipping option is pointed at when the answer is "these customers, not
     * those". Removes the segment. Anything in another app that points at its
     * `code` — a price list, a campaign — is left pointing at nothing,
     * because no app may hold a foreign key into another (ADR-0055). Deleting one
     * takes every `segment_members` row that points at it with it — the foreign
     * keys decide, not this route.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segments/{id}'
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
     * A segment is a named group of ORGANIZATIONS — never of people — built
     * by hand, by rule, or both at once. It is what a price list, a campaign or a
     * shipping option is pointed at when the answer is "these customers, not
     * those". One segment by id, including the rule document it carries. A
     * segment with no rules is hand-picked and completely valid.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segments/{id}'
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
     * A segment is a named group of ORGANIZATIONS — never of people — built
     * by hand, by rule, or both at once. It is what a price list, a campaign or a
     * shipping option is pointed at when the answer is "these customers, not
     * those". A partial update — send only what changes. Editing the rules does
     * NOT re-evaluate them: that is `POST
     * /customers/segments/{segment_id}/rules/recompute`, so a half-typed rule
     * never silently empties a live segment. Two rows of this tenant may not
     * share `code`.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $labels
     * @param ?int $position
     * @param ?SegmentRuleMatch $ruleMatch
     * @param ?array $rules
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsUpdate(string $id, ?string $code = null, ?array $labels = null, ?int $position = null, ?SegmentRuleMatch $ruleMatch = null, ?array $rules = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/segments/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['labels'] = $labels;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['rule_match'] = $ruleMatch;

        if (!is_null($rules)) {
            $apiParams['rules'] = $rules;
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
     * A dry run: it answers how many organizations the rule would select, with a
     * handful of them by name, and writes nothing at all. Evaluates the rule
     * document in the REQUEST BODY (not the stored segments.rules), so the
     * cockpit can preview an unsaved rule. Costs a single count query for the
     * common single-query rule; 'any' rules and rules repeating a column are
     * combined in the app and capped at 5000 ids, in which case 'capped' is true
     * and 'count' is a LOWER bound. Membership is never touched.
     *
     * @param string $segmentId
     * @param array $conditions
     * @param ?RuleMatch $ruleMatch
     * @param ?Target $target
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsRulesPreview(string $segmentId, array $conditions, ?RuleMatch $ruleMatch = null, ?Target $target = null): array
    {
        $apiPath = str_replace(
            ['{segment_id}'],
            [$segmentId],
            '/v1/customers/segments/{segment_id}/rules/preview'
        );

        $apiParams = [];
        $apiParams['segment_id'] = $segmentId;
        $apiParams['conditions'] = $conditions;
        $apiParams['rule_match'] = $ruleMatch;
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
     * Evaluates segments.rules (NOT the request body), then inserts the newly
     * matching organizations as source='rule' rows and deletes the rule rows that
     * no longer match. Manual (source='manual') memberships are never inserted,
     * deleted or shadowed. Bounded by a wall-clock budget below the gateway's
     * upstream timeout: when 'done' is false, POST again with the returned
     * 'cursor' until it is true. added/removed/processed count THIS call only.
     * Omitting 'cursor' resumes an unfinished pass and starts a fresh one after a
     * completed pass; an explicit null always restarts.
     * segments.rules_computed_at is stamped only when the pass completes.
     *
     * @param string $segmentId
     * @param ?string $cursor
     * @throws RevenexxException
     * @return array
     */
    public function customersSegmentsRulesRecompute(string $segmentId, ?string $cursor = null): array
    {
        $apiPath = str_replace(
            ['{segment_id}'],
            [$segmentId],
            '/v1/customers/segments/{segment_id}/rules/recompute'
        );

        $apiParams = [];
        $apiParams['segment_id'] = $segmentId;
        $apiParams['cursor'] = $cursor;

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