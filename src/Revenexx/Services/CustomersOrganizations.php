<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\OrganizationStatus;

class CustomersOrganizations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A postal address used for billing or for shipping, owned by exactly one of
     * the two parties: an organization (the company address everyone in it may
     * use) or a contact (a private one only that person uses). Both owner columns
     * are nullable and exactly one is set — sending both, or neither, is
     * refused. Every address this tenant holds, filterable by owner
     * (`organization_id`, `contact_id`), by `type` and by any other column. It is
     * how the addresses tab of a company or a person is filled; the page is
     * `limit`/`offset`/`order`.
     *
     * @param ?string $id
     * @param ?string $organizationId
     * @param ?string $contactId
     * @param ?string $type
     * @param ?string $company
     * @param ?string $name
     * @param ?string $street
     * @param ?string $street2
     * @param ?string $zip
     * @param ?string $city
     * @param ?string $region
     * @param ?string $country
     * @param ?string $phone
     * @param ?bool $isDefault
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesList(?string $id = null, ?string $organizationId = null, ?string $contactId = null, ?string $type = null, ?string $company = null, ?string $name = null, ?string $street = null, ?string $street2 = null, ?string $zip = null, ?string $city = null, ?string $region = null, ?string $country = null, ?string $phone = null, ?bool $isDefault = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/addresses'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($company)) {
            $apiParams['company'] = $company;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($street)) {
            $apiParams['street'] = $street;
        }

        if (!is_null($street2)) {
            $apiParams['street2'] = $street2;
        }

        if (!is_null($zip)) {
            $apiParams['zip'] = $zip;
        }

        if (!is_null($city)) {
            $apiParams['city'] = $city;
        }

        if (!is_null($region)) {
            $apiParams['region'] = $region;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
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
     * A postal address used for billing or for shipping, owned by exactly one of
     * the two parties: an organization (the company address everyone in it may
     * use) or a contact (a private one only that person uses). Both owner columns
     * are nullable and exactly one is set — sending both, or neither, is
     * refused. `type` names one of this tenant's own address types — billing
     * and shipping are seeded, and a merchant may add a works entrance or a
     * central accounts office without a release of this app. `is_default` picks
     * the one a checkout should preselect for that owner and that type. A create
     * cannot omit `street`, `zip`, `city` and `country`; everything else is
     * optional or defaulted by the database.
     *
     * @param string $city
     * @param string $country
     * @param string $street
     * @param string $zip
     * @param ?string $company
     * @param ?string $contactId
     * @param ?bool $isDefault
     * @param ?string $name
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?string $region
     * @param ?string $street2
     * @param ?string $type
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesCreate(string $city, string $country, string $street, string $zip, ?string $company = null, ?string $contactId = null, ?bool $isDefault = null, ?string $name = null, ?string $organizationId = null, ?string $phone = null, ?string $region = null, ?string $street2 = null, ?string $type = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/addresses'
        );

        $apiParams = [];
        $apiParams['city'] = $city;
        $apiParams['country'] = $country;
        $apiParams['street'] = $street;
        $apiParams['zip'] = $zip;
        $apiParams['company'] = $company;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['name'] = $name;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;
        $apiParams['region'] = $region;
        $apiParams['street2'] = $street2;

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
     * A postal address used for billing or for shipping, owned by exactly one of
     * the two parties: an organization (the company address everyone in it may
     * use) or a contact (a private one only that person uses). Both owner columns
     * are nullable and exactly one is set — sending both, or neither, is
     * refused. Removes the address. Orders already placed keep the address they
     * were placed with; nothing in this app reaches back. Nothing else in this
     * app points at it, so nothing else goes with it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/addresses/{id}'
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
     * A postal address used for billing or for shipping, owned by exactly one of
     * the two parties: an organization (the company address everyone in it may
     * use) or a contact (a private one only that person uses). Both owner columns
     * are nullable and exactly one is set — sending both, or neither, is
     * refused. One address by id, whichever of the two owners it hangs off.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/addresses/{id}'
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
     * A postal address used for billing or for shipping, owned by exactly one of
     * the two parties: an organization (the company address everyone in it may
     * use) or a contact (a private one only that person uses). Both owner columns
     * are nullable and exactly one is set — sending both, or neither, is
     * refused. A partial update — send only what changes. An empty body is
     * refused rather than answered as a no-op, so a client that built the wrong
     * patch finds out.
     *
     * @param string $id
     * @param ?string $city
     * @param ?string $company
     * @param ?string $contactId
     * @param ?string $country
     * @param ?bool $isDefault
     * @param ?string $name
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?string $region
     * @param ?string $street
     * @param ?string $street2
     * @param ?string $type
     * @param ?string $zip
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesUpdate(string $id, ?string $city = null, ?string $company = null, ?string $contactId = null, ?string $country = null, ?bool $isDefault = null, ?string $name = null, ?string $organizationId = null, ?string $phone = null, ?string $region = null, ?string $street = null, ?string $street2 = null, ?string $type = null, ?string $zip = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/addresses/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($city)) {
            $apiParams['city'] = $city;
        }
        $apiParams['company'] = $company;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['name'] = $name;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;
        $apiParams['region'] = $region;

        if (!is_null($street)) {
            $apiParams['street'] = $street;
        }
        $apiParams['street2'] = $street2;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($zip)) {
            $apiParams['zip'] = $zip;
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
     * What an organization has BOUGHT, materialized into this app from the orders
     * app: lifetime revenue, revenue over the last 30/90/365 days, order count,
     * average order value, and the first and last order dates. Revenue lives in
     * orders and may not be joined (ADR-0055: no cross-app foreign key, grant or
     * view), so it is pulled on a schedule and stored here — one row per
     * organization, all-zero for a company that never ordered, so that a "never
     * bought anything" rule has something to match. The customer-value list: sort
     * by `revenue_365d` for the best customers, filter `last_order_at` for the
     * dormant ones. Every row carries `computed_at`, and a row is only as current
     * as the last refresh — `GET /customers/organization_metrics/freshness`
     * says how stale the set is before a number is shown to anybody.
     *
     * @param ?string $id
     * @param ?string $organizationId
     * @param ?int $orderCount
     * @param ?int $orderCount30d
     * @param ?int $orderCount90d
     * @param ?int $orderCount365d
     * @param ?float $revenueTotal
     * @param ?float $revenue30d
     * @param ?float $revenue90d
     * @param ?float $revenue365d
     * @param ?float $avgOrderValue
     * @param ?float $avgOrderValue365d
     * @param ?string $firstOrderAt
     * @param ?string $lastOrderAt
     * @param ?string $currency
     * @param ?bool $currencyMixed
     * @param ?string $ordersAsOf
     * @param ?string $computedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationMetricsList(?string $id = null, ?string $organizationId = null, ?int $orderCount = null, ?int $orderCount30d = null, ?int $orderCount90d = null, ?int $orderCount365d = null, ?float $revenueTotal = null, ?float $revenue30d = null, ?float $revenue90d = null, ?float $revenue365d = null, ?float $avgOrderValue = null, ?float $avgOrderValue365d = null, ?string $firstOrderAt = null, ?string $lastOrderAt = null, ?string $currency = null, ?bool $currencyMixed = null, ?string $ordersAsOf = null, ?string $computedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organization_metrics'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($orderCount)) {
            $apiParams['order_count'] = $orderCount;
        }

        if (!is_null($orderCount30d)) {
            $apiParams['order_count_30d'] = $orderCount30d;
        }

        if (!is_null($orderCount90d)) {
            $apiParams['order_count_90d'] = $orderCount90d;
        }

        if (!is_null($orderCount365d)) {
            $apiParams['order_count_365d'] = $orderCount365d;
        }

        if (!is_null($revenueTotal)) {
            $apiParams['revenue_total'] = $revenueTotal;
        }

        if (!is_null($revenue30d)) {
            $apiParams['revenue_30d'] = $revenue30d;
        }

        if (!is_null($revenue90d)) {
            $apiParams['revenue_90d'] = $revenue90d;
        }

        if (!is_null($revenue365d)) {
            $apiParams['revenue_365d'] = $revenue365d;
        }

        if (!is_null($avgOrderValue)) {
            $apiParams['avg_order_value'] = $avgOrderValue;
        }

        if (!is_null($avgOrderValue365d)) {
            $apiParams['avg_order_value_365d'] = $avgOrderValue365d;
        }

        if (!is_null($firstOrderAt)) {
            $apiParams['first_order_at'] = $firstOrderAt;
        }

        if (!is_null($lastOrderAt)) {
            $apiParams['last_order_at'] = $lastOrderAt;
        }

        if (!is_null($currency)) {
            $apiParams['currency'] = $currency;
        }

        if (!is_null($currencyMixed)) {
            $apiParams['currency_mixed'] = $currencyMixed;
        }

        if (!is_null($ordersAsOf)) {
            $apiParams['orders_as_of'] = $ordersAsOf;
        }

        if (!is_null($computedAt)) {
            $apiParams['computed_at'] = $computedAt;
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
     * The projection is materialized, so it is only as true as its last refresh.
     * This is that fact as one answer: the OLDEST computed_at in the table (the
     * floor, not an average), the anchor those numbers were measured from, and
     * how many organizations are not covered at all yet.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationMetricsFreshness(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organization_metrics/freshness'
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
     * Revenue lives in the orders app and cannot be joined (ADR-0055: no
     * cross-app FK, grant or view), so it is PULLED: this route walks
     * organizations in id order, asks orders.reports.customer-rollup about a
     * batch of them at a time and materializes the answer into
     * organization_metrics — one row per organization, all-zero for those that
     * never ordered, so that 'never bought' rules match something. Rows are only
     * rewritten when a value actually changed, so a routine refresh costs almost
     * no writes. Bounded by a wall-clock budget below the gateway's upstream
     * timeout: while 'done' is false, POST again with the returned 'cursor' AND
     * 'as_of' (pinning as_of is what stops the rolling windows sliding during a
     * multi-call refresh). 'organization_ids' refreshes exactly those
     * organizations in a single call — the targeted path after a customer
     * ordered.
     *
     * @param ?string $asOf
     * @param ?string $cursor
     * @param ?array $organizationIds
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationMetricsRefresh(?string $asOf = null, ?string $cursor = null, ?array $organizationIds = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organization_metrics/refresh'
        );

        $apiParams = [];
        $apiParams['as_of'] = $asOf;
        $apiParams['cursor'] = $cursor;
        $apiParams['organization_ids'] = $organizationIds;

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
     * What an organization has BOUGHT, materialized into this app from the orders
     * app: lifetime revenue, revenue over the last 30/90/365 days, order count,
     * average order value, and the first and last order dates. Revenue lives in
     * orders and may not be joined (ADR-0055: no cross-app foreign key, grant or
     * view), so it is pulled on a schedule and stored here — one row per
     * organization, all-zero for a company that never ordered, so that a "never
     * bought anything" rule has something to match. One company's numbers by the
     * metrics row id. All zeroes mean the company has never ordered, not that the
     * projection is missing — a missing row means the refresh has not reached
     * that company yet.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationMetricsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organization_metrics/{id}'
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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. The company list
     * a sales or service desk works from, and the read a segment rule is written
     * against. Every column of the table is a filter and the page is
     * `limit`/`offset`/`order` — including the two that are constantly
     * confused: `status` is ACCESS (active or blocked) and `lifecycle_stage` is
     * the sales PIPELINE, so filtering the wrong one answers with the wrong
     * companies rather than with an error.
     *
     * @param ?string $id
     * @param ?string $name
     * @param ?string $vatId
     * @param ?string $branche
     * @param ?string $customerNumber
     * @param ?CustomersOrganizationsListStatus $status
     * @param ?string $lifecycleStage
     * @param ?string $paymentTerms
     * @param ?float $creditLimit
     * @param ?string $priceList
     * @param ?bool $deliveryBlock
     * @param ?string $externalTeamId
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsList(?string $id = null, ?string $name = null, ?string $vatId = null, ?string $branche = null, ?string $customerNumber = null, ?CustomersOrganizationsListStatus $status = null, ?string $lifecycleStage = null, ?string $paymentTerms = null, ?float $creditLimit = null, ?string $priceList = null, ?bool $deliveryBlock = null, ?string $externalTeamId = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($vatId)) {
            $apiParams['vat_id'] = $vatId;
        }

        if (!is_null($branche)) {
            $apiParams['branche'] = $branche;
        }

        if (!is_null($customerNumber)) {
            $apiParams['customer_number'] = $customerNumber;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }

        if (!is_null($paymentTerms)) {
            $apiParams['payment_terms'] = $paymentTerms;
        }

        if (!is_null($creditLimit)) {
            $apiParams['credit_limit'] = $creditLimit;
        }

        if (!is_null($priceList)) {
            $apiParams['price_list'] = $priceList;
        }

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($externalTeamId)) {
            $apiParams['external_team_id'] = $externalTeamId;
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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. Registers a
     * company as a customer. It is mirrored into platform auth as a team in the
     * same call, so a failure of the identity service fails the create rather
     * than leaving half a company behind. `payment_terms` and `lifecycle_stage`
     * name values from this tenant's own sets, and a newly founded company
     * inherits the tenant's `default_payment_terms` / `default_credit_limit`
     * where the merchant set them. `name` is the only field a create cannot omit;
     * everything else is optional or defaulted by the database. Two rows of this
     * tenant may not share `customer_number` (while customer_number IS NOT NULL)
     * or `external_team_id` (while external_team_id IS NOT NULL).
     *
     * @param string $name
     * @param ?string $branche
     * @param ?float $creditLimit
     * @param ?string $customerNumber
     * @param ?bool $deliveryBlock
     * @param ?string $lifecycleStage
     * @param ?string $paymentTerms
     * @param ?string $priceList
     * @param ?array $settings
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsCreate(string $name, ?string $branche = null, ?float $creditLimit = null, ?string $customerNumber = null, ?bool $deliveryBlock = null, ?string $lifecycleStage = null, ?string $paymentTerms = null, ?string $priceList = null, ?array $settings = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['branche'] = $branche;
        $apiParams['credit_limit'] = $creditLimit;
        $apiParams['customer_number'] = $customerNumber;

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }
        $apiParams['payment_terms'] = $paymentTerms;
        $apiParams['price_list'] = $priceList;
        $apiParams['settings'] = $settings;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['vat_id'] = $vatId;

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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. Removes the
     * company and its mirrored team. Its people are NOT deleted: they become
     * standalone buyers who can still sign in and still order, which is the
     * behaviour a merchant winding down a subsidiary wants. Deleting one takes
     * every `contact_events`, `addresses`, `organization_metrics` and
     * `segment_members` row that points at it with it and clears
     * `contacts.organization_id` rather than deleting those rows — the foreign
     * keys decide, not this route.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}'
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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. One company by
     * id, with its commercial terms as stored. What it has BOUGHT is not in here
     * — that is the `organization_metrics` row for the same id, refreshed on
     * its own schedule.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}'
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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. A partial update
     * — send only what changes. `external_team_id` is mirror-managed and
     * ignored if sent. Blocking a company here is what stops it trading; moving
     * it through the pipeline is `lifecycle_stage`, and the two are independent.
     * Two rows of this tenant may not share `customer_number` (while
     * customer_number IS NOT NULL) or `external_team_id` (while external_team_id
     * IS NOT NULL).
     *
     * @param string $id
     * @param ?string $branche
     * @param ?float $creditLimit
     * @param ?string $customerNumber
     * @param ?bool $deliveryBlock
     * @param ?string $lifecycleStage
     * @param ?string $name
     * @param ?string $paymentTerms
     * @param ?string $priceList
     * @param ?array $settings
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsUpdate(string $id, ?string $branche = null, ?float $creditLimit = null, ?string $customerNumber = null, ?bool $deliveryBlock = null, ?string $lifecycleStage = null, ?string $name = null, ?string $paymentTerms = null, ?string $priceList = null, ?array $settings = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['branche'] = $branche;
        $apiParams['credit_limit'] = $creditLimit;
        $apiParams['customer_number'] = $customerNumber;

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['payment_terms'] = $paymentTerms;
        $apiParams['price_list'] = $priceList;
        $apiParams['settings'] = $settings;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }
        $apiParams['vat_id'] = $vatId;

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