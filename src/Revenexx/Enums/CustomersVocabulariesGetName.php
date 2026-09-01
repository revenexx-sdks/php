<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersVocabulariesGetName implements JsonSerializable
{
    private static CustomersVocabulariesGetName $ADDRESSTYPES;
    private static CustomersVocabulariesGetName $CONTACTEVENTKINDS;
    private static CustomersVocabulariesGetName $CONTACTSTATUSES;
    private static CustomersVocabulariesGetName $LIFECYCLESTAGES;
    private static CustomersVocabulariesGetName $LOCALES;
    private static CustomersVocabulariesGetName $ORGANIZATIONSTATUSES;
    private static CustomersVocabulariesGetName $PAYMENTTERMS;
    private static CustomersVocabulariesGetName $REGISTRATIONSTATUSES;
    private static CustomersVocabulariesGetName $ROLES;
    private static CustomersVocabulariesGetName $RULEMATCHES;
    private static CustomersVocabulariesGetName $SEGMENTSOURCES;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function ADDRESSTYPES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$ADDRESSTYPES)) {
            self::$ADDRESSTYPES = new CustomersVocabulariesGetName('address-types');
        }
        return self::$ADDRESSTYPES;
    }
    public static function CONTACTEVENTKINDS(): CustomersVocabulariesGetName
    {
        if (!isset(self::$CONTACTEVENTKINDS)) {
            self::$CONTACTEVENTKINDS = new CustomersVocabulariesGetName('contact-event-kinds');
        }
        return self::$CONTACTEVENTKINDS;
    }
    public static function CONTACTSTATUSES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$CONTACTSTATUSES)) {
            self::$CONTACTSTATUSES = new CustomersVocabulariesGetName('contact-statuses');
        }
        return self::$CONTACTSTATUSES;
    }
    public static function LIFECYCLESTAGES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$LIFECYCLESTAGES)) {
            self::$LIFECYCLESTAGES = new CustomersVocabulariesGetName('lifecycle-stages');
        }
        return self::$LIFECYCLESTAGES;
    }
    public static function LOCALES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$LOCALES)) {
            self::$LOCALES = new CustomersVocabulariesGetName('locales');
        }
        return self::$LOCALES;
    }
    public static function ORGANIZATIONSTATUSES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$ORGANIZATIONSTATUSES)) {
            self::$ORGANIZATIONSTATUSES = new CustomersVocabulariesGetName('organization-statuses');
        }
        return self::$ORGANIZATIONSTATUSES;
    }
    public static function PAYMENTTERMS(): CustomersVocabulariesGetName
    {
        if (!isset(self::$PAYMENTTERMS)) {
            self::$PAYMENTTERMS = new CustomersVocabulariesGetName('payment-terms');
        }
        return self::$PAYMENTTERMS;
    }
    public static function REGISTRATIONSTATUSES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$REGISTRATIONSTATUSES)) {
            self::$REGISTRATIONSTATUSES = new CustomersVocabulariesGetName('registration-statuses');
        }
        return self::$REGISTRATIONSTATUSES;
    }
    public static function ROLES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$ROLES)) {
            self::$ROLES = new CustomersVocabulariesGetName('roles');
        }
        return self::$ROLES;
    }
    public static function RULEMATCHES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$RULEMATCHES)) {
            self::$RULEMATCHES = new CustomersVocabulariesGetName('rule-matches');
        }
        return self::$RULEMATCHES;
    }
    public static function SEGMENTSOURCES(): CustomersVocabulariesGetName
    {
        if (!isset(self::$SEGMENTSOURCES)) {
            self::$SEGMENTSOURCES = new CustomersVocabulariesGetName('segment-sources');
        }
        return self::$SEGMENTSOURCES;
    }
}