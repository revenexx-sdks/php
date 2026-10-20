<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutVocabulariesGetName implements JsonSerializable
{
    private static PunchoutVocabulariesGetName $AUTHSTRATEGIES;
    private static PunchoutVocabulariesGetName $ENTRYACTIONS;
    private static PunchoutVocabulariesGetName $ENTRYPROBEOUTCOME;
    private static PunchoutVocabulariesGetName $MAPPINGDOCUMENTS;
    private static PunchoutVocabulariesGetName $MAPPINGEMIT;
    private static PunchoutVocabulariesGetName $MAPPINGMUTATORS;
    private static PunchoutVocabulariesGetName $MAPPINGSCOPES;
    private static PunchoutVocabulariesGetName $MAPPINGSOURCES;
    private static PunchoutVocabulariesGetName $MAPPINGTARGETKINDS;
    private static PunchoutVocabulariesGetName $ORIGINS;
    private static PunchoutVocabulariesGetName $PROTOCOLVERSIONS;
    private static PunchoutVocabulariesGetName $PROTOCOLS;
    private static PunchoutVocabulariesGetName $PURCHASEMODES;
    private static PunchoutVocabulariesGetName $REFUSALREASONS;
    private static PunchoutVocabulariesGetName $RETURNMETHODS;
    private static PunchoutVocabulariesGetName $SESSIONSTATUSES;
    private static PunchoutVocabulariesGetName $UNKNOWNUSERPOLICIES;

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

    public static function AUTHSTRATEGIES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$AUTHSTRATEGIES)) {
            self::$AUTHSTRATEGIES = new PunchoutVocabulariesGetName('auth-strategies');
        }
        return self::$AUTHSTRATEGIES;
    }
    public static function ENTRYACTIONS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$ENTRYACTIONS)) {
            self::$ENTRYACTIONS = new PunchoutVocabulariesGetName('entry-actions');
        }
        return self::$ENTRYACTIONS;
    }
    public static function ENTRYPROBEOUTCOME(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$ENTRYPROBEOUTCOME)) {
            self::$ENTRYPROBEOUTCOME = new PunchoutVocabulariesGetName('entry-probe-outcome');
        }
        return self::$ENTRYPROBEOUTCOME;
    }
    public static function MAPPINGDOCUMENTS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGDOCUMENTS)) {
            self::$MAPPINGDOCUMENTS = new PunchoutVocabulariesGetName('mapping-documents');
        }
        return self::$MAPPINGDOCUMENTS;
    }
    public static function MAPPINGEMIT(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGEMIT)) {
            self::$MAPPINGEMIT = new PunchoutVocabulariesGetName('mapping-emit');
        }
        return self::$MAPPINGEMIT;
    }
    public static function MAPPINGMUTATORS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGMUTATORS)) {
            self::$MAPPINGMUTATORS = new PunchoutVocabulariesGetName('mapping-mutators');
        }
        return self::$MAPPINGMUTATORS;
    }
    public static function MAPPINGSCOPES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGSCOPES)) {
            self::$MAPPINGSCOPES = new PunchoutVocabulariesGetName('mapping-scopes');
        }
        return self::$MAPPINGSCOPES;
    }
    public static function MAPPINGSOURCES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGSOURCES)) {
            self::$MAPPINGSOURCES = new PunchoutVocabulariesGetName('mapping-sources');
        }
        return self::$MAPPINGSOURCES;
    }
    public static function MAPPINGTARGETKINDS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGTARGETKINDS)) {
            self::$MAPPINGTARGETKINDS = new PunchoutVocabulariesGetName('mapping-target-kinds');
        }
        return self::$MAPPINGTARGETKINDS;
    }
    public static function ORIGINS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$ORIGINS)) {
            self::$ORIGINS = new PunchoutVocabulariesGetName('origins');
        }
        return self::$ORIGINS;
    }
    public static function PROTOCOLVERSIONS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$PROTOCOLVERSIONS)) {
            self::$PROTOCOLVERSIONS = new PunchoutVocabulariesGetName('protocol-versions');
        }
        return self::$PROTOCOLVERSIONS;
    }
    public static function PROTOCOLS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$PROTOCOLS)) {
            self::$PROTOCOLS = new PunchoutVocabulariesGetName('protocols');
        }
        return self::$PROTOCOLS;
    }
    public static function PURCHASEMODES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$PURCHASEMODES)) {
            self::$PURCHASEMODES = new PunchoutVocabulariesGetName('purchase-modes');
        }
        return self::$PURCHASEMODES;
    }
    public static function REFUSALREASONS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$REFUSALREASONS)) {
            self::$REFUSALREASONS = new PunchoutVocabulariesGetName('refusal-reasons');
        }
        return self::$REFUSALREASONS;
    }
    public static function RETURNMETHODS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$RETURNMETHODS)) {
            self::$RETURNMETHODS = new PunchoutVocabulariesGetName('return-methods');
        }
        return self::$RETURNMETHODS;
    }
    public static function SESSIONSTATUSES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$SESSIONSTATUSES)) {
            self::$SESSIONSTATUSES = new PunchoutVocabulariesGetName('session-statuses');
        }
        return self::$SESSIONSTATUSES;
    }
    public static function UNKNOWNUSERPOLICIES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$UNKNOWNUSERPOLICIES)) {
            self::$UNKNOWNUSERPOLICIES = new PunchoutVocabulariesGetName('unknown-user-policies');
        }
        return self::$UNKNOWNUSERPOLICIES;
    }
}