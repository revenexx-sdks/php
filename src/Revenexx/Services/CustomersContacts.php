<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\CustomersContactsListStatus;
use Revenexx\Enums\ShopAccess;
use Revenexx\Enums\OrderApprovalMode;
use Revenexx\Enums\RegistrationStatus;
use Revenexx\Enums\LeadSource;
use Revenexx\Enums\Trashed;
use Revenexx\Enums\CustomersContactsCreateRegistrationStatus;
use Revenexx\Enums\ContactStatus;
use Revenexx\Enums\ContactActivityKind;
use Revenexx\Enums\Reason;

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
     * @param ?string $dueAt
     * @param ?string $assignee
     * @param ?string $doneAt
     * @param ?string $createdAt
     * @param ?int $limit
     * @param ?int $offset
     * @param ?string $order
     * @throws RevenexxException
     * @return array
     */
    public function customersContactEventsList(?string $id = null, ?string $contactId = null, ?string $organizationId = null, ?string $kind = null, ?string $name = null, ?string $subject = null, ?string $actor = null, ?string $occurredAt = null, ?string $dueAt = null, ?string $assignee = null, ?string $doneAt = null, ?string $createdAt = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
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

        if (!is_null($dueAt)) {
            $apiParams['due_at'] = $dueAt;
        }

        if (!is_null($assignee)) {
            $apiParams['assignee'] = $assignee;
        }

        if (!is_null($doneAt)) {
            $apiParams['done_at'] = $doneAt;
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
     * @param ?string $username
     * @param ?string $firstName
     * @param ?string $lastName
     * @param ?string $phone
     * @param ?string $jobTitle
     * @param ?string $role
     * @param ?CustomersContactsListStatus $status
     * @param ?ShopAccess $shopAccess
     * @param ?string $invitedAt
     * @param ?string $accessBlockedReason
     * @param ?OrderApprovalMode $orderApprovalMode
     * @param ?float $orderApprovalLimit
     * @param ?RegistrationStatus $registrationStatus
     * @param ?string $registrationDecidedAt
     * @param ?string $registrationDecidedBy
     * @param ?string $registrationReason
     * @param ?string $locale
     * @param ?bool $consentMarketing
     * @param ?string $lifecycleStage
     * @param ?string $lifecycleChangedAt
     * @param ?LeadSource $leadSource
     * @param ?string $leadSourceRef
     * @param ?string $ownerId
     * @param ?int $leadScore
     * @param ?string $consentMarketingSyncedAt
     * @param ?bool $isPrimary
     * @param ?string $externalUserId
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
    public function customersContactsList(?string $id = null, ?string $organizationId = null, ?string $email = null, ?string $username = null, ?string $firstName = null, ?string $lastName = null, ?string $phone = null, ?string $jobTitle = null, ?string $role = null, ?CustomersContactsListStatus $status = null, ?ShopAccess $shopAccess = null, ?string $invitedAt = null, ?string $accessBlockedReason = null, ?OrderApprovalMode $orderApprovalMode = null, ?float $orderApprovalLimit = null, ?RegistrationStatus $registrationStatus = null, ?string $registrationDecidedAt = null, ?string $registrationDecidedBy = null, ?string $registrationReason = null, ?string $locale = null, ?bool $consentMarketing = null, ?string $lifecycleStage = null, ?string $lifecycleChangedAt = null, ?LeadSource $leadSource = null, ?string $leadSourceRef = null, ?string $ownerId = null, ?int $leadScore = null, ?string $consentMarketingSyncedAt = null, ?bool $isPrimary = null, ?string $externalUserId = null, ?string $externalId = null, ?string $sourceSyncedAt = null, ?string $deletedAt = null, ?string $deletedBy = null, ?string $deletedById = null, ?string $trashBatch = null, ?string $purgeAt = null, ?string $purgeBlockedReason = null, ?string $createdAt = null, ?string $updatedAt = null, ?Trashed $trashed = null, ?int $limit = null, ?int $offset = null, ?string $order = null): array
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

        if (!is_null($username)) {
            $apiParams['username'] = $username;
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

        if (!is_null($shopAccess)) {
            $apiParams['shop_access'] = $shopAccess;
        }

        if (!is_null($invitedAt)) {
            $apiParams['invited_at'] = $invitedAt;
        }

        if (!is_null($accessBlockedReason)) {
            $apiParams['access_blocked_reason'] = $accessBlockedReason;
        }

        if (!is_null($orderApprovalMode)) {
            $apiParams['order_approval_mode'] = $orderApprovalMode;
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

        if (!is_null($consentMarketing)) {
            $apiParams['consent_marketing'] = $consentMarketing;
        }

        if (!is_null($lifecycleStage)) {
            $apiParams['lifecycle_stage'] = $lifecycleStage;
        }

        if (!is_null($lifecycleChangedAt)) {
            $apiParams['lifecycle_changed_at'] = $lifecycleChangedAt;
        }

        if (!is_null($leadSource)) {
            $apiParams['lead_source'] = $leadSource;
        }

        if (!is_null($leadSourceRef)) {
            $apiParams['lead_source_ref'] = $leadSourceRef;
        }

        if (!is_null($ownerId)) {
            $apiParams['owner_id'] = $ownerId;
        }

        if (!is_null($leadScore)) {
            $apiParams['lead_score'] = $leadScore;
        }

        if (!is_null($consentMarketingSyncedAt)) {
            $apiParams['consent_marketing_synced_at'] = $consentMarketingSyncedAt;
        }

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }

        if (!is_null($externalUserId)) {
            $apiParams['external_user_id'] = $externalUserId;
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. Creates the
     * person and their platform login together, so a contact that exists can
     * always sign in. `role` names one of this tenant's own roles and decides
     * what they may do; `registration_status` may only be set to `pending` or
     * `approved` here, because a rejection has to carry a reason and that is the
     * reject route's job. Two rows of this tenant may not share `email`,
     * `external_user_id` (while external_user_id IS NOT NULL), `external_id`
     * (while external_id IS NOT NULL) or `username` (while username IS NOT NULL).
     *
     * @param string $email
     * @param ?string $createdAt
     * @param ?string $externalId
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $jobTitle
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?float $orderApprovalLimit
     * @param ?OrderApprovalMode $orderApprovalMode
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?CustomersContactsCreateRegistrationStatus $registrationStatus
     * @param ?string $role
     * @param ?ContactStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsCreate(string $email, ?string $createdAt = null, ?string $externalId = null, ?string $firstName = null, ?bool $isPrimary = null, ?string $jobTitle = null, ?string $lastName = null, ?string $locale = null, ?float $orderApprovalLimit = null, ?OrderApprovalMode $orderApprovalMode = null, ?string $organizationId = null, ?string $phone = null, ?CustomersContactsCreateRegistrationStatus $registrationStatus = null, ?string $role = null, ?ContactStatus $status = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contacts'
        );

        $apiParams = [];
        $apiParams['email'] = $email;

        if (!is_null($createdAt)) {
            $apiParams['created_at'] = $createdAt;
        }
        $apiParams['external_id'] = $externalId;
        $apiParams['first_name'] = $firstName;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }
        $apiParams['job_title'] = $jobTitle;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['order_approval_limit'] = $orderApprovalLimit;

        if (!is_null($orderApprovalMode)) {
            $apiParams['order_approval_mode'] = $orderApprovalMode;
        }
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
     * Deletes every contact in the trash for good, oldest first and at most fifty
     * per call, each checked on its own exactly like a second DELETE. A contact
     * something still blocks stays in the trash and is listed with the reason;
     * the rest go. POST again while `more` is true. An administrator's right,
     * never a buyer's.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsTrashEmpty(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/contacts/trash/empty'
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
     * Repair the one contact an import leaves unable to sign in. A contact
     * created through this API is mirrored as a platform login in the same call;
     * a contact written straight into the record by a migration or an ERP feed is
     * not, and reads as a customer everywhere while being able to do nothing —
     * no password, no recovery, and "no account found for that address" as the
     * only explanation. This call creates the missing login and links it. It is
     * idempotent: a contact that already has one is answered with it and
     * `created` false, and nothing is touched, so a whole import is healed with
     * one call per contact and is safe to re-run. It takes no password — the
     * person is handed to `POST /customers/auth/recovery` and mints their own. It
     * mirrors the state it finds: a blocked contact, or one whose registration is
     * still pending or rejected, gets its login created DISABLED, so a repair can
     * never hand access to somebody who was refused it. And it delivers nothing
     * at all — telling the person is what the invitation is for.
     *
     * @param string $contactId
     * @param ?string $createdBy
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsIdentity(string $contactId, ?string $createdBy = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/identity'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['created_by'] = $createdBy;

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
     * @param ?string $invitedBy
     * @param ?string $url
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsInvite(string $contactId, ?string $invitedBy = null, ?string $url = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/invite'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['invited_by'] = $invitedBy;

        if (!is_null($url)) {
            $apiParams['url'] = $url;
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
     * For somebody who has not taken the first invitation up: the same mail
     * again, and `invited_at` moves. Only while the shop access says 'invited'.
     * Without a `url` the shop's first link origin is where it points.
     *
     * @param string $contactId
     * @param ?string $url
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsReinvite(string $contactId, ?string $url = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/reinvite'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;

        if (!is_null($url)) {
            $apiParams['url'] = $url;
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
     * The status returns to 'active', the reason is cleared, and the login is
     * switched on again — unless the person is an application nobody decided,
     * whose login stays off until approval.
     *
     * @param string $contactId
     * @param ?string $actor
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsRestoreAccess(string $contactId, ?string $actor = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/restore-access'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['actor'] = $actor;

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
     * The login is switched off, the status becomes 'blocked' with the reason,
     * and `contact.blocked` is published — the same as an edit to 'blocked',
     * with the reason on the record and on the timeline. The record, the role and
     * the history stay.
     *
     * @param string $contactId
     * @param Reason $reason
     * @param ?string $actor
     * @param ?string $note
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsRevokeAccess(string $contactId, Reason $reason, ?string $actor = null, ?string $note = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/revoke-access'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['reason'] = $reason;
        $apiParams['actor'] = $actor;
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
     * A contact is a PERSON, and the unit that logs in: one platform user, one
     * email address, one role held inside its organization. A contact without an
     * organization is a standalone buyer rather than an error, and two people at
     * the same company are two contacts sharing an `organization_id`. The first
     * DELETE moves the contact to the trash: it keeps everything that points at
     * it, leaves every list, and can no longer sign in or be signed in for. The
     * person's platform login is switched off and every session ended, but kept
     * — so a restore needs no new invitation. A second DELETE on a contact
     * already in the trash deletes it for good, with its platform user —
     * refused while another app still holds an open order, quote, purchase
     * request or approval, an enabled punchout account, a punchout account naming
     * the person as its fallback contact, a customer price list, an active cost
     * centre or a personal voucher. An app that does not answer blocks too. The
     * daily purge runs the same delete once the tenant's trash retention has run
     * out.
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
     * `email`, `external_user_id` (while external_user_id IS NOT NULL),
     * `external_id` (while external_id IS NOT NULL) or `username` (while username
     * IS NOT NULL).
     *
     * @param string $id
     * @param ?string $email
     * @param ?string $externalId
     * @param ?string $firstName
     * @param ?bool $isPrimary
     * @param ?string $jobTitle
     * @param ?string $lastName
     * @param ?string $locale
     * @param ?float $orderApprovalLimit
     * @param ?OrderApprovalMode $orderApprovalMode
     * @param ?string $organizationId
     * @param ?string $phone
     * @param ?string $role
     * @param ?ContactStatus $status
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsUpdate(string $id, ?string $email = null, ?string $externalId = null, ?string $firstName = null, ?bool $isPrimary = null, ?string $jobTitle = null, ?string $lastName = null, ?string $locale = null, ?float $orderApprovalLimit = null, ?OrderApprovalMode $orderApprovalMode = null, ?string $organizationId = null, ?string $phone = null, ?string $role = null, ?ContactStatus $status = null): array
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
        $apiParams['external_id'] = $externalId;
        $apiParams['first_name'] = $firstName;

        if (!is_null($isPrimary)) {
            $apiParams['is_primary'] = $isPrimary;
        }
        $apiParams['job_title'] = $jobTitle;
        $apiParams['last_name'] = $lastName;
        $apiParams['locale'] = $locale;
        $apiParams['order_approval_limit'] = $orderApprovalLimit;

        if (!is_null($orderApprovalMode)) {
            $apiParams['order_approval_mode'] = $orderApprovalMode;
        }
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
     * „Personendaten löschen“ — a person's erasure request under Art. 17
     * GDPR. It skips the trash: the contact is deleted for good right away, in
     * the trash or not, with its platform user, its addresses and its timeline.
     * The same checks as a final delete apply, because an open order keeps its
     * buyer until it is closed (Art. 17(3)(b)); documents already issued keep
     * their own snapshot in the apps that hold them. Pseudonymising the person in
     * the record history is not done by this call yet — `history_pseudonymised`
     * says so.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsErase(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contacts/{id}/erase'
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
     * Brings a contact back from the trash and switches its login back on unless
     * the record itself says no (blocked, or an undecided registration). Refused
     * while its organization is in the trash: restoring the organization brings
     * back the contacts that went with it. Needs the same right as the delete.
     *
     * @param string $id
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsRestore(string $id): array
    {
        $apiPath = str_replace(
            ['{id}'],
            [$id],
            '/v1/customers/contacts/{id}/restore'
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