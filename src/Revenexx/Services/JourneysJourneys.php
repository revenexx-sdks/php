<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\TriggerKind;

class JourneysJourneys extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every journey of this tenant, without the trash unless `trashed` asks for
     * it. Filter `?status=live`, `?campaign_ref=` for the journeys a campaign
     * claimed (the calendar reads `live_from`/`live_until`).
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?Trashed $trashed
     * @param ?string $id
     * @param ?string $name
     * @param ?string $description
     * @param ?string $status
     * @param ?string $triggerKind
     * @param ?string $reenrol
     * @param ?string $reenrolGapDays
     * @param ?string $campaignRef
     * @param ?string $templateCode
     * @param ?string $currentVersion
     * @param ?string $draftVersion
     * @param ?string $triggerRanOn
     * @param ?string $enrolledCount
     * @param ?string $activeCount
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysList(?int $limit = null, ?int $offset = null, ?string $order = null, ?Trashed $trashed = null, ?string $id = null, ?string $name = null, ?string $description = null, ?string $status = null, ?string $triggerKind = null, ?string $reenrol = null, ?string $reenrolGapDays = null, ?string $campaignRef = null, ?string $templateCode = null, ?string $currentVersion = null, ?string $draftVersion = null, ?string $triggerRanOn = null, ?string $enrolledCount = null, ?string $activeCount = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/journeys'
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

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($triggerKind)) {
            $apiParams['trigger_kind'] = $triggerKind;
        }

        if (!is_null($reenrol)) {
            $apiParams['reenrol'] = $reenrol;
        }

        if (!is_null($reenrolGapDays)) {
            $apiParams['reenrol_gap_days'] = $reenrolGapDays;
        }

        if (!is_null($campaignRef)) {
            $apiParams['campaign_ref'] = $campaignRef;
        }

        if (!is_null($templateCode)) {
            $apiParams['template_code'] = $templateCode;
        }

        if (!is_null($currentVersion)) {
            $apiParams['current_version'] = $currentVersion;
        }

        if (!is_null($draftVersion)) {
            $apiParams['draft_version'] = $draftVersion;
        }

        if (!is_null($triggerRanOn)) {
            $apiParams['trigger_ran_on'] = $triggerRanOn;
        }

        if (!is_null($enrolledCount)) {
            $apiParams['enrolled_count'] = $enrolledCount;
        }

        if (!is_null($activeCount)) {
            $apiParams['active_count'] = $activeCount;
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
     * Creates the journey as a draft with version 1. `steps` and `entry` may come
     * along; otherwise the draft starts empty. The answer carries `problems` —
     * what stands between the draft and going live.
     *
     * @param string $name
     * @param ?string $campaignRef
     * @param ?string $currency
     * @param ?string $description
     * @param ?string $entry
     * @param ?mixed $goalConfig
     * @param ?mixed $metadata
     * @param ?bool $reenrol
     * @param ?int $reenrolGapDays
     * @param ?array $steps
     * @param ?mixed $triggerConfig
     * @param ?TriggerKind $triggerKind
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysCreate(string $name, ?string $campaignRef = null, ?string $currency = null, ?string $description = null, ?string $entry = null, mixed $goalConfig = null, mixed $metadata = null, ?bool $reenrol = null, ?int $reenrolGapDays = null, ?array $steps = null, mixed $triggerConfig = null, ?TriggerKind $triggerKind = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/journeys'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['campaign_ref'] = $campaignRef;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;
        $apiParams['entry'] = $entry;

        if (!is_null($goalConfig)) {
            $apiParams['goal_config'] = $goalConfig;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($reenrol)) {
            $apiParams['reenrol'] = $reenrol;
        }
        $apiParams['reenrol_gap_days'] = $reenrolGapDays;

        if (!is_null($steps)) {
            $apiParams['steps'] = $steps;
        }

        if (!is_null($triggerConfig)) {
            $apiParams['trigger_config'] = $triggerConfig;
        }

        if (!is_null($triggerKind)) {
            $apiParams['trigger_kind'] = $triggerKind;
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
     * Every journey in the trash is deleted for good on its own terms. One that
     * something still blocks stays in the trash and is named with its reason, so
     * a partial success says exactly what remained. Not for a storefront contact.
     *
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysEmptyTrash(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/journeys/trash/empty'
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
     * What the nightly purge does, callable by hand: every journey in the trash
     * for longer than the tenant trash retention (90 days unless the tenant set
     * another) is deleted for good through the same rules as a second delete. A
     * blocked one stays and carries its reason. When the retention cannot be
     * read, nothing is deleted. Also the cron schedule.
     *
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysPurge(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/journeys/journeys/trash/purge'
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
     * The first DELETE moves the journey into the trash: it stays, with
     * everything hanging off it, and counts nowhere until it is restored. Only a
     * draft that never went live goes into the trash; a journey people have been
     * through is refused (`trash_blocked`, blocker `journey_published`) —
     * archive it instead. A DELETE on a journey already in the trash deletes it
     * for good — refused while something still needs it, and not for a
     * storefront contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}'
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
    public function journeysJourneysGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}'
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
     * Name, description, re-enrolment, campaign. The trigger and the goal change
     * only while the journey is not live. Status changes go through publish,
     * pause, resume and archive.
     *
     * @param string $id
     * @param ?string $campaignRef
     * @param ?string $currency
     * @param ?string $description
     * @param ?mixed $goalConfig
     * @param ?mixed $metadata
     * @param ?string $name
     * @param ?bool $reenrol
     * @param ?int $reenrolGapDays
     * @param ?mixed $triggerConfig
     * @param ?TriggerKind $triggerKind
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysUpdate(string $id, ?string $campaignRef = null, ?string $currency = null, ?string $description = null, mixed $goalConfig = null, mixed $metadata = null, ?string $name = null, ?bool $reenrol = null, ?int $reenrolGapDays = null, mixed $triggerConfig = null, ?TriggerKind $triggerKind = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['campaign_ref'] = $campaignRef;

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }
        $apiParams['description'] = $description;

        if (!is_null($goalConfig)) {
            $apiParams['goal_config'] = $goalConfig;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($reenrol)) {
            $apiParams['reenrol'] = $reenrol;
        }
        $apiParams['reenrol_gap_days'] = $reenrolGapDays;

        if (!is_null($triggerConfig)) {
            $apiParams['trigger_config'] = $triggerConfig;
        }

        if (!is_null($triggerKind)) {
            $apiParams['trigger_kind'] = $triggerKind;
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
     * Nobody enters again; everyone still inside leaves with the reason
     * journey_archived (up to 500 at once, the rest with the next runs).
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysArchive(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/archive'
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
     * For a test or for support: the person enters the live version now, under
     * the same re-enrolment rules as a trigger.
     *
     * @param string $id
     * @param ?string $contactId
     * @param ?array $data
     * @param ?string $email
     * @param ?string $key
     * @param ?string $market
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysEnrol(string $id, ?string $contactId = null, ?array $data = null, ?string $email = null, ?string $key = null, ?string $market = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/enrol'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($market)) {
            $apiParams['market'] = $market;
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
     * What the canvas draws: the steps and edges of one version, the trigger, the
     * goal, and the problems that would refuse publishing.
     *
     * @param string $id
     * @param ?string $version
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysGraph(string $id, ?string $version = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/graph'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($version)) {
            $apiParams['version'] = $version;
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
     * Writes the draft, creating it as the next version when the journey has none
     * — a live version is never edited. A graph with problems is saved;
     * publishing refuses it.
     *
     * @param string $id
     * @param array $steps
     * @param ?string $entry
     * @param ?string $notes
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysSaveGraph(string $id, array $steps, ?string $entry = null, ?string $notes = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/graph'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['steps'] = $steps;
        $apiParams['entry'] = $entry;

        if (!is_null($notes)) {
            $apiParams['notes'] = $notes;
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
     * Nobody enters, nobody moves; everyone stays at their step. Waits that pass
     * during the pause run after resume, in the job's budgeted chunks.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysPause(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/pause'
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
     * Checks the draft, the trigger and the goal; makes the draft the live
     * version and retires the one before. Running enrollments finish on their own
     * version. A paused journey stays paused.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysPublish(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/publish'
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
     * Per step: waiting now, entered, passed, sent, skipped and why, failed,
     * exited and why, clicked, goal reached, revenue. Per version: enrolled,
     * active, completed, goal reached, exited, failed, conversion. `step_bars`
     * and `exit_bars` are the same figures as bar-list rows in the language of
     * Accept-Language: who entered each step with the drop-off, and why people
     * left.
     *
     * @param string $id
     * @param ?string $version
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysReport(string $id, ?string $version = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/report'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($version)) {
            $apiParams['version'] = $version;
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
     * Clears the trash marks on the journey. Its parts were never touched, so
     * they come back with it, in the state it was in. The same right as deleting.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/restore'
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
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysResume(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/resume'
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
     * The step job, limited to one live journey — what the Cockpit offers on a
     * test journey instead of waiting for the next five-minute tick.
     *
     * @param string $id
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysRun(string $id, array $data): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/run'
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
     * Entries and reached goals per day over all versions, in the tenant time
     * zone, from the first entry to the last with every day between, at most the
     * latest 60 days.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function journeysJourneysTimeline(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/journeys/journeys/{id}/timeline'
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
}