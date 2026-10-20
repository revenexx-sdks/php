<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\LeadSource;

class CustomersLeads extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * `consent_marketing` on a contact is a mirror of the consent app
     * (revenexx/marketing-consents): true while the person holds at least one
     * confirmed email subscription there. This reads the email subscriptions the
     * consent app changed in the last three hours and sets each person's flag to
     * what the consent app answers now. The hourly schedule
     * `mirror-marketing-consents` runs the same code, and so does each
     * subscription event the platform delivers. A person the consent app does not
     * answer for keeps the flag. Only a change is written.
     *
     * @throws RevenexxException
     * @return array
     */
    public function customersConsentMirrorRun(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/customers/consent-mirror/run'
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
     * Names the sales rep who owns the person (`owner_id`, a rep CODE of the
     * sales-reps app) and files a task for that rep on the person's timeline —
     * the Cockpit's "An Vertrieb übergeben". The stage is left alone: accepting
     * the lead is the rep's own step (sql). A code the sales-reps app does not
     * know is refused; where that app is not installed, the code is taken as
     * given.
     *
     * @param string $contactId
     * @param string $ownerId
     * @param ?string $actor
     * @param ?string $dueAt
     * @param ?string $note
     * @param ?string $subject
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsHandover(string $contactId, string $ownerId, ?string $actor = null, ?string $dueAt = null, ?string $note = null, ?string $subject = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/handover'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['owner_id'] = $ownerId;
        $apiParams['actor'] = $actor;
        $apiParams['due_at'] = $dueAt;
        $apiParams['note'] = $note;
        $apiParams['subject'] = $subject;

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
     * Sets the PERSON's lifecycle stage (subscriber, lead, mql, sql, opportunity,
     * customer, or a stage of the tenant's own) and announces it once as
     * `contact.lifecycle_changed` on the person's channel. A repeat of the stage
     * the person already holds changes nothing, announces nothing and answers
     * `changed: false`. A person without a lead source yet takes `lead_source` /
     * `lead_source_ref` from the body; one that has a source keeps it. The
     * journeys step `set_lifecycle_stage`, the Cockpit's Qualifizieren action and
     * a form listener all call this.
     *
     * @param string $contactId
     * @param string $stage
     * @param ?string $actor
     * @param ?LeadSource $leadSource
     * @param ?string $leadSourceRef
     * @param ?string $reason
     * @throws RevenexxException
     * @return array
     */
    public function customersContactsLifecycle(string $contactId, string $stage, ?string $actor = null, ?LeadSource $leadSource = null, ?string $leadSourceRef = null, ?string $reason = null): array
    {
        $apiPath = str_replace(
            ['{contact_id}'],
            [$contactId],
            '/v1/customers/contacts/{contact_id}/lifecycle'
        );

        $apiParams = [];
        $apiParams['contact_id'] = $contactId;
        $apiParams['stage'] = $stage;
        $apiParams['actor'] = $actor;
        $apiParams['lead_source'] = $leadSource;
        $apiParams['lead_source_ref'] = $leadSourceRef;
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
}