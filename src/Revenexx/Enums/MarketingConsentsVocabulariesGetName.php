<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsVocabulariesGetName implements JsonSerializable
{
    private static MarketingConsentsVocabulariesGetName $CHANNELS;
    private static MarketingConsentsVocabulariesGetName $SUBSCRIPTIONSTATES;
    private static MarketingConsentsVocabulariesGetName $LEGALBASES;
    private static MarketingConsentsVocabulariesGetName $CONSENTEVENTKINDS;
    private static MarketingConsentsVocabulariesGetName $CONSENTSOURCES;
    private static MarketingConsentsVocabulariesGetName $ELIGIBILITYREASONS;
    private static MarketingConsentsVocabulariesGetName $IMPORTSTATES;

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

    public static function CHANNELS(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$CHANNELS)) {
            self::$CHANNELS = new MarketingConsentsVocabulariesGetName('channels');
        }
        return self::$CHANNELS;
    }
    public static function SUBSCRIPTIONSTATES(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$SUBSCRIPTIONSTATES)) {
            self::$SUBSCRIPTIONSTATES = new MarketingConsentsVocabulariesGetName('subscription-states');
        }
        return self::$SUBSCRIPTIONSTATES;
    }
    public static function LEGALBASES(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$LEGALBASES)) {
            self::$LEGALBASES = new MarketingConsentsVocabulariesGetName('legal-bases');
        }
        return self::$LEGALBASES;
    }
    public static function CONSENTEVENTKINDS(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$CONSENTEVENTKINDS)) {
            self::$CONSENTEVENTKINDS = new MarketingConsentsVocabulariesGetName('consent-event-kinds');
        }
        return self::$CONSENTEVENTKINDS;
    }
    public static function CONSENTSOURCES(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$CONSENTSOURCES)) {
            self::$CONSENTSOURCES = new MarketingConsentsVocabulariesGetName('consent-sources');
        }
        return self::$CONSENTSOURCES;
    }
    public static function ELIGIBILITYREASONS(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$ELIGIBILITYREASONS)) {
            self::$ELIGIBILITYREASONS = new MarketingConsentsVocabulariesGetName('eligibility-reasons');
        }
        return self::$ELIGIBILITYREASONS;
    }
    public static function IMPORTSTATES(): MarketingConsentsVocabulariesGetName
    {
        if (!isset(self::$IMPORTSTATES)) {
            self::$IMPORTSTATES = new MarketingConsentsVocabulariesGetName('import-states');
        }
        return self::$IMPORTSTATES;
    }
}