<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OpenQuoteItemPriceReason implements JsonSerializable
{
    private static OpenQuoteItemPriceReason $VOLUME;
    private static OpenQuoteItemPriceReason $COMPETITION;
    private static OpenQuoteItemPriceReason $RELATIONSHIP;
    private static OpenQuoteItemPriceReason $CLEARANCE;
    private static OpenQuoteItemPriceReason $COSTCHANGE;
    private static OpenQuoteItemPriceReason $OTHER;

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

    public static function VOLUME(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new OpenQuoteItemPriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new OpenQuoteItemPriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new OpenQuoteItemPriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new OpenQuoteItemPriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new OpenQuoteItemPriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): OpenQuoteItemPriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new OpenQuoteItemPriceReason('other');
        }
        return self::$OTHER;
    }
}