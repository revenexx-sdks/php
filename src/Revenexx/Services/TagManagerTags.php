<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\TagManagerTagsCreateKind;
use Revenexx\Enums\Load;
use Revenexx\Enums\TagManagerTriggersCreateKind;
use Revenexx\Enums\TagManagerVariablesCreateKind;

class TagManagerTags extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Every registry key a marketing tag may name, with its label, category, the
     * consent catalogue vendor code it usually discloses as (`vendor`, repeated
     * as `vendor_key` for looking up the catalogue logo), its hosts, the JSON
     * Schema of its configuration and its default event map. Every configuration
     * property carries `title` and `description` as English strings and `x-title`
     * / `x-description` as { de, en } for the tag form.
     *
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerRegistryList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/registry'
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
     * Every marketing tag of this tenant visible in the requested market, paged.
     * Equality filters on plain columns; jsonb columns are answered but not
     * filterable.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $description
     * @param ?string $kind
     * @param ?string $registryKey
     * @param ?string $scriptUrl
     * @param ?string $vendorCode
     * @param ?string $purposeCode
     * @param ?string $load
     * @param ?bool $isActive
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $description = null, ?string $kind = null, ?string $registryKey = null, ?string $scriptUrl = null, ?string $vendorCode = null, ?string $purposeCode = null, ?string $load = null, ?bool $isActive = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/tags'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($registryKey)) {
            $apiParams['registry_key'] = $registryKey;
        }

        if (!is_null($scriptUrl)) {
            $apiParams['script_url'] = $scriptUrl;
        }

        if (!is_null($vendorCode)) {
            $apiParams['vendor_code'] = $vendorCode;
        }

        if (!is_null($purposeCode)) {
            $apiParams['purpose_code'] = $purposeCode;
        }

        if (!is_null($load)) {
            $apiParams['load'] = $load;
        }

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Create one marketing tag. Every rule is checked and every broken one is
     * named in the 422.
     *
     * @param ?array $chainedVendorCodes
     * @param ?string $code
     * @param ?array $config
     * @param ?string $description
     * @param ?array $eventMap
     * @param ?bool $isActive
     * @param ?TagManagerTagsCreateKind $kind
     * @param ?Load $load
     * @param ?string $name
     * @param ?string $purposeCode
     * @param ?string $registryKey
     * @param ?string $scriptUrl
     * @param ?string $vendorCode
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsCreate(?array $chainedVendorCodes = null, ?string $code = null, ?array $config = null, ?string $description = null, ?array $eventMap = null, ?bool $isActive = null, ?TagManagerTagsCreateKind $kind = null, ?Load $load = null, ?string $name = null, ?string $purposeCode = null, ?string $registryKey = null, ?string $scriptUrl = null, ?string $vendorCode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/tags'
        );

        $apiParams = [];

        if (!is_null($chainedVendorCodes)) {
            $apiParams['chained_vendor_codes'] = $chainedVendorCodes;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($config)) {
            $apiParams['config'] = $config;
        }
        $apiParams['description'] = $description;

        if (!is_null($eventMap)) {
            $apiParams['event_map'] = $eventMap;
        }

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($load)) {
            $apiParams['load'] = $load;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($purposeCode)) {
            $apiParams['purpose_code'] = $purposeCode;
        }
        $apiParams['registry_key'] = $registryKey;
        $apiParams['script_url'] = $scriptUrl;

        if (!is_null($vendorCode)) {
            $apiParams['vendor_code'] = $vendorCode;
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
     * Delete one marketing tag.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/tags/{id}'
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
     * One marketing tag by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/tags/{id}'
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
     * Edit one marketing tag. The row it would leave is checked whole.
     *
     * @param string $id
     * @param ?array $chainedVendorCodes
     * @param ?string $code
     * @param ?array $config
     * @param ?string $description
     * @param ?array $eventMap
     * @param ?bool $isActive
     * @param ?TagManagerTagsCreateKind $kind
     * @param ?Load $load
     * @param ?string $name
     * @param ?string $purposeCode
     * @param ?string $registryKey
     * @param ?string $scriptUrl
     * @param ?string $vendorCode
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsUpdate(string $id, ?array $chainedVendorCodes = null, ?string $code = null, ?array $config = null, ?string $description = null, ?array $eventMap = null, ?bool $isActive = null, ?TagManagerTagsCreateKind $kind = null, ?Load $load = null, ?string $name = null, ?string $purposeCode = null, ?string $registryKey = null, ?string $scriptUrl = null, ?string $vendorCode = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/tags/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($chainedVendorCodes)) {
            $apiParams['chained_vendor_codes'] = $chainedVendorCodes;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($config)) {
            $apiParams['config'] = $config;
        }
        $apiParams['description'] = $description;

        if (!is_null($eventMap)) {
            $apiParams['event_map'] = $eventMap;
        }

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($load)) {
            $apiParams['load'] = $load;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($purposeCode)) {
            $apiParams['purpose_code'] = $purposeCode;
        }
        $apiParams['registry_key'] = $registryKey;
        $apiParams['script_url'] = $scriptUrl;

        if (!is_null($vendorCode)) {
            $apiParams['vendor_code'] = $vendorCode;
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
     * The triggers attached to one marketing tag. A tag with none loads on every
     * page.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsTriggersList(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/tags/{id}/triggers'
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
     * Attach one trigger to one marketing tag. A pair is attached once.
     *
     * @param string $id
     * @param string $triggerId
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsTriggersAttach(string $id, string $triggerId): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/tags/{id}/triggers'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['trigger_id'] = $triggerId;

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
     * Remove one trigger from one marketing tag.
     *
     * @param string $id
     * @param string $triggerId
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTagsTriggersDetach(string $id, string $triggerId): array
    {
        $apiPath = str_replace(
            ['{id}', '{trigger_id}'],
            [$id, $triggerId],
            '/v1/tag-manager/tags/{id}/triggers/{trigger_id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['trigger_id'] = $triggerId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Every trigger of this tenant visible in the requested market, paged.
     * Equality filters on plain columns; jsonb columns are answered but not
     * filterable.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $kind
     * @param ?string $eventName
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTriggersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $kind = null, ?string $eventName = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/triggers'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($eventName)) {
            $apiParams['event_name'] = $eventName;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Create one trigger. Every rule is checked and every broken one is named in
     * the 422.
     *
     * @param ?string $code
     * @param ?array $conditions
     * @param ?string $eventName
     * @param ?TagManagerTriggersCreateKind $kind
     * @param ?string $name
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTriggersCreate(?string $code = null, ?array $conditions = null, ?string $eventName = null, ?TagManagerTriggersCreateKind $kind = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/triggers'
        );

        $apiParams = [];

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
        }
        $apiParams['event_name'] = $eventName;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
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
     * Delete one trigger.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTriggersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/triggers/{id}'
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
     * One trigger by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTriggersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/triggers/{id}'
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
     * Edit one trigger. The row it would leave is checked whole.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $conditions
     * @param ?string $eventName
     * @param ?TagManagerTriggersCreateKind $kind
     * @param ?string $name
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerTriggersUpdate(string $id, ?string $code = null, ?array $conditions = null, ?string $eventName = null, ?TagManagerTriggersCreateKind $kind = null, ?string $name = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/triggers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
        }
        $apiParams['event_name'] = $eventName;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
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
     * Every variable of this tenant visible in the requested market, paged.
     * Equality filters on plain columns; jsonb columns are answered but not
     * filterable.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $kind
     * @param ?string $xpath
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVariablesList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $kind = null, ?string $xpath = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/variables'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($xpath)) {
            $apiParams['path'] = $xpath;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
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
     * Create one variable. Every rule is checked and every broken one is named in
     * the 422.
     *
     * @param ?string $code
     * @param ?mixed $constantValue
     * @param ?TagManagerVariablesCreateKind $kind
     * @param ?string $name
     * @param ?string $xpath
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVariablesCreate(?string $code = null, mixed $constantValue = null, ?TagManagerVariablesCreateKind $kind = null, ?string $name = null, ?string $xpath = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/variables'
        );

        $apiParams = [];

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($constantValue)) {
            $apiParams['constant_value'] = $constantValue;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['path'] = $xpath;

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
     * Delete one variable.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVariablesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/variables/{id}'
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
     * One variable by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVariablesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/variables/{id}'
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
     * Edit one variable. The row it would leave is checked whole.
     *
     * @param string $id
     * @param ?string $code
     * @param ?mixed $constantValue
     * @param ?TagManagerVariablesCreateKind $kind
     * @param ?string $name
     * @param ?string $xpath
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVariablesUpdate(string $id, ?string $code = null, mixed $constantValue = null, ?TagManagerVariablesCreateKind $kind = null, ?string $name = null, ?string $xpath = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/tag-manager/variables/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($constantValue)) {
            $apiParams['constant_value'] = $constantValue;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['path'] = $xpath;

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
     * The event names of the theme event contract version this app supports
     * (theme-events/1), which a trigger and an event map may name, plus the value
     * sets of tags, triggers and variables.
     *
     * @throws RevenexxException
     * @return array
     */
    public function tagManagerVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/tag-manager/vocabularies'
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
}