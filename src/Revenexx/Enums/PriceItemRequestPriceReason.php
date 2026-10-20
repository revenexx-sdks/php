<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceItemRequestPriceReason implements JsonSerializable
{
    private static PriceItemRequestPriceReason $VOLUME;
    private static PriceItemRequestPriceReason $COMPETITION;
    private static PriceItemRequestPriceReason $RELATIONSHIP;
    private static PriceItemRequestPriceReason $CLEARANCE;
    private static PriceItemRequestPriceReason $COSTCHANGE;
    private static PriceItemRequestPriceReason $OTHER;

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

    public static function VOLUME(): PriceItemRequestPriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new PriceItemRequestPriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): PriceItemRequestPriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new PriceItemRequestPriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): PriceItemRequestPriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new PriceItemRequestPriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): PriceItemRequestPriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new PriceItemRequestPriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): PriceItemRequestPriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new PriceItemRequestPriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): PriceItemRequestPriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new PriceItemRequestPriceReason('other');
        }
        return self::$OTHER;
    }
}