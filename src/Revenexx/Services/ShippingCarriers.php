<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\ShippingCarriersListStatus;
use Revenexx\Enums\ShippingCarrierStatus;

class ShippingCarriers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Filterable by exact column value — `?code=`, `?status=` and
     * `?service_level=` are applied as equalities and echoed back in `filter`. A
     * query key that names no column of this entity is SILENTLY IGNORED: the page
     * comes back unfiltered, 200, with an empty `filter`, so compare the echo
     * against what you sent rather than trusting the status.
     *
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @param ?string $code
     * @param ?ShippingCarriersListStatus $status
     * @param ?string $serviceLevel
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersList(?int $limit = null, ?int $offset = null, ?string $order = null, ?string $code = null, ?ShippingCarriersListStatus $status = null, ?string $serviceLevel = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/carriers'
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

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($serviceLevel)) {
            $apiParams['service_level'] = $serviceLevel;
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
     * A carrier row is one company shipping one class of service: it owns the
     * tracking-URL template, the service level, the transit days, the pickup
     * cut-off and the handling days, and every method that ships with it inherits
     * all of those unless it states its own. A carrier selling both a parcel and
     * an express product is two rows. Reach for it for a carrier this app does
     * not describe — a regional courier, a forwarder, an own fleet; for the
     * DACH networks read GET /shipping/carriers/catalog and let POST
     * /shipping/carriers/defaults write them. A create cannot omit `code` and
     * `name`; every other column is optional or defaulted by the database. Two
     * rows of this tenant may not share `code` — that is the 409.
     * `service_level` has to name one of the tenant's own levels and
     * `cutoff_time` has to be HH:MM in 24-hour UTC — both are refused rather
     * than stored, because a cut-off the estimator cannot read would be dropped
     * in silence and the shop would keep promising a ship date nobody computed.
     * Creating a carrier quotes nothing on its own: a method has to reference it
     * (`carrier_id`, or a `carrier` text equal to this code) before any of it is
     * inherited.
     *
     * @param string $code
     * @param string $name
     * @param ?array $countries
     * @param ?string $cutoffTime
     * @param ?int $etaDaysMax
     * @param ?int $etaDaysMin
     * @param ?int $handlingDays
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?int $position
     * @param ?string $serviceLevel
     * @param ?ShippingCarrierStatus $status
     * @param ?string $trackingUrlTemplate
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersCreate(string $code, string $name, ?array $countries = null, ?string $cutoffTime = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?int $handlingDays = null, ?array $labels = null, ?array $metadata = null, ?int $position = null, ?string $serviceLevel = null, ?ShippingCarrierStatus $status = null, ?string $trackingUrlTemplate = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/carriers'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['countries'] = $countries;
        $apiParams['cutoff_time'] = $cutoffTime;
        $apiParams['eta_days_max'] = $etaDaysMax;
        $apiParams['eta_days_min'] = $etaDaysMin;
        $apiParams['handling_days'] = $handlingDays;
        $apiParams['labels'] = $labels;
        $apiParams['metadata'] = $metadata;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($serviceLevel)) {
            $apiParams['service_level'] = $serviceLevel;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['tracking_url_template'] = $trackingUrlTemplate;

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
     * The DACH set — the three German parcel networks, the express carriers,
     * the AT/CH incumbents and the pallet forwarders — each with the tracking
     * template, service level, transit time and pickup cut-off it would be
     * created with. `seeded` marks the four a fresh install already has. Adding a
     * carrier is a data change, never a code change, and a merchant may of course
     * create one that is not in here at all.
     *
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersCatalog(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/carriers/catalog'
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
     * The four networks a DACH shop is expected to have — DHL, DPD, GLS and UPS
     * — created by code, and only the ones that are missing. The app runs this
     * itself on `app.installed`, so a fresh install already has them; calling it
     * by hand afterwards is how a tenant that predates a catalog entry catches
     * up, and calling it twice costs nothing, because it reconciles rather than
     * seeds. An existing row belongs to the merchant: only columns that are
     * genuinely EMPTY are filled in (a tracking template added to the catalog
     * after their install), never a value they set. Nothing is deleted.
     *
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersDefaults(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/carriers/defaults'
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
     * Deleting one clears `shipping_methods.carrier_id` rather than deleting
     * those rows — the foreign keys decide that, not this route. So a method
     * that referenced this carrier keeps working and resolves through its
     * `carrier` code instead, which is also why this never answers a conflict —
     * and it is the reason to prefer `status: 'retired'` where the carrier is
     * merely finished. What the method silently LOSES is everything it was
     * inheriting: the tracking template, the pickup cut-off, the handling days
     * and the transit days. Unless its `carrier` text still matches another
     * carrier, its ship date is recomputed on the market's own cut-off and
     * handling settings, and a method that stated no `eta_days_min`/`max` of its
     * own stops carrying a `delivery` estimate altogether. Nothing errors; the
     * promise in the checkout just changes.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/carriers/{id}'
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
     * A carrier row is one company shipping one class of service: it owns the
     * tracking-URL template, the service level, the transit days, the pickup
     * cut-off and the handling days, and every method that ships with it inherits
     * all of those unless it states its own. A carrier selling both a parcel and
     * an express product is two rows. Read it when you need to know what a
     * method's delivery promise really is: `cutoff_time`, `handling_days` and
     * `eta_days_min`/`max` are inherited from here, so a shop that seems to
     * promise the wrong ship date is usually explained by this row rather than by
     * the method. It does NOT say which methods ship with it — that is GET
     * /shipping/methods?carrier_id=… for the ones holding a reference and
     * ?carrier=… for the ones still resolving through the legacy code text.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/carriers/{id}'
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
     * A carrier row is one company shipping one class of service: it owns the
     * tracking-URL template, the service level, the transit days, the pickup
     * cut-off and the handling days, and every method that ships with it inherits
     * all of those unless it states its own. A carrier selling both a parcel and
     * an express product is two rows. A partial update — send only what
     * changes, which is where a carrier is paused, given a different tracking
     * template, or moved to another pickup cut-off or transit time. This is the
     * one switch that acts on several methods at once, in both directions. Moving
     * `status` off 'active' takes every method that ships with this carrier out
     * of POST /shipping/rates with a reason, which beats disabling each of them
     * and forgetting one; tracking links are deliberately not gated on it, so a
     * retired carrier's old shipments stay resolvable. Editing `cutoff_time`,
     * `handling_days` or `eta_days_min`/`max` MOVES THE PROMISED SHIP DATE of
     * every method that states none of its own: the estimator adds the handling
     * days, then one further day when the cut-off has already passed at the
     * instant being evaluated — compared at or after, in UTC, and as calendar
     * days that do not skip a weekend. Two rows of this tenant may not share
     * `code` — that is the 409.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $countries
     * @param ?string $cutoffTime
     * @param ?int $etaDaysMax
     * @param ?int $etaDaysMin
     * @param ?int $handlingDays
     * @param ?array $labels
     * @param ?array $metadata
     * @param ?string $name
     * @param ?int $position
     * @param ?string $serviceLevel
     * @param ?ShippingCarrierStatus $status
     * @param ?string $trackingUrlTemplate
     * @throws RevenexxException
     * @return array
     */
    public function shippingCarriersUpdate(string $id, ?string $code = null, ?array $countries = null, ?string $cutoffTime = null, ?int $etaDaysMax = null, ?int $etaDaysMin = null, ?int $handlingDays = null, ?array $labels = null, ?array $metadata = null, ?string $name = null, ?int $position = null, ?string $serviceLevel = null, ?ShippingCarrierStatus $status = null, ?string $trackingUrlTemplate = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/shipping/carriers/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['countries'] = $countries;
        $apiParams['cutoff_time'] = $cutoffTime;
        $apiParams['eta_days_max'] = $etaDaysMax;
        $apiParams['eta_days_min'] = $etaDaysMin;
        $apiParams['handling_days'] = $handlingDays;
        $apiParams['labels'] = $labels;
        $apiParams['metadata'] = $metadata;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($serviceLevel)) {
            $apiParams['service_level'] = $serviceLevel;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['tracking_url_template'] = $trackingUrlTemplate;

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
     * Hand in a carrier code and the tracking number printed on the label, and
     * this answers the URL a buyer follows. The carrier owns the URL format, so
     * nobody else has to. `order_shipments` stores a tracking_url per shipment
     * today, which is one carrier's URL shape copied into every row — the day
     * it changes, every historic link is wrong. Ask here instead. Tracking is NOT
     * gated on carrier status: a retired carrier's old shipments stay resolvable.
     *
     * @param string $carrier
     * @param ?string $country
     * @param ?string $postalCode
     * @param ?string $trackingCode
     * @throws RevenexxException
     * @return array
     */
    public function shippingTracking(string $carrier, ?string $country = null, ?string $postalCode = null, ?string $trackingCode = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/shipping/tracking'
        );

        $apiParams = [];
        $apiParams['carrier'] = $carrier;
        $apiParams['country'] = $country;
        $apiParams['postal_code'] = $postalCode;
        $apiParams['tracking_code'] = $trackingCode;

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