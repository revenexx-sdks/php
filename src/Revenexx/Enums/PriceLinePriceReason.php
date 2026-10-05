<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceLinePriceReason implements JsonSerializable
{
    private static PriceLinePriceReason $VOLUME;
    private static PriceLinePriceReason $COMPETITION;
    private static PriceLinePriceReason $RELATIONSHIP;
    private static PriceLinePriceReason $CLEARANCE;
    private static PriceLinePriceReason $COSTCHANGE;
    private static PriceLinePriceReason $OTHER;

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

    public static function VOLUME(): PriceLinePriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new PriceLinePriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): PriceLinePriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new PriceLinePriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): PriceLinePriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new PriceLinePriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): PriceLinePriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new PriceLinePriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): PriceLinePriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new PriceLinePriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): PriceLinePriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new PriceLinePriceReason('other');
        }
        return self::$OTHER;
    }
}