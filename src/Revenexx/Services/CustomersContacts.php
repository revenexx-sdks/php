<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Status;
use Revenexx\Enums\RegistrationStatus;
use Revenexx\Enums\CustomersContactsCreateRegistrationStatus;
use Revenexx\Enums\ContactStatus;
use Revenexx\Enums\ContactActivityKind;

class CustomersContacts extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * A contact event is one entry on a customer's timeline: an activity somebody
     * logged (a call, a visit, a meeting, a note) or a registration decision this
     * app recorded itself. Every entry is keyed by a CONTACT and stamped with the
     * organization derived from that contact, so a company's history is one
     * indexed read rather than a join. Append-only — there is no update and no
     * delete, which is what makes it usable as evidence. The activity feed,
     * filtered by whichever column the question needs: `contact_id` for one
     * person, `organization_id` for a whole company, `kind` for one type of
     * activity. `kind: "system"` is this app's own registration decision trail
     * (`registration.submitted` / `.approved` / `.rejected`), and no caller may
     * file one of those. Paged with `limit`/`offset`/`order`; newest first is
     * `order=occurred_at.desc`.
     *
     * @param ?string $id
     * @param ?string $contactId
     * @param ?string $organizationId
     * @param ?string $kind
     * @param ?string $name
     * @param ?string $subject
     * @param ?string $actor
     * @param ?string $occurredAt
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersContactEventsList(?string $id = null, ?string $contactId = null, ?string $organizationId = null, ?string $kind = null, ?string $name = null, ?string $subject = null, ?string $actor = null, ?string $occurredAt = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contact_events'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($contactId)) {
            $apiParams['contact_id'] = $contactId;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($subject)) {
            $apiParams['subject'] = $subject;
        }

        if (!is_null($actor)) {
            $apiParams['actor'] = $actor;
        }

        if (!is_null($occurredAt)) {
            $apiParams['occurred_at'] = $occurredAt;
        }

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
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
     * A contact event is one entry on a customer's timeline: an activity somebody
     * logged (a call, a visit, a meeting, a note) or a registration decision this
     * app recorded itself. Every entry is keyed by a CONTACT and stamped with the
     * organization derived from that contact, so a company's history is one
     * indexed read rather than a join. Append-only — there is no update and no
     * delete, which is what makes it usable as evidence. One timeline entry by
     * id, as it was written. Entries are never edited, so what this answers is
     * what was recorded at the time.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactEventsGet(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contact_events/{id}'
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. The people
     * list, and the read behind an approval queue: `registration_status=pending`
     * is every application waiting for a decision. Every column is a filter —
     * `external_user_id` in particular is how a storefront turns a platform auth
     * id back into a customer — and the page is `limit`/`offset`/`order`.
     *
     * @param ?string $id
     * @param ?string $organizationId
     * @param ?string $email
     * @param ?string $firstName
     * @param ?string $lastName
     * @param ?string $phone
     * @param ?string $jobTitle
     * @param ?string $role
     * @param ?Status $status
     * @param ?float $orderApprovalLimit
     * @param ?RegistrationStatus $registrationStatus
     * @param ?string $registrationDecidedAt
     * @param ?string $registrationDecidedBy
     * @param ?string $registrationReason
     * @param ?string $locale
     * @param ?bool $isPrimary
     * @param ?string $externalUserId
     * @param ?string $createdAt
     * @param ?string $updatedAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsList(?string $id = null, ?string $organizationId = null, ?string $email = null, ?string $firstName = null, ?string $lastName = null, ?string $phone = null, ?string $jobTitle = null, ?string $role = null, ?Status $status = null, ?float $orderApprovalLimit = null, ?RegistrationStatus $registrationStatus = null, ?string $registrationDecidedAt = null, ?string $registrationDecidedBy = null, ?string $registrationReason = null, ?string $locale = null, ?bool $isPrimary = null, ?string $externalUserId = null, ?string $createdAt = null, ?string $updatedAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contacts'
        );

        $apiParams = [];

        if (!is_null($id)) {
            $apiParams['id'] = $id;
        }

        if (!is_null($organizationId)) {
            $apiParams['organization_id'] = $organizationId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($firstName)) {
            $apiParams['first_name'] = $firstName;
        }

        if (!is_null($lastName)) {
            $apiParams['last_name'] = $lastName;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($jobTitle)) {
            $apiParams['job_title'] = $jobTitle;
        }

        if (!is_null($role)) {
            $apiParams['role'] = $role;
        }

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($orderApprovalLimit)) {
            $apiParams['order_approval_limit'] = $orderApprovalLimit;
        }

        if (!is_null($registrationStatus)) {
            $apiParams['registration_status'] = $registrationStatus;
        }

        if (!is_null($registrationDecidedAt)) {
            $apiParams['registration_decided_at'] = $registrationDecidedAt;
        }

        if (!is_null($registrationDecidedBy)) {
            $apiParams['registration_decided_by'] = $registrationDecidedBy;
        }

        if (!is_null($registrationReason)) {
            $apiParams['registration_reason'] = $registrationReason;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }

        if (!is_null($externalUserId)) {
            $apiParams['external_user_id'] = $externalUserId;
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. Creates the
     * person and their platform login together, so a contact that exists can
     * always sign in. `role` names one of this tenant's own roles and decides
     * what they may do; `registration_status` may only be set to `pending` or
     * `approved` here, because a rejection has to carry a reason and that is the
     * reject route's job. `email` is the only field a create cannot omit;
     * everything else is optional or defaulted by the database. Two rows of this
     * tenant may not share `email` or `external_user_id` (while external_user_id
     * IS NOT NULL).
     *
     * @param string $email
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $jobTitle
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?float $orderApprovalLimit
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?CustomersContactsCreateRegistrationStatus $registrationStatus
     * @param ?string $role
     * @param ?ContactStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsCreate(string $email, ?string $firstName = null, ?bool $isPrimary = null, ?string $jobTitle = null, ?string $lastName = null, ?string $locale = null, ?float $orderApprovalLimit = null, ?string $organizationId = null, ?string $phone = null, ?CustomersContactsCreateRegistrationStatus $registrationStatus = null, ?string $role = null, ?ContactStatus $status = null): array
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
        $apiParams['job_title'] = $jobTitle;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['order_approval_limit'] = $orderApprovalLimit;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;

        if (!is_null($registrationStatus)) {
            $apiParams['registration_status'] = $registrationStatus;
        }

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
     * This is how a call, a visit, a meeting, an email or a plain note reaches
     * one person's timeline. It writes a contact_events row with kind != 'system'
     * and emits contact_event.created, so an activity travels on the same bus as
     * a registration decision and a timeline is one query rather than a union.
     * organization_id is DERIVED from the contact, never taken from the body —
     * an activity cannot be filed under a company the person does not belong to.
     *
     * @param string $contactId
     * @param string $subject
     * @param ?string $actor
     * @param ?ContactActivityKind $kind
     * @param ?string $note
     * @param ?string $occurredAt
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsEventsCreate(string $contactId, string $subject, ?string $actor = null, ?ContactActivityKind $kind = null, ?string $note = null, ?string $occurredAt = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/events'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['subject'] = $subject;
        $apiParams['actor'] = $actor;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['note'] = $note;
        $apiParams['occurred_at'] = $occurredAt;

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
     * Tell somebody they were added to a company. A deliberate act rather than a
     * side effect of creating the contact: a merchant entering a colleague from a
     * business card is not always ready to mail them, and "added" and "told" are
     * different decisions. No secret travels — the platform team membership is
     * confirmed as it is created, so there is nothing to accept; the message says
     * "you are in, here is the way in". Unlike the auth mails, a failure here IS
     * a failure: the identity service sends nothing for this occasion, so this is
     * the only message the person gets.
     *
     * @param string $contactId
     * @param string $url
     * @param ?string $invitedBy
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsInvite(string $contactId, string $url, ?string $invitedBy = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/invite'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['url'] = $url;
        $apiParams['invited_by'] = $invitedBy;

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
     * Computed from contacts.role on every call — the grants are never
     * persisted, so this always reflects the role the contact holds right now.
     *
     * @param string $contactId
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsPermissions(string $contactId): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/permissions'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Only reachable for a contact whose registration_status is 'pending' or
     * 'rejected' (approving a rejection reinstates it). Enables the platform user
     * FIRST — the password the applicant chose at submit time works
     * immediately, no new credential is issued — then sets
     * registration_status='approved' and status='active', and un-blocks the
     * organization this registration itself founded. Approving an
     * already-approved registration is a no-op that emits nothing, so a retry is
     * safe. Writes a contact_events row named 'registration.approved'.
     *
     * @param string $contactId
     * @param ?string $decidedBy
     * @throws RevenexxException
     * @return array
     */
    public function customersRegistrationsApprove(string $contactId, ?string $decidedBy = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/registration/approve'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['decided_by'] = $decidedBy;

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
     * Only reachable from 'pending'. Sets registration_status='rejected' and
     * status='blocked', keeps the platform user in place but disabled — the
     * email must not fall free for a silent second identity, and the merchant
     * keeps the record. Delete the contact to remove both. 'reason' is mandatory
     * and is stored on the contact plus carried in the event payload, so the
     * applicant can be told why. Rejecting an already-rejected registration is a
     * no-op. Writes a contact_events row named 'registration.rejected'.
     *
     * @param string $contactId
     * @param string $reason
     * @param ?string $decidedBy
     * @throws RevenexxException
     * @return array
     */
    public function customersRegistrationsReject(string $contactId, string $reason, ?string $decidedBy = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/registration/reject'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['reason'] = $reason;
        $apiParams['decided_by'] = $decidedBy;

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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. Removes the
     * person and their platform login, so they can no longer sign in anywhere.
     * Their company keeps trading; use `status: "blocked"` instead when the
     * intent is to stop one person without erasing what they did. Deleting one
     * takes every `contact_events` and `addresses` row that points at it with it
     * — the foreign keys decide, not this route.
     *
     * @param string $id
     * @throws RevenexxException
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. One person
     * by id. What they are ALLOWED to do is not in here: permissions are derived
     * from `role` at read time and answered by `GET
     * /customers/contacts/{contact_id}/permissions`.
     *
     * @param string $id
     * @throws RevenexxException
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. A partial
     * update — send only what changes. `external_user_id` and every
     * `registration_*` column are ignored: the link to platform auth is
     * mirror-managed, and registration state is only ever moved by the approve
     * and reject routes, which record why. Two rows of this tenant may not share
     * `email` or `external_user_id` (while external_user_id IS NOT NULL).
     *
     * @param string $id
     * @param ?string $email
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $jobTitle
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?float $orderApprovalLimit
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?CustomersContactsCreateRegistrationStatus $registrationStatus
     * @param ?string $role
     * @param ?ContactStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsUpdate(string $id, ?string $email = null, ?string $firstName = null, ?bool $isPrimary = null, ?string $jobTitle = null, ?string $lastName = null, ?string $locale = null, ?float $orderApprovalLimit = null, ?string $organizationId = null, ?string $phone = null, ?CustomersContactsCreateRegistrationStatus $registrationStatus = null, ?string $role = null, ?ContactStatus $status = null): array
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
        $apiParams['job_title'] = $jobTitle;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['order_approval_limit'] = $orderApprovalLimit;
        $apiParams['organization_id'] = $organizationId;
        $apiParams['phone'] = $phone;

        if (!is_null($registrationStatus)) {
            $apiParams['registration_status'] = $registrationStatus;
        }

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
     * Same row as the contact route, reached from the organization. 'contact_id'
     * is required and must belong to THIS organization — the picker offering
     * the contacts is not filtered, so the membership check here is what stops a
     * call with one company being filed under someone else's person.
     *
     * @param string $organizationId
     * @param string $contactId
     * @param string $subject
     * @param ?string $actor
     * @param ?ContactActivityKind $kind
     * @param ?string $note
     * @param ?string $occurredAt
     * @throws RevenexxException
     * @return array
     */
    public function customersOrganizationsEventsCreate(string $organizationId, string $contactId, string $subject, ?string $actor = null, ?ContactActivityKind $kind = null, ?string $note = null, ?string $occurredAt = null): array
    {
        $apiPath = str_replace(
            ['{organization_id}'],
            [$organizationId],
            '/v1/customers/organizations/{organization_id}/events'
        );

        $apiParams = [];
        $apiParams['organization_id'] = $organizationId;
        $apiParams['contact_id'] = $contactId;
        $apiParams['subject'] = $subject;
        $apiParams['actor'] = $actor;

        if (!is_null($kind)) {
            $apiParams['kind'] = $kind;
        }
        $apiParams['note'] = $note;
        $apiParams['occurred_at'] = $occurredAt;

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