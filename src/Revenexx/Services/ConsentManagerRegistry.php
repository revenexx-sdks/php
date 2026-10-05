<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Kind;
use Revenexx\Enums\LegalBasis;
use Revenexx\Enums\GoogleSignals;
use Revenexx\Enums\LegalBasisOverride;
use Revenexx\Enums\ConsentManagerVocabulariesGetName;

class ConsentManagerRegistry extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * The vendor catalogue this version of the app ships — the vendors met in
     * B2B shops, each with company, purposes, hosts and cookies in German and
     * English — and, per entry, whether this tenant adopted it and whether the
     * copy is older. `?category=` narrows it to one group (analytics,
     * advertising, chat, external_media, …).
     *
     * @param ?string $category
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCatalogList(?string $category = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/catalog'
        );

        $apiParams = [];

        if (!is_null($category)) {
            $apiParams['category'] = $category;
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
     * Creates a vendor from a catalogue entry — its fields, its cookies and its
     * purpose links — and records the catalogue key and version it came from.
     * The copy is the tenant's: nothing re-reads the catalogue. Adopting an entry
     * already adopted is refused unless `refresh: true` is sent, which takes the
     * catalogue's current fields and replaces the cookies. A `legal_basis_hint`
     * that differs from the purposes' basis becomes the vendor's
     * `legal_basis_override`.
     *
     * @param string $key
     * @param ?array $purposes
     * @param ?bool $refresh
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCatalogAdopt(string $key, ?array $purposes = null, ?bool $refresh = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/catalog/adopt'
        );

        $apiParams = [];
        $apiParams['key'] = $key;

        if (!is_null($purposes)) {
            $apiParams['purposes'] = $purposes;
        }

        if (!is_null($refresh)) {
            $apiParams['refresh'] = $refresh;
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
     * Cookies and storage entries, usually filtered with `?vendor_id=`.
     *
     * @param ?string $id
     * @param ?string $vendorId
     * @param ?string $name
     * @param ?Kind $kind
     * @param ?string $host
     * @param ?int $position
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCookiesList(?string $id = null, ?string $vendorId = null, ?string $name = null, ?Kind $kind = null, ?string $host = null, ?int $position = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/cookies'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($vendorId)) {
            $apiParams['vendor_id'] = $vendorId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($host)) {
            $apiParams['host'] = $host;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Declare one cookie or storage entry of a vendor this tenant keeps.
     *
     * @param string $name
     * @param string $vendorId
     * @param ?array $description
     * @param ?array $duration
     * @param ?string $host
     * @param ?Kind $kind
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCookiesCreate(string $name, string $vendorId, ?array $description = null, ?array $duration = null, ?string $host = null, ?Kind $kind = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/cookies'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
        $apiParams['vendor_id'] = $vendorId;
        $apiParams['description'] = $description;
        $apiParams['duration'] = $duration;
        $apiParams['host'] = $host;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

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
     * Removes one cookie.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCookiesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/cookies/{id}'
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
     * One cookie by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCookiesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/cookies/{id}'
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
     * Partial update of one cookie.
     *
     * @param string $id
     * @param ?array $description
     * @param ?array $duration
     * @param ?string $host
     * @param ?Kind $kind
     * @param ?string $name
     * @param ?int $position
     * @param ?string $vendorId
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerCookiesUpdate(string $id, ?array $description = null, ?array $duration = null, ?string $host = null, ?Kind $kind = null, ?string $name = null, ?int $position = null, ?string $vendorId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/cookies/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['description'] = $description;
        $apiParams['duration'] = $duration;
        $apiParams['host'] = $host;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($vendorId)) {
            $apiParams['vendor_id'] = $vendorId;
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
     * Creates the five standard purposes (necessary, statistics, marketing,
     * comfort, external_media), the shop's banner draft with a German and an
     * English text, and exactly one vendor — `revenexx`, the shop's own
     * necessary cookies — whatever of that is missing, and nothing else. The
     * catalogue is a library: every other vendor, necessary ones included,
     * appears only once the tenant adopts it. Idempotent by code: a purpose or
     * draft the merchant changed is left exactly as it is. The install
     * announcement runs the same seeding, but it is not reliably delivered, so a
     * live check calls this first.
     *
     * @param array $data
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerDefaultsRun(array $data): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/defaults'
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
     * Every purpose of this tenant (and market), with the legal basis that
     * decides whether its tools load before a decision.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?LegalBasis $legalBasis
     * @param ?int $position
     * @param ?bool $isActive
     * @param ?bool $isSystem
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPurposesList(?string $id = null, ?string $code = null, ?LegalBasis $legalBasis = null, ?int $position = null, ?bool $isActive = null, ?bool $isSystem = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/purposes'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($legalBasis)) {
            $apiParams['legal_basis'] = $legalBasis;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

        if (!is_null($isSystem)) {
            $apiParams['is_system'] = $isSystem;
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
     * Add a purpose beyond the five seeded ones. `code`, `name` and `legal_basis`
     * are owed; the code is fixed once created.
     *
     * @param string $code
     * @param LegalBasis $legalBasis
     * @param ?array $name
     * @param ?array $description
     * @param ?array $googleSignals
     * @param ?bool $isActive
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPurposesCreate(string $code, LegalBasis $legalBasis, ?array $name, ?array $description = null, ?array $googleSignals = null, ?bool $isActive = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/purposes'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['legal_basis'] = $legalBasis;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['google_signals'] = $googleSignals;

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

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
     * Removes a purpose. Refused while any vendor serves it — switch it
     * inactive instead, which leaves it out of the next version.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPurposesDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/purposes/{id}'
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
     * One purpose by id.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPurposesGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/purposes/{id}'
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
     * Partial update. The code may be sent only unchanged — vendors, records
     * and the catalogue name it. Changing the legal basis affects versions
     * published afterwards; every record keeps the basis it was made under.
     *
     * @param string $id
     * @param ?string $code
     * @param ?array $description
     * @param ?array $googleSignals
     * @param ?bool $isActive
     * @param ?LegalBasis $legalBasis
     * @param ?array $name
     * @param ?int $position
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerPurposesUpdate(string $id, ?string $code = null, ?array $description = null, ?array $googleSignals = null, ?bool $isActive = null, ?LegalBasis $legalBasis = null, ?array $name = null, ?int $position = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/purposes/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['description'] = $description;
        $apiParams['google_signals'] = $googleSignals;

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }

        if (!is_null($legalBasis)) {
            $apiParams['legal_basis'] = $legalBasis;
        }
        $apiParams['name'] = $name;

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
     * Every vendor of this tenant (and market). An adopted vendor whose catalogue
     * entry is newer carries `catalog_update`; its fields are untouched until the
     * merchant refreshes it.
     *
     * @param ?string $id
     * @param ?string $code
     * @param ?string $name
     * @param ?string $category
     * @param ?string $company
     * @param ?string $address
     * @param ?string $country
     * @param ?string $privacyPolicyUrl
     * @param ?string $dpaUrl
     * @param ?bool $thirdCountryTransfer
     * @param ?string $transferBasis
     * @param ?string $registryKey
     * @param ?string $logo
     * @param ?LegalBasisOverride $legalBasisOverride
     * @param ?string $catalogKey
     * @param ?string $catalogVersion
     * @param ?int $position
     * @param ?bool $isActive
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVendorsList(?string $id = null, ?string $code = null, ?string $name = null, ?string $category = null, ?string $company = null, ?string $address = null, ?string $country = null, ?string $privacyPolicyUrl = null, ?string $dpaUrl = null, ?bool $thirdCountryTransfer = null, ?string $transferBasis = null, ?string $registryKey = null, ?string $logo = null, ?LegalBasisOverride $legalBasisOverride = null, ?string $catalogKey = null, ?string $catalogVersion = null, ?int $position = null, ?bool $isActive = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/vendors'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($category)) {
            $apiParams['category'] = $category;
        }

        if (!is_null($company)) {
            $apiParams['company'] = $company;
        }

        if (!is_null($address)) {
            $apiParams['address'] = $address;
        }

        if (!is_null($country)) {
            $apiParams['country'] = $country;
        }

        if (!is_null($privacyPolicyUrl)) {
            $apiParams['privacy_policy_url'] = $privacyPolicyUrl;
        }

        if (!is_null($dpaUrl)) {
            $apiParams['dpa_url'] = $dpaUrl;
        }

        if (!is_null($thirdCountryTransfer)) {
            $apiParams['third_country_transfer'] = $thirdCountryTransfer;
        }

        if (!is_null($transferBasis)) {
            $apiParams['transfer_basis'] = $transferBasis;
        }

        if (!is_null($registryKey)) {
            $apiParams['registry_key'] = $registryKey;
        }

        if (!is_null($logo)) {
            $apiParams['logo'] = $logo;
        }

        if (!is_null($legalBasisOverride)) {
            $apiParams['legal_basis_override'] = $legalBasisOverride;
        }

        if (!is_null($catalogKey)) {
            $apiParams['catalog_key'] = $catalogKey;
        }

        if (!is_null($catalogVersion)) {
            $apiParams['catalog_version'] = $catalogVersion;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
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
     * Declare a vendor the catalogue does not carry. `code` and `name` are owed;
     * `purposes` names the purpose codes it serves — a vendor with none cannot
     * be published.
     *
     * @param string $code
     * @param string $name
     * @param ?string $address
     * @param ?string $category
     * @param ?array $chains
     * @param ?string $company
     * @param ?string $country
     * @param ?array $description
     * @param ?string $dpaUrl
     * @param ?array $hosts
     * @param ?bool $isActive
     * @param ?LegalBasisOverride $legalBasisOverride
     * @param ?string $logo
     * @param ?int $position
     * @param ?string $privacyPolicyUrl
     * @param ?array $purposes
     * @param ?string $registryKey
     * @param ?array $retentionNote
     * @param ?bool $thirdCountryTransfer
     * @param ?string $transferBasis
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVendorsCreate(string $code, string $name, ?string $address = null, ?string $category = null, ?array $chains = null, ?string $company = null, ?string $country = null, ?array $description = null, ?string $dpaUrl = null, ?array $hosts = null, ?bool $isActive = null, ?LegalBasisOverride $legalBasisOverride = null, ?string $logo = null, ?int $position = null, ?string $privacyPolicyUrl = null, ?array $purposes = null, ?string $registryKey = null, ?array $retentionNote = null, ?bool $thirdCountryTransfer = null, ?string $transferBasis = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/vendors'
        );

        $apiParams = [];
        $apiParams['code'] = $code;
        $apiParams['name'] = $name;
        $apiParams['address'] = $address;
        $apiParams['category'] = $category;
        $apiParams['chains'] = $chains;
        $apiParams['company'] = $company;
        $apiParams['country'] = $country;
        $apiParams['description'] = $description;
        $apiParams['dpa_url'] = $dpaUrl;
        $apiParams['hosts'] = $hosts;

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }
        $apiParams['legal_basis_override'] = $legalBasisOverride;
        $apiParams['logo'] = $logo;

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['privacy_policy_url'] = $privacyPolicyUrl;

        if (!is_null($purposes)) {
            $apiParams['purposes'] = $purposes;
        }
        $apiParams['registry_key'] = $registryKey;
        $apiParams['retention_note'] = $retentionNote;

        if (!is_null($thirdCountryTransfer)) {
            $apiParams['third_country_transfer'] = $thirdCountryTransfer;
        }
        $apiParams['transfer_basis'] = $transferBasis;

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
     * Removes the vendor, its cookies and its purpose links. Published versions
     * keep naming it — they are frozen.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVendorsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/vendors/{id}'
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
     * One vendor, with the codes of the purposes it serves, its cookies and any
     * newer catalogue entry.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVendorsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/vendors/{id}'
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
     * Partial update. `purposes`, when sent, replaces the vendor's purposes. The
     * code may be sent only unchanged.
     *
     * @param string $id
     * @param ?string $address
     * @param ?string $category
     * @param ?array $chains
     * @param ?string $code
     * @param ?string $company
     * @param ?string $country
     * @param ?array $description
     * @param ?string $dpaUrl
     * @param ?array $hosts
     * @param ?bool $isActive
     * @param ?LegalBasisOverride $legalBasisOverride
     * @param ?string $logo
     * @param ?string $name
     * @param ?int $position
     * @param ?string $privacyPolicyUrl
     * @param ?array $purposes
     * @param ?string $registryKey
     * @param ?array $retentionNote
     * @param ?bool $thirdCountryTransfer
     * @param ?string $transferBasis
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVendorsUpdate(string $id, ?string $address = null, ?string $category = null, ?array $chains = null, ?string $code = null, ?string $company = null, ?string $country = null, ?array $description = null, ?string $dpaUrl = null, ?array $hosts = null, ?bool $isActive = null, ?LegalBasisOverride $legalBasisOverride = null, ?string $logo = null, ?string $name = null, ?int $position = null, ?string $privacyPolicyUrl = null, ?array $purposes = null, ?string $registryKey = null, ?array $retentionNote = null, ?bool $thirdCountryTransfer = null, ?string $transferBasis = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/consent-manager/vendors/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;
        $apiParams['address'] = $address;
        $apiParams['category'] = $category;
        $apiParams['chains'] = $chains;

        if (!is_null($code)) {
            $apiParams['code'] = $code;
        }
        $apiParams['company'] = $company;
        $apiParams['country'] = $country;
        $apiParams['description'] = $description;
        $apiParams['dpa_url'] = $dpaUrl;
        $apiParams['hosts'] = $hosts;

        if (!is_null($isActive)) {
            $apiParams['is_active'] = $isActive;
        }
        $apiParams['legal_basis_override'] = $legalBasisOverride;
        $apiParams['logo'] = $logo;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($position)) {
            $apiParams['position'] = $position;
        }
        $apiParams['privacy_policy_url'] = $privacyPolicyUrl;

        if (!is_null($purposes)) {
            $apiParams['purposes'] = $purposes;
        }
        $apiParams['registry_key'] = $registryKey;
        $apiParams['retention_note'] = $retentionNote;

        if (!is_null($thirdCountryTransfer)) {
            $apiParams['third_country_transfer'] = $thirdCountryTransfer;
        }
        $apiParams['transfer_basis'] = $transferBasis;

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
     * The value sets this app publishes, without their values: legal-bases,
     * cookie-kinds, record-actions, record-surfaces, banner-layouts,
     * google-signals.
     *
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVocabulariesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/consent-manager/vocabularies'
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
     * One value set with every value and its German and English label. The sets
     * are closed: a value outside one is refused by the routes that take it.
     *
     * @param ConsentManagerVocabulariesGetName $name
     * @throws RevenexxException
     * @return array
     */
    public function consentManagerVocabulariesGet(ConsentManagerVocabulariesGetName $name): array
    {
        $apiPath = str_replace(
            ['{name}'],
            [$name],
            '/v1/consent-manager/vocabularies/{name}'
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