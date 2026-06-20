<?php

namespace RevenexxAPIRevenexx\Services;

use RevenexxAPIRevenexx\RevenexxAPIRevenexxException;
use RevenexxAPIRevenexx\Client;
use RevenexxAPIRevenexx\Service;
use RevenexxAPIRevenexx\InputFile;
use RevenexxAPIRevenexx\Enums\AddressType;
use RevenexxAPIRevenexx\Enums\ContactRole;
use RevenexxAPIRevenexx\Enums\ContactStatus;
use RevenexxAPIRevenexx\Enums\OrganizationStatus;

class Customers extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAddressesList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/addresses'
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
     * @param ?AddressType $type
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAddressesCreate(string $city, string $country, string $street, string $zip, ?string $company = null, ?string $contactId = null, ?bool $isDefault = null, ?string $name = null, ?string $organizationId = null, ?string $phone = null, ?string $region = null, ?string $street2 = null, ?AddressType $type = null): array
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param ?AddressType $type
     * @param ?string $zip
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAddressesUpdate(string $id, ?string $city = null, ?string $company = null, ?string $contactId = null, ?string $country = null, ?bool $isDefault = null, ?string $name = null, ?string $organizationId = null, ?string $phone = null, ?string $region = null, ?string $street = null, ?string $street2 = null, ?AddressType $type = null, ?string $zip = null): array
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
     * @param string $email
     * @param string $password
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthLogin(string $email, string $password): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/login'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

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
     * @param string $sessionId
     * @param string $userId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthLogout(string $sessionId, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/logout'
        );

        $apiParams = [];
        $apiParams['session_id'] = $sessionId;
        $apiParams['user_id'] = $userId;

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
     * @param string $userId
     * @param ?string $sessionId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthMe(string $userId, ?string $sessionId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/me'
        );

        $apiParams = [];
        $apiParams['user_id'] = $userId;
        $apiParams['session_id'] = $sessionId;

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
     * @param string $email
     * @param string $url
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthRecovery(string $email, string $url): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/recovery'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['url'] = $url;

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
     * @param string $password
     * @param string $secret
     * @param string $userId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthRecoveryConfirm(string $password, string $secret, string $userId): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/recovery'
        );

        $apiParams = [];
        $apiParams['password'] = $password;
        $apiParams['secret'] = $secret;
        $apiParams['user_id'] = $userId;

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
     * @param string $email
     * @param string $password
     * @param ?string $firstName
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $organizationId
     * @param ?string $organizationName
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersAuthRegister(string $email, string $password, ?string $firstName = null, ?string $lastName = null, ?string $locale = null, ?string $organizationId = null, ?string $organizationName = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/auth/register'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;
        $apiParams['first_name'] = $firstName;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['organization_name'] = $organizationName;

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
    public function customersContactsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contacts'
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
     * @param string $email
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?ContactRole $role
     * @param ?ContactStatus $status
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersContactsCreate(string $email, ?string $firstName = null, ?bool $isPrimary = null, ?string $lastName = null, ?string $locale = null, ?string $organizationId = null, ?string $phone = null, ?ContactRole $role = null, ?ContactStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contacts'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['first_name'] = $firstName;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;

        if (!is_null($role)) {
            $apiParams['role'] = $role;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersContactsDelete(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contacts/{id}'
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
    public function customersContactsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contacts/{id}'
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
     * @param ?string $email
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?ContactRole $role
     * @param ?ContactStatus $status
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersContactsUpdate(string $id, ?string $email = null, ?string $firstName = null, ?bool $isPrimary = null, ?string $lastName = null, ?string $locale = null, ?string $organizationId = null, ?string $phone = null, ?ContactRole $role = null, ?ContactStatus $status = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contacts/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }
        $apiParams['first_name'] = $firstName;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;

        if (!is_null($role)) {
            $apiParams['role'] = $role;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
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
    public function customersOrganizationsList(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations'
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
     * @param string $name
     * @param ?array $settings
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersOrganizationsCreate(string $name, ?array $settings = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/organizations'
        );

        $apiParams = [];
        $apiParams['name'] = $name;
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @throws RevenexxAPIRevenexxException
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
     * @param string $id
     * @param ?string $name
     * @param ?array $settings
     * @param ?OrganizationStatus $status
     * @param ?string $vatId
     * @throws RevenexxAPIRevenexxException
     * @return array
     */
    public function customersOrganizationsUpdate(string $id, ?string $name = null, ?array $settings = null, ?OrganizationStatus $status = null, ?string $vatId = null): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/organizations/{id}'
        );

        $apiParams = [];
        $apiParams['id'] = $id;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
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