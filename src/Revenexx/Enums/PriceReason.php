<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceReason implements JsonSerializable
{
    private static PriceReason $VOLUME;
    private static PriceReason $COMPETITION;
    private static PriceReason $RELATIONSHIP;
    private static PriceReason $CLEARANCE;
    private static PriceReason $COSTCHANGE;
    private static PriceReason $OTHER;

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

    public static function VOLUME(): PriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new PriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): PriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new PriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): PriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new PriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): PriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new PriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): PriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new PriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): PriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new PriceReason('other');
        }
        return self::$OTHER;
    }
}