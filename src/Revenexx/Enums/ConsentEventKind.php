<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentEventKind implements JsonSerializable
{
    private static ConsentEventKind $REQUESTED;
    private static ConsentEventKind $CONFIRMATIONSENT;
    private static ConsentEventKind $CONFIRMED;
    private static ConsentEventKind $WITHDRAWN;
    private static ConsentEventKind $LAPSED;
    private static ConsentEventKind $IMPORTED;
    private static ConsentEventKind $BASISCHANGED;
    private static ConsentEventKind $ERASED;

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

    public static function REQUESTED(): ConsentEventKind
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new ConsentEventKind('requested');
        }
        return self::$REQUESTED;
    }
    public static function CONFIRMATIONSENT(): ConsentEventKind
    {
        if (!isset(self::$CONFIRMATIONSENT)) {
            self::$CONFIRMATIONSENT = new ConsentEventKind('confirmation_sent');
        }
        return self::$CONFIRMATIONSENT;
    }
    public static function CONFIRMED(): ConsentEventKind
    {
        if (!isset(self::$CONFIRMED)) {
            self::$CONFIRMED = new ConsentEventKind('confirmed');
        }
        return self::$CONFIRMED;
    }
    public static function WITHDRAWN(): ConsentEventKind
    {
        if (!isset(self::$WITHDRAWN)) {
            self::$WITHDRAWN = new ConsentEventKind('withdrawn');
        }
        return self::$WITHDRAWN;
    }
    public static function LAPSED(): ConsentEventKind
    {
        if (!isset(self::$LAPSED)) {
            self::$LAPSED = new ConsentEventKind('lapsed');
        }
        return self::$LAPSED;
    }
    public static function IMPORTED(): ConsentEventKind
    {
        if (!isset(self::$IMPORTED)) {
            self::$IMPORTED = new ConsentEventKind('imported');
        }
        return self::$IMPORTED;
    }
    public static function BASISCHANGED(): ConsentEventKind
    {
        if (!isset(self::$BASISCHANGED)) {
            self::$BASISCHANGED = new ConsentEventKind('basis_changed');
        }
        return self::$BASISCHANGED;
    }
    public static function ERASED(): ConsentEventKind
    {
        if (!isset(self::$ERASED)) {
            self::$ERASED = new ConsentEventKind('erased');
        }
        return self::$ERASED;
    }
}