<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsConsentEventsListKind implements JsonSerializable
{
    private static MarketingConsentsConsentEventsListKind $REQUESTED;
    private static MarketingConsentsConsentEventsListKind $CONFIRMATIONSENT;
    private static MarketingConsentsConsentEventsListKind $CONFIRMED;
    private static MarketingConsentsConsentEventsListKind $WITHDRAWN;
    private static MarketingConsentsConsentEventsListKind $LAPSED;
    private static MarketingConsentsConsentEventsListKind $IMPORTED;
    private static MarketingConsentsConsentEventsListKind $BASISCHANGED;
    private static MarketingConsentsConsentEventsListKind $ERASED;

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

    public static function REQUESTED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new MarketingConsentsConsentEventsListKind('requested');
        }
        return self::$REQUESTED;
    }
    public static function CONFIRMATIONSENT(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$CONFIRMATIONSENT)) {
            self::$CONFIRMATIONSENT = new MarketingConsentsConsentEventsListKind('confirmation_sent');
        }
        return self::$CONFIRMATIONSENT;
    }
    public static function CONFIRMED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new MarketingConsentsConsentEventsListKind('confirmed');
        }
        return self::$CONFIRMED;
    }
    public static function WITHDRAWN(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new MarketingConsentsConsentEventsListKind('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function LAPSED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$LAPSED)) {
            self::$LAPSED = new MarketingConsentsConsentEventsListKind('lapsed');
        }
        return self::$LAPSED;
    }
    public static function IMPORTED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$IMPORTED)) {
            self::$IMPORTED = new MarketingConsentsConsentEventsListKind('imported');
        }
        return self::$IMPORTED;
    }
    public static function BASISCHANGED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$BASISCHANGED)) {
            self::$BASISCHANGED = new MarketingConsentsConsentEventsListKind('basis_changed');
        }
        return self::$BASISCHANGED;
    }
    public static function ERASED(): MarketingConsentsConsentEventsListKind
    {
        if (!isset(self::$ERASED)) {
            self::$ERASED = new MarketingConsentsConsentEventsListKind('erased');
        }
        return self::$ERASED;
    }
}