<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\InventoriesLocationsListType;
use Revenexx\Enums\LocationType;

class InventoriesLocations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A location is WHERE stock is kept — a warehouse, a shop floor, a supplier
     * that dropships, or a virtual bucket for pre-orders and quarantine. It holds
     * no quantity of its own: what is at it is a stock level. `type` is
     * descriptive and nothing branches on it; `priority` is the number that
     * decides which location a reservation is served from, and `enabled` decides
     * whether it is offered at all. This is the list a `location_code` is
     * resolved against on every stock call, so it is the first thing to read when
     * a receipt answers "unknown location". It answers no quantities at all —
     * how much is at a location is GET /inventories/stock?location_id=…, and
     * what may still be sold is POST /inventories/availability. Filter
     * `?enabled=true` for the operational subset: availability and reserve only
     * ever look at enabled locations, so a disabled one is invisible to a shop
     * while keeping every row that points at it.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $labels
     * @param ?InventoriesLocationsListType $type
     * @param ?int $priority
     * @param ?bool $enabled
     * @param ?string $address
     * @param ?string $metadata
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @throws RevenexxException
     * @return array
     */
    public function inventoriesLocationsList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $id = null, ?string $code = null, ?string $name = null, ?string $labels = null, ?InventoriesLocationsListType $type = null, ?int $priority = null, ?bool $enabled = null, ?string $address = null, ?string $metadata = null, ?string $createdAt = null, ?string $updatedAt = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/inventories/locations'
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

        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($address)) {
            $apiParams['address'] = $address;
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
     * Registers a new place stock can be kept, and `type` says what kind of place
     * it is: a warehouse of your own, a store whose shop floor a
     * click-and-collect order draws on, a dropship supplier whose stock this row
     * only tracks, or a virtual bucket that is not a building at all —
     * pre-orders, consignment, a quarantine shelf. A create cannot omit `code`
     * and `name`; every other column is optional or defaulted by the database.
     * Two rows of this tenant may not share `code` — that is the 409, and it
     * answers an update that moves a row onto a sibling's value exactly as it
     * answers a second insert. A new location starts EMPTY and creating one moves
     * nothing: stock arrives through POST /inventories/receive, or is transferred
     * by two adjustments, one negative at the old location and one positive here.
     * Mind the two columns that are not decoration — `priority` decides where a
     * reservation is served from before `type` ever does (nothing branches on
     * `type`), and `enabled` defaults to true, so a location created for a
     * warehouse that has not opened yet starts being offered by availability and
     * reserve immediately.
     *
     * @param string $code
     * @param string $name
     * @param ?array $address
     * @param ?bool $enabled
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?int $priority
     * @param ?LocationType $type
     * @throws RevenexxException
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
     * Gives a tenant its first location, `main`, so the stock calls have
     * somewhere to book into: `receive`, `adjust` and `restock` fall back to the
     * `default_location_code` setting when a caller names no `location_code`, and
     * a tenant with no location at all answers 400 on its first receipt. The
     * platform already runs this on `app.installed`, so calling it by hand is the
     * repair for an install that predates the event or a `main` somebody deleted.
     * Idempotent by CODE, not by contents: a location already carrying that code
     * is reported under `existing` and is NOT touched, so a renamed or disabled
     * `main` stays renamed and disabled. It creates nothing else and never
     * removes a location.
     *
     * @throws RevenexxException
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
     * Deleting one takes every `stock_levels` row that points at it with it —
     * the foreign key decides that, not this route. What the database does NOT
     * clean up is everything else carrying the same id:
     * `stock_movements.location_id` and `reservations.location_id` are plain uuid
     * columns and not foreign keys, so those rows stay exactly where they are,
     * pointing at a row that no longer exists, and nothing nulls the pointer.
     * That asymmetry destroys the balances and keeps everything that refers to
     * them, so the route REFUSES while anything still depends on the location and
     * answers 409 with the count — taken here rather than left to whoever is
     * about to click delete, because a client that pre-counts asks a second
     * question whose answer disagrees the moment a receipt lands between the two
     * calls. Two things block it. A stock row still carrying `on_hand`: the
     * cascade would destroy recorded inventory and nothing in this app ever
     * replays the ledger to rebuild a balance, so there is no undo. And a
     * reservation still `active`: a promise to a customer must not outlive the
     * row backing it — such a hold used to survive its stock row, after which
     * /release lowered no `reserved` and still wrote its `release` booking, and
     * /commit booked the whole quantity as a shortfall, neither of them an error.
     * A stock row at zero does not block: it records no quantity. HISTORY never
     * blocks, and is never deleted either — a movement is an accounting record
     * and removing one would falsify it, so the bookings stay, naming a location
     * that no longer resolves, BY DESIGN. A location that once had traffic and
     * now holds nothing is exactly what a merchant closes. To get past the 409,
     * adjust the stock to zero and release or commit the holds; where the
     * location is merely out of service, PUT `enabled: false` keeps every row and
     * can be undone.
     *
     * @param string $id
     * @throws RevenexxException
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
     * A location is WHERE stock is kept — a warehouse, a shop floor, a supplier
     * that dropships, or a virtual bucket for pre-orders and quarantine. It holds
     * no quantity of its own: what is at it is a stock level. `type` is
     * descriptive and nothing branches on it; `priority` is the number that
     * decides which location a reservation is served from, and `enabled` decides
     * whether it is offered at all. This is the route that turns an id back into
     * a place: `location_id` is on every stock row, every ledger booking and
     * every reservation, and none of them carries the code or the name. Reading
     * it also answers the two questions those rows raise — whether the location
     * is still `enabled` (a disabled one is skipped by availability and reserve
     * while its stock stays exactly where it is) and where its `priority` puts it
     * when the allocation strategy picks somewhere to reserve from.
     *
     * @param string $id
     * @throws RevenexxException
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
     * Partial update: send the fields that change. The one with consequences is
     * `enabled` — setting it to false is how a location is taken out of service
     * WITHOUT losing anything. Availability and reserve stop looking at it, so
     * its stock stops being sellable, while every stock row, ledger booking and
     * reservation that points at it survives untouched and comes back the moment
     * it is enabled again. That is the reversible alternative to DELETE, which is
     * not reversible at all. Changing `code` is the other sharp edge: rows keep
     * their `location_id` so nothing moves, but every caller that names the old
     * code in `location_code` starts getting 400 "unknown location". Two rows of
     * this tenant may not share `code` — that is the 409, and it answers an
     * update that moves a row onto a sibling's value exactly as it answers a
     * second insert.
     *
     * @param string $id
     * @param ?array $address
     * @param ?string $code
     * @param ?bool $enabled
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $priority
     * @param ?LocationType $type
     * @throws RevenexxException
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
}