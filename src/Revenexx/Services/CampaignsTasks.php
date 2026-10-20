<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;

class CampaignsTasks extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List campaign tasks
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $campaignId
     * @param ?string $title
     * @param ?string $notes
     * @param ?string $assignee
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTasksList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $campaignId = null, ?string $title = null, ?string $notes = null, ?string $assignee = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/tasks'
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

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }

        if (!is_null($title)) {
            $apiParams['title'] = $title;
        }

        if (!is_null($notes)) {
            $apiParams['notes'] = $notes;
        }

        if (!is_null($assignee)) {
            $apiParams['assignee'] = $assignee;
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
     * @param string $campaignId
     * @param string $title
     * @param ?string $assignee
     * @param ?string $doneAt
     * @param ?string $dueAt
     * @param ?string $notes
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTasksCreate(string $campaignId, string $title, ?string $assignee = null, ?string $doneAt = null, ?string $dueAt = null, ?string $notes = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/campaigns/tasks'
        );

        $apiParams = [];
        $apiParams['campaign_id'] = $campaignId;
        $apiParams['title'] = $title;
        $apiParams['assignee'] = $assignee;
        $apiParams['done_at'] = $doneAt;
        $apiParams['due_at'] = $dueAt;
        $apiParams['notes'] = $notes;

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
    public function campaignsTasksDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/tasks/{id}'
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
    public function campaignsTasksGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/tasks/{id}'
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
     * @param ?string $assignee
     * @param ?string $campaignId
     * @param ?string $doneAt
     * @param ?string $dueAt
     * @param ?string $notes
     * @param ?string $title
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTasksUpdate(string $id, ?string $assignee = null, ?string $campaignId = null, ?string $doneAt = null, ?string $dueAt = null, ?string $notes = null, ?string $title = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/tasks/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['assignee'] = $assignee;

        if (!is_null($campaignId)) {
            $apiParams['campaign_id'] = $campaignId;
        }
        $apiParams['done_at'] = $doneAt;
        $apiParams['due_at'] = $dueAt;
        $apiParams['notes'] = $notes;

        if (!is_null($title)) {
            $apiParams['title'] = $title;
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
     * Stamps done_at now. A task already done keeps its first stamp.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTasksComplete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/tasks/{id}/complete'
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
     * @throws RevenexxException
     * @return array
     */
    public function campaignsTasksReopen(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/campaigns/tasks/{id}/reopen'
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