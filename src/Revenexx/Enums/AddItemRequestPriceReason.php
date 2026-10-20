<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddItemRequestPriceReason implements JsonSerializable
{
    private static AddItemRequestPriceReason $VOLUME;
    private static AddItemRequestPriceReason $COMPETITION;
    private static AddItemRequestPriceReason $RELATIONSHIP;
    private static AddItemRequestPriceReason $CLEARANCE;
    private static AddItemRequestPriceReason $COSTCHANGE;
    private static AddItemRequestPriceReason $OTHER;

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

    public static function VOLUME(): AddItemRequestPriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new AddItemRequestPriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): AddItemRequestPriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new AddItemRequestPriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): AddItemRequestPriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new AddItemRequestPriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): AddItemRequestPriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new AddItemRequestPriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): AddItemRequestPriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new AddItemRequestPriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): AddItemRequestPriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new AddItemRequestPriceReason('other');
        }
        return self::$OTHER;
    }
}