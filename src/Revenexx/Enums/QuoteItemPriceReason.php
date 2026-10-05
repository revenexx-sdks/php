<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteItemPriceReason implements JsonSerializable
{
    private static QuoteItemPriceReason $VOLUME;
    private static QuoteItemPriceReason $COMPETITION;
    private static QuoteItemPriceReason $RELATIONSHIP;
    private static QuoteItemPriceReason $CLEARANCE;
    private static QuoteItemPriceReason $COSTCHANGE;
    private static QuoteItemPriceReason $OTHER;

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

    public static function VOLUME(): QuoteItemPriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new QuoteItemPriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): QuoteItemPriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new QuoteItemPriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): QuoteItemPriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new QuoteItemPriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): QuoteItemPriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new QuoteItemPriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): QuoteItemPriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new QuoteItemPriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): QuoteItemPriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new QuoteItemPriceReason('other');
        }
        return self::$OTHER;
    }
}