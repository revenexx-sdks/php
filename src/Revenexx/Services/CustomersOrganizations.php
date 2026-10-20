<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Country;
use Revenexx\Enums\DeliveryPointType;
use Revenexx\Enums\ValidationStatus;
use Revenexx\Enums\CustomersOrganizationsListStatus;
use Revenexx\Enums\CreditLimitMode;
use Revenexx\Enums\ShippingAdvice;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\OrganizationStatus;
use Revenexx\Enums\CustomersOrganizationsBlockReason;
use Revenexx\Enums\CustomersOrganizationsBlockKind;
use Revenexx\Enums\CustomersOrganizationsChangeCreditReason;

class CustomersOrganizations extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The address type every revenexx app stores a postal address as, and the
     * countries that carry rules for it. `schema` is the JSON Schema (2020-12)
     * itself, with a versioned `$id`
     * (https://schemas.revenexx.com/apps/customers/address/1.1.0.json) an app
     * pins its copy by; only `country_code` is required by the type, and what
     * else an address needs depends on its country. `countries` lists every ISO
     * 3166-1 code with rules, by code and name — read one with GET
     * /customers/address-format/{country}. The same for every tenant: this is a
     * contract, not data.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressFormatList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/address-format'
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
     * What an address in one country looks like and needs: the fields in the
     * order they are printed, the ones it requires, the postal-code pattern with
     * an example, the word a form shows for each field that varies by country
     * (de/en), the regions as ISO 3166-2 codes, and the contact fields (phone,
     * email) every country takes but never prints. Derived from Google's
     * libaddressinput data. A region the data names only in words carries `code:
     * null`; an address there gives the region by name in
     * `administrative_area_name`.
     *
     * @param Country $country
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressFormatGet(Country $country): array
    {
        $apiPath = str_replace(
            ['{country}'],
            [$country],
            '/v1/customers/address-format/{country}'
        );

        $apiParams = [];
        $apiParams['country'] = $country;

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
     * @param ?string $name2
     * @param ?string $street
     * @param ?string $street2
     * @param ?string $zip
     * @param ?string $city
     * @param ?string $region
     * @param ?string $country
     * @param ?string $phone
     * @param ?string $email
     * @param ?string $addressLine3
     * @param ?string $dependentLocality
     * @param ?string $administrativeAreaCode
     * @param ?string $sortingCode
     * @param ?string $streetName
     * @param ?string $houseNumber
     * @param ?string $houseNumberAddition
     * @param ?DeliveryPointType $deliveryPointType
     * @param ?string $deliveryPointId
     * @param ?string $languageCode
     * @param ?string $script
     * @param ?ValidationStatus $validationStatus
     * @param ?string $validatedAt
     * @param ?string $validationSource
     * @param ?bool $isDefault
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesList(?string $id = null, ?string $organizationId = null, ?string $contactId = null, ?string $type = null, ?string $company = null, ?string $name = null, ?string $name2 = null, ?string $street = null, ?string $street2 = null, ?string $zip = null, ?string $city = null, ?string $region = null, ?string $country = null, ?string $phone = null, ?string $email = null, ?string $addressLine3 = null, ?string $dependentLocality = null, ?string $administrativeAreaCode = null, ?string $sortingCode = null, ?string $streetName = null, ?string $houseNumber = null, ?string $houseNumberAddition = null, ?DeliveryPointType $deliveryPointType = null, ?string $deliveryPointId = null, ?string $languageCode = null, ?string $script = null, ?ValidationStatus $validationStatus = null, ?string $validatedAt = null, ?string $validationSource = null, ?bool $isDefault = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
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

        if (!is_null($name2)) {
            $apiParams['name2'] = $name2;
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

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($addressLine3)) {
            $apiParams['address_line3'] = $addressLine3;
        }

        if (!is_null($dependentLocality)) {
            $apiParams['dependent_locality'] = $dependentLocality;
        }

        if (!is_null($administrativeAreaCode)) {
            $apiParams['administrative_area_code'] = $administrativeAreaCode;
        }

        if (!is_null($sortingCode)) {
            $apiParams['sorting_code'] = $sortingCode;
        }

        if (!is_null($streetName)) {
            $apiParams['street_name'] = $streetName;
        }

        if (!is_null($houseNumber)) {
            $apiParams['house_number'] = $houseNumber;
        }

        if (!is_null($houseNumberAddition)) {
            $apiParams['house_number_addition'] = $houseNumberAddition;
        }

        if (!is_null($deliveryPointType)) {
            $apiParams['delivery_point_type'] = $deliveryPointType;
        }

        if (!is_null($deliveryPointId)) {
            $apiParams['delivery_point_id'] = $deliveryPointId;
        }

        if (!is_null($languageCode)) {
            $apiParams['language_code'] = $languageCode;
        }

        if (!is_null($script)) {
            $apiParams['script'] = $script;
        }

        if (!is_null($validationStatus)) {
            $apiParams['validation_status'] = $validationStatus;
        }

        if (!is_null($validatedAt)) {
            $apiParams['validated_at'] = $validatedAt;
        }

        if (!is_null($validationSource)) {
            $apiParams['validation_source'] = $validationSource;
        }

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
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
     * the one a checkout should preselect for that owner and that type. `country`
     * is the only field a create cannot omit; everything else is optional or
     * defaulted by the database. Two rows of this tenant may not share
     * `external_id` (while external_id IS NOT NULL).
     *
     * @param ?string $addressLine1
     * @param ?string $addressLine2
     * @param ?string $addressLine3
     * @param ?string $administrativeAreaCode
     * @param ?string $administrativeAreaName
     * @param ?string $careOf
     * @param ?string $city
     * @param ?string $company
     * @param ?string $contactId
     * @param ?string $country
     * @param ?string $countryCode
     * @param ?string $createdAt
     * @param ?string $deliveryPointId
     * @param ?DeliveryPointType $deliveryPointType
     * @param ?string $dependentLocality
     * @param ?string $email
     * @param ?string $externalId
     * @param ?string $houseNumber
     * @param ?string $houseNumberAddition
     * @param ?bool $isDefault
     * @param ?string $languageCode
     * @param ?array $latin
     * @param ?string $locality
     * @param ?string $name
     * @param ?string $name2
     * @param ?string $organizationId
     * @param ?string $organizationName
     * @param ?string $phone
     * @param ?string $postalCode
     * @param ?string $recipientName
     * @param ?string $region
     * @param ?string $script
     * @param ?string $sortingCode
     * @param ?string $street
     * @param ?string $street2
     * @param ?string $streetName
     * @param ?string $type
     * @param ?string $validatedAt
     * @param ?string $validationSource
     * @param ?ValidationStatus $validationStatus
     * @param ?string $zip
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesCreate(?string $addressLine1 = null, ?string $addressLine2 = null, ?string $addressLine3 = null, ?string $administrativeAreaCode = null, ?string $administrativeAreaName = null, ?string $careOf = null, ?string $city = null, ?string $company = null, ?string $contactId = null, ?string $country = null, ?string $countryCode = null, ?string $createdAt = null, ?string $deliveryPointId = null, ?DeliveryPointType $deliveryPointType = null, ?string $dependentLocality = null, ?string $email = null, ?string $externalId = null, ?string $houseNumber = null, ?string $houseNumberAddition = null, ?bool $isDefault = null, ?string $languageCode = null, ?array $latin = null, ?string $locality = null, ?string $name = null, ?string $name2 = null, ?string $organizationId = null, ?string $organizationName = null, ?string $phone = null, ?string $postalCode = null, ?string $recipientName = null, ?string $region = null, ?string $script = null, ?string $sortingCode = null, ?string $street = null, ?string $street2 = null, ?string $streetName = null, ?string $type = null, ?string $validatedAt = null, ?string $validationSource = null, ?ValidationStatus $validationStatus = null, ?string $zip = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/addresses'
        );

        $apiParams = [];
        $apiParams['address_line1'] = $addressLine1;
        $apiParams['address_line2'] = $addressLine2;
        $apiParams['address_line3'] = $addressLine3;
        $apiParams['administrative_area_code'] = $administrativeAreaCode;
        $apiParams['administrative_area_name'] = $administrativeAreaName;
        $apiParams['care_of'] = $careOf;
        $apiParams['city'] = $city;
        $apiParams['company'] = $company;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($countryCode)) {
            $apiParams['country_code'] = $countryCode;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }
        $apiParams['delivery_point_id'] = $deliveryPointId;
        $apiParams['delivery_point_type'] = $deliveryPointType;
        $apiParams['dependent_locality'] = $dependentLocality;
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['house_number'] = $houseNumber;
        $apiParams['house_number_addition'] = $houseNumberAddition;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['language_code'] = $languageCode;
        $apiParams['latin'] = $latin;
        $apiParams['locality'] = $locality;
        $apiParams['name'] = $name;
        $apiParams['name2'] = $name2;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['organization_name'] = $organizationName;
        $apiParams['phone'] = $phone;
        $apiParams['postal_code'] = $postalCode;
        $apiParams['recipient_name'] = $recipientName;
        $apiParams['region'] = $region;
        $apiParams['script'] = $script;
        $apiParams['sorting_code'] = $sortingCode;

        if (!is_null($street)) {
            $apiParams['street'] = $street;
        }
        $apiParams['street2'] = $street2;
        $apiParams['street_name'] = $streetName;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['validated_at'] = $validatedAt;
        $apiParams['validation_source'] = $validationSource;
        $apiParams['validation_status'] = $validationStatus;
        $apiParams['zip'] = $zip;

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
     * were placed with; nothing in this app reaches back. Deleting one takes
     * every `contact_points` row that points at it with it — the foreign keys
     * decide, not this route.
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
     * patch finds out. Two rows of this tenant may not share `external_id` (while
     * external_id IS NOT NULL).
     *
     * @param string $id
     * @param ?string $addressLine1
     * @param ?string $addressLine2
     * @param ?string $addressLine3
     * @param ?string $administrativeAreaCode
     * @param ?string $administrativeAreaName
     * @param ?string $careOf
     * @param ?string $city
     * @param ?string $company
     * @param ?string $contactId
     * @param ?string $country
     * @param ?string $countryCode
     * @param ?string $deliveryPointId
     * @param ?DeliveryPointType $deliveryPointType
     * @param ?string $dependentLocality
     * @param ?string $email
     * @param ?string $externalId
     * @param ?string $houseNumber
     * @param ?string $houseNumberAddition
     * @param ?bool $isDefault
     * @param ?string $languageCode
     * @param ?array $latin
     * @param ?string $locality
     * @param ?string $name
     * @param ?string $name2
     * @param ?string $organizationId
     * @param ?string $organizationName
     * @param ?string $phone
     * @param ?string $postalCode
     * @param ?string $recipientName
     * @param ?string $region
     * @param ?string $script
     * @param ?string $sortingCode
     * @param ?string $street
     * @param ?string $street2
     * @param ?string $streetName
     * @param ?string $type
     * @param ?string $validatedAt
     * @param ?string $validationSource
     * @param ?ValidationStatus $validationStatus
     * @param ?string $zip
     * @throws RevenexxException
     * @return array
     */
    public function customersAddressesUpdate(string $id, ?string $addressLine1 = null, ?string $addressLine2 = null, ?string $addressLine3 = null, ?string $administrativeAreaCode = null, ?string $administrativeAreaName = null, ?string $careOf = null, ?string $city = null, ?string $company = null, ?string $contactId = null, ?string $country = null, ?string $countryCode = null, ?string $deliveryPointId = null, ?DeliveryPointType $deliveryPointType = null, ?string $dependentLocality = null, ?string $email = null, ?string $externalId = null, ?string $houseNumber = null, ?string $houseNumberAddition = null, ?bool $isDefault = null, ?string $languageCode = null, ?array $latin = null, ?string $locality = null, ?string $name = null, ?string $name2 = null, ?string $organizationId = null, ?string $organizationName = null, ?string $phone = null, ?string $postalCode = null, ?string $recipientName = null, ?string $region = null, ?string $script = null, ?string $sortingCode = null, ?string $street = null, ?string $street2 = null, ?string $streetName = null, ?string $type = null, ?string $validatedAt = null, ?string $validationSource = null, ?ValidationStatus $validationStatus = null, ?string $zip = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/addresses/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['address_line1'] = $addressLine1;
        $apiParams['address_line2'] = $addressLine2;
        $apiParams['address_line3'] = $addressLine3;
        $apiParams['administrative_area_code'] = $administrativeAreaCode;
        $apiParams['administrative_area_name'] = $administrativeAreaName;
        $apiParams['care_of'] = $careOf;
        $apiParams['city'] = $city;
        $apiParams['company'] = $company;
        $apiParams['contact_id'] = $contactId;

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($countryCode)) {
            $apiParams['country_code'] = $countryCode;
        }
        $apiParams['delivery_point_id'] = $deliveryPointId;
        $apiParams['delivery_point_type'] = $deliveryPointType;
        $apiParams['dependent_locality'] = $dependentLocality;
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;
        $apiParams['house_number'] = $houseNumber;
        $apiParams['house_number_addition'] = $houseNumberAddition;

        if (!is_null($isDefault)) {
            $apiParams['is_default'] = $isDefault;
        }
        $apiParams['language_code'] = $languageCode;
        $apiParams['latin'] = $latin;
        $apiParams['locality'] = $locality;
        $apiParams['name'] = $name;
        $apiParams['name2'] = $name2;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['organization_name'] = $organizationName;
        $apiParams['phone'] = $phone;
        $apiParams['postal_code'] = $postalCode;
        $apiParams['recipient_name'] = $recipientName;
        $apiParams['region'] = $region;
        $apiParams['script'] = $script;
        $apiParams['sorting_code'] = $sortingCode;

        if (!is_null($street)) {
            $apiParams['street'] = $street;
        }
        $apiParams['street2'] = $street2;
        $apiParams['street_name'] = $streetName;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['validated_at'] = $validatedAt;
        $apiParams['validation_source'] = $validationSource;
        $apiParams['validation_status'] = $validationStatus;
        $apiParams['zip'] = $zip;

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
     * A contact point is WHERE one kind of document goes for one company: the
     * invoice to accounts payable, the order confirmation to the buyer who placed
     * it, the shipping notice to goods-in, the dunning letter to whoever settles
     * it. An ERP keeps these as four separate addresses per debtor and they had
     * nowhere to land here — the `email` of an address is the delivery's, not a
     * document's — so these rows create a home rather than moving one. Exactly
     * one point per company and kind is flagged as the one to use. Every contact
     * point this tenant holds, filtered by `organization_id` for one company, by
     * `kind` for one kind of document, by `is_primary` for the ones actually in
     * use. `?organization_id=…&kind=invoice&is_primary=true` is the single read
     * behind "where does this company's invoice go" — and it answers at most
     * one row, because this app keeps the flag single. The page is
     * `limit`/`offset`/`order`.
     *
     * @param ?string $id
     * @param ?string $organizationId
     * @param ?string $addressId
     * @param ?string $kind
     * @param ?string $email
     * @param ?string $phone
     * @param ?bool $isPrimary
     * @param ?int $position
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersContactPointsList(?string $id = null, ?string $organizationId = null, ?string $addressId = null, ?string $kind = null, ?string $email = null, ?string $phone = null, ?bool $isPrimary = null, ?int $position = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contact_points'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($addressId)) {
            $apiParams['address_id'] = $addressId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
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
     * A contact point is WHERE one kind of document goes for one company: the
     * invoice to accounts payable, the order confirmation to the buyer who placed
     * it, the shipping notice to goods-in, the dunning letter to whoever settles
     * it. An ERP keeps these as four separate addresses per debtor and they had
     * nowhere to land here — the `email` of an address is the delivery's, not a
     * document's — so these rows create a home rather than moving one. Exactly
     * one point per company and kind is flagged as the one to use. `kind` is
     * required and names one of this tenant's own document recipient types —
     * nothing is defaulted, because a point filed as the wrong document is worse
     * than a point refused. A point needs an `email` or a `phone`, since one with
     * neither delivers nothing. The FIRST point of a kind becomes the one to use
     * on its own; a later one takes over only when it is sent as `is_primary`,
     * which demotes the incumbent in the same call. A create cannot omit
     * `organization_id` and `kind`; everything else is optional or defaulted by
     * the database. Two rows of this tenant may not share the combination of
     * `organization_id` + `kind` (while is_primary) or `external_id` (while
     * external_id IS NOT NULL).
     *
     * @param string $kind
     * @param string $organizationId
     * @param ?string $addressId
     * @param ?string $createdAt
     * @param ?string $email
     * @param ?string $externalId
     * @param ?bool $isPrimary
     * @param ?string $phone
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function customersContactPointsCreate(string $kind, string $organizationId, ?string $addressId = null, ?string $createdAt = null, ?string $email = null, ?string $externalId = null, ?bool $isPrimary = null, ?string $phone = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contact_points'
        );

        $apiParams = [];
        $apiParams['kind'] = $kind;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['address_id'] = $addressId;

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }
        $apiParams['phone'] = $phone;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * A contact point is WHERE one kind of document goes for one company: the
     * invoice to accounts payable, the order confirmation to the buyer who placed
     * it, the shipping notice to goods-in, the dunning letter to whoever settles
     * it. An ERP keeps these as four separate addresses per debtor and they had
     * nowhere to land here — the `email` of an address is the delivery's, not a
     * document's — so these rows create a home rather than moving one. Exactly
     * one point per company and kind is flagged as the one to use. Removes the
     * point. If it was the flagged one, the next point of that kind takes over
     * — so the kind keeps an answer for as long as it has any point at all, and
     * the company is left with none only once the last one goes. Nothing else in
     * this app points at it, so nothing else goes with it.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactPointsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contact_points/{id}'
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
     * A contact point is WHERE one kind of document goes for one company: the
     * invoice to accounts payable, the order confirmation to the buyer who placed
     * it, the shipping notice to goods-in, the dunning letter to whoever settles
     * it. An ERP keeps these as four separate addresses per debtor and they had
     * nowhere to land here — the `email` of an address is the delivery's, not a
     * document's — so these rows create a home rather than moving one. Exactly
     * one point per company and kind is flagged as the one to use. One contact
     * point by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactPointsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contact_points/{id}'
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
     * A contact point is WHERE one kind of document goes for one company: the
     * invoice to accounts payable, the order confirmation to the buyer who placed
     * it, the shipping notice to goods-in, the dunning letter to whoever settles
     * it. An ERP keeps these as four separate addresses per debtor and they had
     * nowhere to land here — the `email` of an address is the delivery's, not a
     * document's — so these rows create a home rather than moving one. Exactly
     * one point per company and kind is flagged as the one to use. A partial
     * update — send only what changes. The owning company is fixed (the flag is
     * scoped by it, so moving a point between companies would move an invariant
     * with it) and an empty body is refused. A flag MOVES rather than switching
     * off: send `is_primary` on the point that should take over, because a kind
     * with points and no flag is a question with no answer. Two rows of this
     * tenant may not share the combination of `organization_id` + `kind` (while
     * is_primary) or `external_id` (while external_id IS NOT NULL).
     *
     * @param string $id
     * @param ?string $addressId
     * @param ?string $email
     * @param ?string $externalId
     * @param ?bool $isPrimary
     * @param ?string $kind
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function customersContactPointsUpdate(string $id, ?string $addressId = null, ?string $email = null, ?string $externalId = null, ?bool $isPrimary = null, ?string $kind = null, ?string $organizationId = null, ?string $phone = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contact_points/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['address_id'] = $addressId;
        $apiParams['email'] = $email;
        $apiParams['external_id'] = $externalId;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }
        $apiParams['phone'] = $phone;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Every derived column again, from the rows as they stand: each company's
     * city, revenue of 365 days, last order, main contact and account manager
     * (from the sales-reps app, when it answers), each person's shop access, and
     * how many people hold each role. Every write of this app keeps them already;
     * this is for rows written around it — an import straight into a table —
     * and for the first run after the release that added them. Only what is wrong
     * is written, so it is free to repeat. The hourly metrics tick runs it too.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersDerivedRefresh(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/derived/refresh'
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
     * @param ?string $blockReason
     * @param ?string $blockNote
     * @param ?string $blockedAt
     * @param ?string $blockedBy
     * @param ?string $lifecycleStage
     * @param ?string $paymentTerms
     * @param ?CreditLimitMode $creditLimitMode
     * @param ?float $creditLimit
     * @param ?float $balance
     * @param ?float $balanceDue
     * @param ?float $creditAvailable
     * @param ?int $creditUtilisation
     * @param ?string $priceList
     * @param ?ShippingAdvice $shippingAdvice
     * @param ?string $locationCode
     * @param ?bool $deliveryBlock
     * @param ?string $deliveryBlockReason
     * @param ?string $deliveryBlockedAt
     * @param ?string $deliveryBlockedBy
     * @param ?string $primaryContactId
     * @param ?string $parentOrganizationId
     * @param ?string $city
     * @param ?string $accountManagerName
     * @param ?float $revenue365d
     * @param ?string $lastOrderAt
     * @param ?string $externalTeamId
     * @param ?string $externalId
     * @param ?string $sourceSyncedAt
     * @param ?string $deletedAt
     * @param ?string $deletedBy
     * @param ?string $deletedById
     * @param ?string $trashBatch
     * @param ?string $purgeAt
     * @param ?string $purgeBlockedReason
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?Trashed $trashed
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsList(?string $id = null, ?string $name = null, ?string $vatId = null, ?string $branche = null, ?string $customerNumber = null, ?CustomersOrganizationsListStatus $status = null, ?string $blockReason = null, ?string $blockNote = null, ?string $blockedAt = null, ?string $blockedBy = null, ?string $lifecycleStage = null, ?string $paymentTerms = null, ?CreditLimitMode $creditLimitMode = null, ?float $creditLimit = null, ?float $balance = null, ?float $balanceDue = null, ?float $creditAvailable = null, ?int $creditUtilisation = null, ?string $priceList = null, ?ShippingAdvice $shippingAdvice = null, ?string $locationCode = null, ?bool $deliveryBlock = null, ?string $deliveryBlockReason = null, ?string $deliveryBlockedAt = null, ?string $deliveryBlockedBy = null, ?string $primaryContactId = null, ?string $parentOrganizationId = null, ?string $city = null, ?string $accountManagerName = null, ?float $revenue365d = null, ?string $lastOrderAt = null, ?string $externalTeamId = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?string $createdAt = null, ?string $updatedAt = null, ?Trashed $trashed = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
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

        if (!is_null($blockReason)) {
            $apiParams['block_reason'] = $blockReason;
        }

        if (!is_null($blockNote)) {
            $apiParams['block_note'] = $blockNote;
        }

        if (!is_null($blockedAt)) {
            $apiParams['blocked_at'] = $blockedAt;
        }

        if (!is_null($blockedBy)) {
            $apiParams['blocked_by'] = $blockedBy;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }

        if (!is_null($paymentTerms)) {
            $apiParams['payment_terms'] = $paymentTerms;
        }

        if (!is_null($creditLimitMode)) {
            $apiParams['credit_limit_mode'] = $creditLimitMode;
        }

        if (!is_null($creditLimit)) {
            $apiParams['credit_limit'] = $creditLimit;
        }

        if (!is_null($balance)) {
            $apiParams['balance'] = $balance;
        }

        if (!is_null($balanceDue)) {
            $apiParams['balance_due'] = $balanceDue;
        }

        if (!is_null($creditAvailable)) {
            $apiParams['credit_available'] = $creditAvailable;
        }

        if (!is_null($creditUtilisation)) {
            $apiParams['credit_utilisation'] = $creditUtilisation;
        }

        if (!is_null($priceList)) {
            $apiParams['price_list'] = $priceList;
        }

        if (!is_null($shippingAdvice)) {
            $apiParams['shipping_advice'] = $shippingAdvice;
        }

        if (!is_null($locationCode)) {
            $apiParams['location_code'] = $locationCode;
        }

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($deliveryBlockReason)) {
            $apiParams['delivery_block_reason'] = $deliveryBlockReason;
        }

        if (!is_null($deliveryBlockedAt)) {
            $apiParams['delivery_blocked_at'] = $deliveryBlockedAt;
        }

        if (!is_null($deliveryBlockedBy)) {
            $apiParams['delivery_blocked_by'] = $deliveryBlockedBy;
        }

        if (!is_null($primaryContactId)) {
            $apiParams['primary_contact_id'] = $primaryContactId;
        }

        if (!is_null($parentOrganizationId)) {
            $apiParams['parent_organization_id'] = $parentOrganizationId;
        }

        if (!is_null($city)) {
            $apiParams['city'] = $city;
        }

        if (!is_null($accountManagerName)) {
            $apiParams['account_manager_name'] = $accountManagerName;
        }

        if (!is_null($revenue365d)) {
            $apiParams['revenue_365d'] = $revenue365d;
        }

        if (!is_null($lastOrderAt)) {
            $apiParams['last_order_at'] = $lastOrderAt;
        }

        if (!is_null($externalTeamId)) {
            $apiParams['external_team_id'] = $externalTeamId;
        }

        if (!is_null($externalId)) {
            $apiParams['external_id'] = $externalId;
        }

        if (!is_null($sourceSyncedAt)) {
            $apiParams['source_synced_at'] = $sourceSyncedAt;
        }

        if (!is_null($deletedAt)) {
            $apiParams['deleted_at'] = $deletedAt;
        }

        if (!is_null($deletedBy)) {
            $apiParams['deleted_by'] = $deletedBy;
        }

        if (!is_null($deletedById)) {
            $apiParams['deleted_by_id'] = $deletedById;
        }

        if (!is_null($trashBatch)) {
            $apiParams['trash_batch'] = $trashBatch;
        }

        if (!is_null($purgeAt)) {
            $apiParams['purge_at'] = $purgeAt;
        }

        if (!is_null($purgeBlockedReason)) {
            $apiParams['purge_blocked_reason'] = $purgeBlockedReason;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }

        if (!is_null($updatedAt)) {
            $apiParams['updated_at'] = $updatedAt;
        }

        if (!is_null($trashed)) {
            $apiParams['trashed'] = $trashed;
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
     * tenant may not share `customer_number` (while customer_number IS NOT NULL),
     * `external_team_id` (while external_team_id IS NOT NULL) or `external_id`
     * (while external_id IS NOT NULL).
     *
     * @param string $name
     * @param ?float $balance
     * @param ?float $balanceDue
     * @param ?string $branche
     * @param ?string $createdAt
     * @param ?float $creditLimit
     * @param ?CreditLimitMode $creditLimitMode
     * @param ?string $customerNumber
     * @param ?bool $deliveryBlock
     * @param ?string $lifecycleStage
     * @param ?string $locationCode
     * @param ?string $paymentTerms
     * @param ?string $priceList
     * @param ?array $settings
     * @param ?ShippingAdvice $shippingAdvice
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsCreate(string $name, ?float $balance = null, ?float $balanceDue = null, ?string $branche = null, ?string $createdAt = null, ?float $creditLimit = null, ?CreditLimitMode $creditLimitMode = null, ?string $customerNumber = null, ?bool $deliveryBlock = null, ?string $lifecycleStage = null, ?string $locationCode = null, ?string $paymentTerms = null, ?string $priceList = null, ?array $settings = null, ?ShippingAdvice $shippingAdvice = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['balance'] = $balance;
        $apiParams['balance_due'] = $balanceDue;
        $apiParams['branche'] = $branche;

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }
        $apiParams['credit_limit'] = $creditLimit;

        if (!is_null($creditLimitMode)) {
            $apiParams['credit_limit_mode'] = $creditLimitMode;
        }
        $apiParams['customer_number'] = $customerNumber;

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }
        $apiParams['location_code'] = $locationCode;
        $apiParams['payment_terms'] = $paymentTerms;
        $apiParams['price_list'] = $priceList;
        $apiParams['settings'] = $settings;
        $apiParams['shipping_advice'] = $shippingAdvice;

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
     * Found a business customer the way a merchant thinks of it: the company, its
     * billing address, its main contact — invited to the shop unless told
     * otherwise — and its responsible sales rep, in one call. The company and
     * the person go through the same checks their plain creates run; a failure
     * after the company exists takes everything this call founded back out. The
     * sales rep is best effort: an unknown code or an unreachable sales-reps app
     * founds the customer without one.
     *
     * @param string $name
     * @param ?string $accountManager
     * @param ?string $billingCity
     * @param ?string $billingCountry
     * @param ?string $billingStreet
     * @param ?string $billingZip
     * @param ?string $branche
     * @param ?string $contactEmail
     * @param ?string $contactFirstName
     * @param ?string $contactJobTitle
     * @param ?string $contactLastName
     * @param ?string $contactPhone
     * @param ?string $contactRole
     * @param ?string $customerNumber
     * @param ?string $lifecycleStage
     * @param ?string $paymentTerms
     * @param ?bool $sendInvite
     * @param ?string $vatId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsOnboard(string $name, ?string $accountManager = null, ?string $billingCity = null, ?string $billingCountry = null, ?string $billingStreet = null, ?string $billingZip = null, ?string $branche = null, ?string $contactEmail = null, ?string $contactFirstName = null, ?string $contactJobTitle = null, ?string $contactLastName = null, ?string $contactPhone = null, ?string $contactRole = null, ?string $customerNumber = null, ?string $lifecycleStage = null, ?string $paymentTerms = null, ?bool $sendInvite = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations/onboard'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['account_manager'] = $accountManager;
        $apiParams['billing_city'] = $billingCity;
        $apiParams['billing_country'] = $billingCountry;
        $apiParams['billing_street'] = $billingStreet;
        $apiParams['billing_zip'] = $billingZip;
        $apiParams['branche'] = $branche;
        $apiParams['contact_email'] = $contactEmail;
        $apiParams['contact_first_name'] = $contactFirstName;
        $apiParams['contact_job_title'] = $contactJobTitle;
        $apiParams['contact_last_name'] = $contactLastName;
        $apiParams['contact_phone'] = $contactPhone;
        $apiParams['contact_role'] = $contactRole;
        $apiParams['customer_number'] = $customerNumber;
        $apiParams['lifecycle_stage'] = $lifecycleStage;
        $apiParams['payment_terms'] = $paymentTerms;

        if (!is_null($sendInvite)) {
            $apiParams['send_invite'] = $sendInvite;
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
     * Deletes every organization in the trash for good, oldest first and at most
     * fifty per call, each checked on its own exactly like a second DELETE. A
     * organization something still blocks stays in the trash and is listed with
     * the reason; the rest go. POST again while `more` is true. An
     * administrator's right, never a buyer's.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsTrashEmpty(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations/trash/empty'
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
     * An organization is a buying COMPANY — the unit a contract, a credit
     * limit, a price list and a payment term belong to, and the unit an order is
     * placed on behalf of. It is not a household and not a person: the people are
     * `contacts`, and a company with no contacts yet is a perfectly normal row.
     * Every organization is mirrored into platform auth as a team, so a name
     * written here is the name storefront authentication shows. The first DELETE
     * moves the organization to the trash: it keeps everything that points at it,
     * leaves every list, and can no longer sign in or be signed in for. An
     * organization takes its live contacts along as one group: their logins are
     * switched off and their sessions ended, nothing is deleted. A second DELETE
     * on a organization already in the trash deletes it for good, with its
     * platform team and the logins of the contacts that went with it — refused
     * while another app still holds an open order, quote, purchase request or
     * approval, an enabled punchout account, a punchout account naming the person
     * as its fallback contact, a customer price list, an active cost centre or a
     * personal voucher. An app that does not answer blocks too. The daily purge
     * runs the same delete once the tenant's trash retention has run out.
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
     * customer_number IS NOT NULL), `external_team_id` (while external_team_id IS
     * NOT NULL) or `external_id` (while external_id IS NOT NULL).
     *
     * @param string $id
     * @param ?float $balance
     * @param ?float $balanceDue
     * @param ?string $branche
     * @param ?float $creditLimit
     * @param ?CreditLimitMode $creditLimitMode
     * @param ?string $customerNumber
     * @param ?bool $deliveryBlock
     * @param ?string $lifecycleStage
     * @param ?string $locationCode
     * @param ?string $name
     * @param ?string $paymentTerms
     * @param ?string $priceList
     * @param ?array $settings
     * @param ?ShippingAdvice $shippingAdvice
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsUpdate(string $id, ?float $balance = null, ?float $balanceDue = null, ?string $branche = null, ?float $creditLimit = null, ?CreditLimitMode $creditLimitMode = null, ?string $customerNumber = null, ?bool $deliveryBlock = null, ?string $lifecycleStage = null, ?string $locationCode = null, ?string $name = null, ?string $paymentTerms = null, ?string $priceList = null, ?array $settings = null, ?ShippingAdvice $shippingAdvice = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['balance'] = $balance;
        $apiParams['balance_due'] = $balanceDue;
        $apiParams['branche'] = $branche;
        $apiParams['credit_limit'] = $creditLimit;

        if (!is_null($creditLimitMode)) {
            $apiParams['credit_limit_mode'] = $creditLimitMode;
        }
        $apiParams['customer_number'] = $customerNumber;

        if (!is_null($deliveryBlock)) {
            $apiParams['delivery_block'] = $deliveryBlock;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }
        $apiParams['location_code'] = $locationCode;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['payment_terms'] = $paymentTerms;
        $apiParams['price_list'] = $priceList;
        $apiParams['settings'] = $settings;
        $apiParams['shipping_advice'] = $shippingAdvice;

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

    /**
     * A block is a decision with a reason, not a field somebody edits. `kind:
     * order` sets `status` to 'blocked' with the reason, the note, when and who
     * — every contact behind the company stops buying and
     * `organization.blocked` is published, exactly as when the status is edited.
     * `kind: delivery` sets `delivery_block`: orders are still taken and nothing
     * ships. Both land on the company's timeline as a system entry. Lifting a
     * block is its own call, with a note.
     *
     * @param string $id
     * @param CustomersOrganizationsBlockReason $reason
     * @param ?string $actor
     * @param ?CustomersOrganizationsBlockKind $kind
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsBlock(string $id, CustomersOrganizationsBlockReason $reason, ?string $actor = null, ?CustomersOrganizationsBlockKind $kind = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/block'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;
        $apiParams['actor'] = $actor;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['note'] = $note;

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
     * The account manager, from the sales-reps app, and the main contact, from
     * here — what the card on the company's page shows. The sales-reps half is
     * null when that app cannot be asked, so the card still names the main
     * contact.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsCare(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/care'
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
     * The credit a company buys on is changed with a reason, so its timeline says
     * what it was, what it is and why. The same rules as an edit apply: a limited
     * mode needs an amount, any other mode clears it.
     *
     * @param string $id
     * @param CustomersOrganizationsChangeCreditReason $reason
     * @param ?float $creditLimit
     * @param ?CreditLimitMode $creditLimitMode
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsChangeCredit(string $id, CustomersOrganizationsChangeCreditReason $reason, ?float $creditLimit = null, ?CreditLimitMode $creditLimitMode = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/change-credit'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['reason'] = $reason;
        $apiParams['credit_limit'] = $creditLimit;

        if (!is_null($creditLimitMode)) {
            $apiParams['credit_limit_mode'] = $creditLimitMode;
        }
        $apiParams['note'] = $note;

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
     * Brings an organization back from the trash together with the contacts that
     * went with it — the ones that carry its `trash_batch`. A contact trashed
     * on its own before stays in the trash. Their logins are switched back on
     * unless the record itself says no (blocked, or an undecided registration).
     * Needs the same right as the delete.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/restore'
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
     * Who is responsible for a customer lives in the sales-reps app, so this call
     * asks it: the coverage of the rep and the company is recorded when there is
     * none, and the rep is made the responsible one there. The rep's name is
     * copied to `account_manager_name` for the company list, and the change lands
     * on the company's timeline.
     *
     * @param string $id
     * @param string $repCode
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsSetAccountManager(string $id, string $repCode): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/set-account-manager'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['rep_code'] = $repCode;

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
     * Mark one person of the company as its main contact — the recipient of
     * documents and invitations — and release whoever held it, in one call.
     * `primary_contact_id` follows. Naming the main contact again changes
     * nothing.
     *
     * @param string $id
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsSetPrimaryContact(string $id, string $contactId): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/set-primary-contact'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['contact_id'] = $contactId;

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
     * Lift the delivery block of a company, with a note saying why. The reason,
     * the note, when and who are cleared from the record and the lifting lands on
     * the company's timeline.
     *
     * @param string $id
     * @param string $note
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsUnblockDelivery(string $id, string $note): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/unblock-delivery'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['note'] = $note;

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
     * Lift the order block of a company, with a note saying why. The reason, the
     * note, when and who are cleared from the record and the lifting lands on the
     * company's timeline.
     *
     * @param string $id
     * @param string $note
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsUnblockOrder(string $id, string $note): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}/unblock-order'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['note'] = $note;

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