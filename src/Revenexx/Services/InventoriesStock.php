<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\InventoriesMovementsListType;
use Revenexx\Enums\InventoriesVocabulariesGetName;

class InventoriesStock extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The batch correction route — a stocktake, breakage, shrinkage — and the
     * manual way `on_hand` is ever put right. Quantities are SIGNED: a positive
     * one adds to the balance, a negative one takes it away, and neither is
     * written onto the row directly. Each item is booked into the movements
     * ledger as an `adjustment` and the balance follows, so a correction leaves a
     * record of who changed what and why instead of a number that silently
     * differs from yesterday's. A reason is mandatory unless
     * movement_reason_required is 'none'.
     *
     * @param ?array $items
     * @param ?string $locationCode
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $reason
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesAdjust(?array $items = null, ?string $locationCode = null, ?string $productId = null, ?float $quantity = null, ?string $reason = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/adjust'
        );

        $apiParams = [];

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['reason'] = $reason;
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
     * THE stock call of this app, and a batch one: name any number of items and
     * each comes back with `on_hand`, `reserved` and the derived `available`
     * (their difference, computed on read and stored nowhere), summed across the
     * locations in scope and broken down per location, plus `orderable` —
     * whether this much of it can be promised at this moment. An item this app
     * has never seen is NOT an error: it comes back tracked:false, and the
     * storefront decides whether an untracked item sells freely. It is also the
     * most customised surface this product has in the field. A tenant whose stock
     * really lives in an ERP — SAP live stock is the ordinary case, not the
     * exotic one — replaces exactly this one capability, 1:1, with a custom app
     * through the gateway's capability override, while every other route here
     * keeps doing the stock-keeping CRUD unchanged. That is why the request and
     * response shapes below read as a contract to be implemented rather than as
     * an implementation detail: whatever ends up answering this path has to
     * answer in these terms.
     *
     * @param ?array $items
     * @param ?string $locationCode
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesAvailability(?array $items = null, ?string $locationCode = null, ?string $productId = null, ?float $quantity = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/availability'
        );

        $apiParams = [];

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
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
     * The movements ledger, read end to end. Every stock change this app has ever
     * made is a booking row in it — a receipt, a correction, a hold, a release,
     * a shipment, a return — which is what lets one list be an audit trail and
     * an event feed at the same time: these are the rows the
     * `stock_movement.created` event carries, so a consumer that missed an event
     * catches up by paging here. Append-only: the ledger has no update and no
     * delete, because a correction is another booking. `order=created_at.desc` is
     * the feed order.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $locationId
     * @param ?string $productId
     * @param ?string $sku
     * @param ?InventoriesMovementsListType $type
     * @param ?float $quantity
     * @param ?string $orderRef
     * @param ?string $reason
     * @param ?string $metadata
     * @param ?string $createdAt
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesMovementsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $locationId = null, ?string $productId = null, ?string $sku = null, ?InventoriesMovementsListType $type = null, ?float $quantity = null, ?string $orderRef = null, ?string $reason = null, ?string $metadata = null, ?string $createdAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/movements'
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

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($quantity)) {
            $apiParams['quantity'] = $quantity;
        }

        if (!is_null($orderRef)) {
            $apiParams['order_ref'] = $orderRef;
        }

        if (!is_null($reason)) {
            $apiParams['reason'] = $reason;
        }

        if (!is_null($metadata)) {
            $apiParams['metadata'] = $metadata;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
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
     * A movement is one booking row in the ledger, and the ledger is append-only:
     * there is no update and no delete, because a correction is another booking.
     * `quantity` is SIGNED and its sign follows the `type` — a receipt books +5
     * and the reserve that promises those goods books −5, even though the
     * reservation it created carries +5 as a positive hold. GET
     * /inventories/vocabularies/movement-types is the list of types with the
     * words for them. A booking says what changed, not what the balance became:
     * it carries no running total, so the row's story is read by listing the
     * ledger for that location and item rather than by fetching one id.
     * `location_id` is a plain uuid and not a foreign key, so a booking outlives
     * the location it was made at and this route will happily hand back one whose
     * location no longer resolves — that is the audit trail doing its job, not
     * a broken row. Fixing a wrong booking is another booking (POST
     * /inventories/adjust); nothing here can be edited or removed.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Books a delivery into the receiving location (the caller's location_code,
     * else the default_location_code setting), creating the stock row if the item
     * is new. A reason is optional unless movement_reason_required is 'all'.
     * Takes a batch or one item inline.
     *
     * @param ?array $items
     * @param ?string $locationCode
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $reason
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReceive(?array $items = null, ?string $locationCode = null, ?string $productId = null, ?float $quantity = null, ?string $reason = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/receive'
        );

        $apiParams = [];

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['reason'] = $reason;
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
     * The replenishment worklist: the stock rows that have run down far enough
     * that somebody has to order more, in one list rather than as a query a
     * caller has to build. Computed on read, so it is never stale: a row alerts
     * when available (on_hand − reserved) has fallen to or below its own
     * reorder_point, or the reorder_point_default setting when it carries none. A
     * point of 0 never alerts. Answers enabled:false with an empty list when
     * reorder_alert_enabled is off — a tenant replenishing from an ERP should
     * not be told twice.
     *
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReorderAlerts(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reorder-alerts'
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
     * Publishes `stock_level.low` on the event bus for every row GET
     * /inventories/reorder-alerts currently lists, so replenishment can be driven
     * by a subscriber instead of by somebody refreshing that page. Also runs
     * hourly as the `reorder-scan` schedule; this route is for driving it on
     * demand. The event id is derived from the stock row and the day, so a re-run
     * — a second click, a retried cron tick — publishes nothing new and
     * returns the ids the first run produced. Nothing is written to the app's own
     * data: this reads the same figures the alerts list computes and hands them
     * to the bus. Answers enabled:false without publishing when
     * reorder_alert_enabled is off.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesReorderScan(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/reorder-alerts/scan'
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
     * Whether a return rejoins sellable stock follows restock_on_return_default,
     * overridable per call with 'restock'. When the answer is no the response
     * says restocked:false and nothing moves — there is no movement to book,
     * because no stock moved. That branch is why this route answers 200 and its
     * sibling `receive` answers 201: a restock may legitimately create nothing.
     *
     * @param ?array $items
     * @param ?string $locationCode
     * @param ?string $orderRef
     * @param ?string $productId
     * @param ?float $quantity
     * @param ?string $reason
     * @param ?bool $restock
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesRestock(?array $items = null, ?string $locationCode = null, ?string $orderRef = null, ?string $productId = null, ?float $quantity = null, ?string $reason = null, ?bool $restock = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/restock'
        );

        $apiParams = [];

        if (!is_null($items)) {
            $apiParams['items'] = $items;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['order_ref'] = $orderRef;
        $apiParams['product_id'] = $productId;
        $apiParams['quantity'] = $quantity;
        $apiParams['reason'] = $reason;
        $apiParams['restock'] = $restock;
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
     * A stock level is ONE item at ONE location, and it carries two numbers,
     * neither of which is the sellable one: `on_hand` is what is physically there
     * INCLUDING everything already promised, and `reserved` is what has been
     * promised — it never reduces `on_hand`. What may still be sold is their
     * difference, and it is derived on read and never stored, so there is no
     * `available` column to read, filter or order by. This is the operator's view
     * — the whole book, filtered by location or by item — not the shop's: a
     * storefront asking "can I sell five of this" wants POST
     * /inventories/availability, which sums an item across locations and answers
     * `orderable` instead of leaving the caller to subtract. Two things this list
     * will not do: it has no range filters, so "everything running low" is GET
     * /inventories/reorder-alerts and not a query here; and it does not promise
     * one row per item per location — no unique index enforces that. POST
     * /inventories/stock refuses a duplicate with a 409, but that is a check and
     * not a constraint, so a row written past it, or one that predates the guard,
     * still splits an item's balance in two, and the write routes find and update
     * whichever of them the database returns first.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $locationId
     * @param ?string $productId
     * @param ?string $sku
     * @param ?float $onHand
     * @param ?float $reserved
     * @param ?float $reorderPoint
     * @param ?string $metadata
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesStockList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $locationId = null, ?string $productId = null, ?string $sku = null, ?float $onHand = null, ?float $reserved = null, ?float $reorderPoint = null, ?string $metadata = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/stock'
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

        if (!is_null($onHand)) {
            $apiParams['on_hand'] = $onHand;
        }

        if (!is_null($reserved)) {
            $apiParams['reserved'] = $reserved;
        }

        if (!is_null($reorderPoint)) {
            $apiParams['reorder_point'] = $reorderPoint;
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
     * Registers an item at a location. The row is born at ZERO and never gets a
     * balance from this call: `on_hand` and `reserved` are NOT accepted, because
     * they are the running total of the movements ledger, so an opening balance
     * is a receipt (POST /inventories/receive) rather than a field here, and the
     * only thing that ever moves either number afterwards is another booking.
     * What this row carries is its identity (location + `product_id`/`sku`), its
     * `reorder_point` and its metadata. `location_id` is the only field a create
     * cannot omit; every other column is optional or defaulted by the database.
     * The one rule that is a CHECK rather than a column is that a row has to
     * identify its item, so `product_id` or `sku` has to be there as well. Mostly
     * you do not need this route at all — every stock call creates the row it
     * is missing — and a second row for an item this location already tracks is
     * answered 409: no unique index enforces one row per item per location, so
     * that row would split the item's balance across two rows the write routes
     * cannot tell apart, each of them updating whichever the database returns
     * first. That guard is a check before the insert and not a constraint, so it
     * closes a double click or a re-run import and does not claim to close a race
     * between two simultaneous creates.
     *
     * @param string $locationId
     * @param ?array $metadata
     * @param ?string $productId
     * @param ?float $reorderPoint
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesStockCreate(string $locationId, ?array $metadata = null, ?string $productId = null, ?float $reorderPoint = null, ?string $sku = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/stock'
        );

        $apiParams = [];
        $apiParams['location_id'] = $locationId;
        $apiParams['metadata'] = $metadata;
        $apiParams['product_id'] = $productId;
        $apiParams['reorder_point'] = $reorderPoint;
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
     * Stops tracking one item at one location. A stock level is ONE item at ONE
     * location, and it carries two numbers, neither of which is the sellable one:
     * `on_hand` is what is physically there INCLUDING everything already
     * promised, and `reserved` is what has been promised — it never reduces
     * `on_hand`. What may still be sold is their difference, and it is derived on
     * read and never stored, so there is no `available` column to read, filter or
     * order by. A deleted balance is not recoverable: the ledger is the audit
     * trail, not the source of truth, and nothing in this app ever replays it to
     * rebuild a number — so the next receipt for the same item here creates a
     * FRESH row at zero, standing next to movements that say otherwise. That used
     * to be a trap a caller discovered afterwards. It is a stated property now,
     * because the route REFUSES while the row still holds anything, and answers
     * 409 with what it holds. The two things that block are the location delete's
     * two, asked of one row. A reservation still `active` against this item at
     * this location is the sharper one: /release and /commit look their stock row
     * up by (location, item) on the very next call and would find nothing, so the
     * hold would lower no `reserved` and /commit would book the whole quantity as
     * a shortfall — orphaned immediately rather than eventually. `on_hand`
     * above zero is the stronger one: deleting a LOCATION at least meant "close
     * this warehouse" and took the balances as a side effect of the cascade,
     * while this row IS the balance, so the delete can only ever mean "no longer
     * tracked here" — true once the number is zero and a lie while it is not.
     * POST /inventories/stock/{id}/adjust to zero is the operation that makes it
     * true, and it BOOKS the movement, so the stock leaves through the ledger
     * instead of vanishing with the row. Nothing points at it by foreign key, so
     * the database takes nothing else with it. History therefore never blocks and
     * is never deleted — the ledger is keyed on (location, item) and never on
     * this id, so its bookings survive a row that is gone, BY DESIGN, exactly as
     * they survive a location that is gone.
     *
     * @param string $id
     * @throws RevenexxException
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
     * A stock level is ONE item at ONE location, and it carries two numbers,
     * neither of which is the sellable one: `on_hand` is what is physically there
     * INCLUDING everything already promised, and `reserved` is what has been
     * promised — it never reduces `on_hand`. What may still be sold is their
     * difference, and it is derived on read and never stored, so there is no
     * `available` column to read, filter or order by. Read it to see one item's
     * position at one place, and to get the id the two row-scoped routes take:
     * POST /inventories/stock/{id}/adjust corrects this balance, and GET
     * /inventories/reorder-alerts reports it by this id. What it does not answer
     * is how the balance got here — that is GET /inventories/movements filtered
     * by the location and item on this row, because a movement points at
     * (location, item) and never at a stock row id.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Partial update of everything on the row EXCEPT its balance: reorder_point,
     * metadata, identity. on_hand and reserved are dropped from the body —
     * every stock change is a movement, and a body carrying nothing else is
     * answered 422 with the route that was meant (POST
     * /inventories/stock/{id}/adjust).
     *
     * @param string $id
     * @param ?string $locationId
     * @param ?array $metadata
     * @param ?string $productId
     * @param ?float $reorderPoint
     * @param ?string $sku
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesStockUpdate(string $id, ?string $locationId = null, ?array $metadata = null, ?string $productId = null, ?float $reorderPoint = null, ?string $sku = null): array
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
        $apiParams['product_id'] = $productId;
        $apiParams['reorder_point'] = $reorderPoint;
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

    /**
     * Corrects the balance of ONE stock row, and only that one. It is the
     * row-scoped twin of POST /inventories/adjust: the row already knows its
     * location and item, so a caller owes nothing but a SIGNED delta on `on_hand`
     * — positive to add, negative to take away — and a reason for it. The
     * delta is not written onto the balance either; it is booked into the
     * movements ledger as an `adjustment` and the balance follows, which is why
     * the answer hands back the row at its new value instead of an
     * acknowledgement. This is the route that replaced the Cockpit's editable
     * on_hand field.
     *
     * @param string $id
     * @param float $quantity
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesStockAdjust(string $id, float $quantity, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/inventories/stock/{id}/adjust'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['quantity'] = $quantity;
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
     * Discovery for the vocabulary routes: the enums this app publishes, each
     * with its name, its title and its description and deliberately WITHOUT its
     * values, so finding out what exists costs one small call and not one per
     * vocabulary. Names: location-types, movement-types, reservation-statuses.
     * Fetch one with GET /inventories/vocabularies/{name}; a client holding the
     * qualified pair 'inventories.<name>' builds that URL from the pair alone.
     *
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/vocabularies'
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
     * One vocabulary in full: every permitted value, each carrying the title and
     * description a person reads for it and the badge tone a UI colours it with,
     * so a client renders a status or a movement type without a hard-coded table
     * of its own. The values are read out of the column's CHECK constraint, so
     * the served set IS the enforced set and the two cannot drift — a value
     * added to the constraint appears here even before anyone labels it, titled
     * from its own key. Values come back in constraint order, which is lifecycle
     * order for a status. 'closed' says the set is exhaustive, so a value outside
     * it is stale data rather than a missing label. Names: location-types,
     * movement-types, reservation-statuses.
     *
     * @param InventoriesVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesVocabulariesGet(InventoriesVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/inventories/vocabularies/{name}'
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