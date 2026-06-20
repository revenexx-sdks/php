<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\LocationType;

class Inventories extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @param array $items
     * @param string $reason
     * @param ?string $locationCode
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesAdjust(array $items, string $reason, ?string $locationCode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/adjust'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['reason'] = $reason;
        $apiParams['location_code'] = $locationCode;

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
     * @param array $items
     * @param ?string $locationCode
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesAvailability(array $items, ?string $locationCode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/availability'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['location_code'] = $locationCode;

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
     * @param string $orderRef
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesCommit(string $orderRef): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/commit'
        );

        $apiParams = [];
        $apiParams['order_ref'] = $orderRef;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/locations'
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
     * @param string $code
     * @param string $name
     * @param ?array $address
     * @param ?bool $enabled
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?int $priority
     * @param ?LocationType $type
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsCreate(string $code, string $name, ?array $address = null, ?bool $enabled = null, ?array $labels = null, ?array $metadata = null, ?int $priority = null, ?LocationType $type = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/locations'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['address'] = $address;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['labels'] = $labels;
        $apiParams['metadata'] = $metadata;

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/locations/defaults'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/locations/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/locations/{id}'
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
     * @param ?array $address
     * @param ?string $code
     * @param ?bool $enabled
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $priority
     * @param ?LocationType $type
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesLocationsUpdate(string $id, ?array $address = null, ?string $code = null, ?bool $enabled = null, ?array $labels = null, ?array $metadata = null, ?string $name = null, ?int $priority = null, ?LocationType $type = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/locations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['address'] = $address;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }
        $apiParams['labels'] = $labels;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesMovementsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/movements'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesMovementsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/movements/{id}'
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
     * @param array $items
     * @param ?string $locationCode
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesReceive(array $items, ?string $locationCode = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/receive'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['location_code'] = $locationCode;
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
     * @param string $orderRef
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesRelease(string $orderRef): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/release'
        );

        $apiParams = [];
        $apiParams['order_ref'] = $orderRef;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesReservationsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reservations'
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesReservationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/reservations/{id}'
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
     * @param array $items
     * @param string $orderRef
     * @param ?string $expiresAt
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesReserve(array $items, string $orderRef, ?string $expiresAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reserve'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['order_ref'] = $orderRef;
        $apiParams['expires_at'] = $expiresAt;

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
     * @param array $items
     * @param ?string $locationCode
     * @param ?string $orderRef
     * @param ?string $reason
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesRestock(array $items, ?string $locationCode = null, ?string $orderRef = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/restock'
        );

        $apiParams = [];
        $apiParams['items'] = $items;
        $apiParams['location_code'] = $locationCode;
        $apiParams['order_ref'] = $orderRef;
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesStockList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/stock'
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
     * @param string $locationId
     * @param ?array $metadata
     * @param ?float $onHand
     * @param ?string $productId
     * @param ?float $reorderPoint
     * @param ?float $reserved
     * @param ?string $sku
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesStockCreate(string $locationId, ?array $metadata = null, ?float $onHand = null, ?string $productId = null, ?float $reorderPoint = null, ?float $reserved = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/stock'
        );

        $apiParams = [];
        $apiParams['location_id'] = $locationId;
        $apiParams['metadata'] = $metadata;

        if (!is_null($onHand)) {
            $apiParams['on_hand'] = $onHand;
        }
        $apiParams['product_id'] = $productId;
        $apiParams['reorder_point'] = $reorderPoint;

        if (!is_null($reserved)) {
            $apiParams['reserved'] = $reserved;
        }
        $apiParams['sku'] = $sku;

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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesStockDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/stock/{id}'
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
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesStockGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/stock/{id}'
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
     * @param ?string $locationId
     * @param ?array $metadata
     * @param ?float $onHand
     * @param ?string $productId
     * @param ?float $reorderPoint
     * @param ?float $reserved
     * @param ?string $sku
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function inventoriesStockUpdate(string $id, ?string $locationId = null, ?array $metadata = null, ?float $onHand = null, ?string $productId = null, ?float $reorderPoint = null, ?float $reserved = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/stock/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($locationId)) {
            $apiParams['location_id'] = $locationId;
        }
        $apiParams['metadata'] = $metadata;

        if (!is_null($onHand)) {
            $apiParams['on_hand'] = $onHand;
        }
        $apiParams['product_id'] = $productId;
        $apiParams['reorder_point'] = $reorderPoint;

        if (!is_null($reserved)) {
            $apiParams['reserved'] = $reserved;
        }
        $apiParams['sku'] = $sku;

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