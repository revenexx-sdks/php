<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\Kind;
use Revenexx\Enums\RuleMatch;

class AudiencesAudiences extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every audience of this tenant, active and static, with its member count and
     * how many of them someone may write to.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $code
     * @param ?string $description
     * @param ?string $kind
     * @param ?string $ruleMatch
     * @param ?string $active
     * @param ?string $memberCount
     * @param ?string $eligibleCount
     * @param ?string $rulesSummary
     * @param ?string $recomputeState
     * @param ?string $recomputeError
     * @param ?string $frozenFromId
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $code = null, ?string $description = null, ?string $kind = null, ?string $ruleMatch = null, ?string $active = null, ?string $memberCount = null, ?string $eligibleCount = null, ?string $rulesSummary = null, ?string $recomputeState = null, ?string $recomputeError = null, ?string $frozenFromId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/audiences'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($memberCount)) {
            $apiParams['member_count'] = $memberCount;
        }

        if (!is_null($eligibleCount)) {
            $apiParams['eligible_count'] = $eligibleCount;
        }

        if (!is_null($rulesSummary)) {
            $apiParams['rules_summary'] = $rulesSummary;
        }

        if (!is_null($recomputeState)) {
            $apiParams['recompute_state'] = $recomputeState;
        }

        if (!is_null($recomputeError)) {
            $apiParams['recompute_error'] = $recomputeError;
        }

        if (!is_null($frozenFromId)) {
            $apiParams['frozen_from_id'] = $frozenFromId;
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
     * @param ?bool $active
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?Kind $kind
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?RuleMatch $ruleMatch
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesCreate(string $code, ?bool $active = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, ?Kind $kind = null, mixed $labels = null, mixed $metadata = null, ?RuleMatch $ruleMatch = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/audiences'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

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
     * What the hourly schedule runs, by hand: every active audience, unfinished
     * passes first, one shared budget. One audience failing does not stop the
     * others.
     *
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesRecomputeAll(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/audiences/recompute-all'
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
     * Every audience in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/audiences/trash/empty'
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
     * What the nightly purge does, callable by hand: every audience in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/audiences/trash/purge'
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
     * The first DELETE moves the audience into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. An
     * audience another audience asks for members of is refused (`trash_blocked`,
     * blocker `audience_in_use` with `audience_ids`) — change their rules
     * first. Its rules and members stay with it. A DELETE on a audience already
     * in the trash deletes it for good — refused while something still needs
     * it, and not for a storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}'
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
    public function audiencesAudiencesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}'
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
     * @param ?string $code
     * @param ?string $description
     * @param ?string $externalId
     * @param ?mixed $externalRefs
     * @param ?Kind $kind
     * @param ?mixed $labels
     * @param ?mixed $metadata
     * @param ?RuleMatch $ruleMatch
     * @param ?mixed $sourceData
     * @param ?string $sourceSyncedAt
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesUpdate(string $id, ?bool $active = null, ?string $code = null, ?string $description = null, ?string $externalId = null, mixed $externalRefs = null, ?Kind $kind = null, mixed $labels = null, mixed $metadata = null, ?RuleMatch $ruleMatch = null, mixed $sourceData = null, ?string $sourceSyncedAt = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($active)) {
            $apiParams['active'] = $active;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['description'] = $description;
        $apiParams['external_id'] = $externalId;

        if (!is_null($externalRefs)) {
            $apiParams['external_refs'] = $externalRefs;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

        if (!is_null($sourceData)) {
            $apiParams['source_data'] = $sourceData;
        }
        $apiParams['source_synced_at'] = $sourceSyncedAt;

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
     * Creates a static audience holding exactly who is in the active one now, so
     * a big send's list does not move. Chunked: an unfinished copy answers `done:
     * false` with the new audience's id, and a call naming it in `target_id`
     * continues.
     *
     * @param string $id
     * @param ?string $code
     * @param ?string $description
     * @param ?array $labels
     * @param ?string $targetId
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesFreeze(string $id, ?string $code = null, ?string $description = null, ?array $labels = null, ?string $targetId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/freeze'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($targetId)) {
            $apiParams['target_id'] = $targetId;
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
     * Evaluates the stored rules — or a candidate tree sent in `rules`, for a
     * form not yet saved — over the tenant's contacts and counts the matches.
     * Bounded by a short budget: when the population does not fit, the answer
     * says how many were examined and estimates the rest. Nothing is written.
     *
     * @param string $id
     * @param ?RuleMatch $ruleMatch
     * @param ?array $rules
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesPreview(string $id, ?RuleMatch $ruleMatch = null, ?array $rules = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/preview'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($ruleMatch)) {
            $apiParams['rule_match'] = $ruleMatch;
        }

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
     * Evaluates the rules over the tenant's contacts and writes who joined and
     * who left, for as long as the tenant's budget allows. An unfinished pass
     * answers `done: false` and continues on the next call. `restart: true` drops
     * an unfinished pass and starts over.
     *
     * @param string $id
     * @param ?bool $restart
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesRecompute(string $id, ?bool $restart = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/recompute'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($restart)) {
            $apiParams['restart'] = $restart;
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
     * Clears the trash marks on the audience. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function audiencesAudiencesRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/audiences/audiences/{id}/restore'
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

    /**
     * @throws RevenexxException
     * @return array
     */
    public function audiencesVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/audiences/vocabularies'
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
    public function audiencesVocabulariesGet(string $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/audiences/vocabularies/{name}'
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