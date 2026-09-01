<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\InventoriesReservationsListStatus;

class InventoriesReservations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Call this when the goods leave the building, and not before. Reserving only
     * promised them — `reserved` went up and `on_hand` did not move, because
     * the stock was still on the shelf; committing is the moment they are gone,
     * so it lowers BOTH on each stock row and writes one `shipment` booking per
     * hold, with a SIGNED negative quantity, as the ledger's record that they
     * left. It takes the whole `order_ref` and every hold still active on it:
     * there is no partial commit and no per-line id, so a part shipment means
     * reserving the parts separately in the first place. It is also final —
     * 'committed' ends the lifecycle and nothing moves a hold out of it, so goods
     * coming back are POST /inventories/restock (a new receipt), never an undo of
     * this. An order with nothing active is a 422 rather than a quiet zero,
     * because it means the hold was already released or already shipped; /release
     * answers the same situation with a 200 on purpose, since cancelling twice is
     * harmless and shipping twice is not.
     *
     * @param string $orderRef
     * @throws RevenexxException
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
     * The cancellation end of the reserve → commit | release lifecycle: it
     * takes an `order_ref`, ends every hold still active on it, gives the stock
     * back and writes a 'release' booking for each one, exactly like the expiry
     * sweeper. Idempotent: an order with nothing active answers released:0 —
     * which is why it is a 200 and not the 422 commit answers.
     *
     * @param string $orderRef
     * @throws RevenexxException
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
     * A reservation is stock promised to an `order_ref`. It is created only by
     * POST /inventories/reserve and moved only by /commit, /release and the
     * expiry sweep — there is no create, update or delete route, because the
     * lifecycle IS the API. Only an 'active' hold counts towards a stock row's
     * `reserved`; 'released' and 'committed' rows stay for the audit trail and
     * hold nothing. This is the answer to "what is this order actually holding"
     * (`?order_ref=…`) and to "what is holding this stock"
     * (`?status=active&location_id=…`) — the second is the only way to see
     * WHY a row's `reserved` is what it is, since a stock row reports the total
     * and never who asked for it. `expires_at` filters on an exact timestamp and
     * not a range, so this cannot answer "what expires today"; the deadline is
     * acted on by POST /inventories/reservations/sweep, not by reading it here.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $locationId
     * @param ?string $productId
     * @param ?string $sku
     * @param ?float $quantity
     * @param ?string $orderRef
     * @param ?InventoriesReservationsListStatus $status
     * @param ?string $expiresAt
     * @param ?string $metadata
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReservationsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $locationId = null, ?string $productId = null, ?string $sku = null, ?float $quantity = null, ?string $orderRef = null, ?InventoriesReservationsListStatus $status = null, ?string $expiresAt = null, ?string $metadata = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reservations'
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

        if (!is_null($locationId)) {
            $apiParams['location_id'] = $locationId;
        }

        if (!is_null($productId)) {
            $apiParams['product_id'] = $productId;
        }

        if (!is_null($sku)) {
            $apiParams['sku'] = $sku;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }

        if (!is_null($orderRef)) {
            $apiParams['order_ref'] = $orderRef;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($expiresAt)) {
            $apiParams['expires_at'] = $expiresAt;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
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
     * The expiry sweeper, also run by the 'expire-reservations' schedule every 15
     * minutes. Releases reservations past their own expires_at and — once
     * reservation_ttl_minutes is above 0 — reservations older than that
     * lifetime which never carried a deadline. Each release gives the stock back
     * and writes a 'release' booking, exactly like a cancellation. Idempotent: a
     * second run finds nothing.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReservationsSweep(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reservations/sweep'
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
     * A reservation is stock promised to an `order_ref`. It is created only by
     * POST /inventories/reserve and moved only by /commit, /release and the
     * expiry sweep — there is no create, update or delete route, because the
     * lifecycle IS the API. Only an 'active' hold counts towards a stock row's
     * `reserved`; 'released' and 'committed' rows stay for the audit trail and
     * hold nothing. One hold, with the three facts that are not on the order it
     * belongs to: which location it was allocated to, when it expires, and — in
     * `metadata.backordered` — how much of it was never covered by stock, which
     * is how a promise made under a permissive backorder policy stays visible
     * afterwards. The id is for reading only. Every transition acts on the whole
     * `order_ref` (/commit, /release, the sweep), so there is no route that takes
     * this id and no way to release one line of an order on its own.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Takes a hold against an `order_ref`, and plans the whole call before
     * writing anything, so a reservation that cannot be satisfied changes
     * nothing. WHICH location serves an item is not the caller's to choose: the
     * tenant's allocation_strategy decides it ('priority', walking the enabled
     * locations by their priority; 'nearest', matching ship_to against a
     * location's country; or 'single_location' for the whole order);
     * backorder_policy decides what happens when none can — refuse (422), or
     * reserve anyway and let availability go negative. expires_at defaults from
     * reservation_ttl_minutes and the sweeper enforces it.
     *
     * @param string $orderRef
     * @param ?string $expiresAt
     * @param ?array $items
     * @param ?string $locationCode
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?array $shipTo
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReserve(string $orderRef, ?string $expiresAt = null, ?array $items = null, ?string $locationCode = null, ?string $productId = null, ?float $quantity = null, ?array $shipTo = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reserve'
        );

        $apiParams = [];
        $apiParams['order_ref'] = $orderRef;
        $apiParams['expires_at'] = $expiresAt;

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;

        if (!is_null($shipTo)) {
            $apiParams['ship_to'] = $shipTo;
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
}