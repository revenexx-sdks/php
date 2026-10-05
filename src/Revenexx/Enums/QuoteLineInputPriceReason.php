<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuoteLineInputPriceReason implements JsonSerializable
{
    private static QuoteLineInputPriceReason $VOLUME;
    private static QuoteLineInputPriceReason $COMPETITION;
    private static QuoteLineInputPriceReason $RELATIONSHIP;
    private static QuoteLineInputPriceReason $CLEARANCE;
    private static QuoteLineInputPriceReason $COSTCHANGE;
    private static QuoteLineInputPriceReason $OTHER;

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

    public static function VOLUME(): QuoteLineInputPriceReason
    {
        if (!isset(self::$VOLUME)) {
            self::$VOLUME = new QuoteLineInputPriceReason('volume');
        }
        return self::$VOLUME;
    }
    public static function COMPETITION(): QuoteLineInputPriceReason
    {
        if (!isset(self::$COMPETITION)) {
            self::$COMPETITION = new QuoteLineInputPriceReason('competition');
        }
        return self::$COMPETITION;
    }
    public static function RELATIONSHIP(): QuoteLineInputPriceReason
    {
        if (!isset(self::$RELATIONSHIP)) {
            self::$RELATIONSHIP = new QuoteLineInputPriceReason('relationship');
        }
        return self::$RELATIONSHIP;
    }
    public static function CLEARANCE(): QuoteLineInputPriceReason
    {
        if (!isset(self::$CLEARANCE)) {
            self::$CLEARANCE = new QuoteLineInputPriceReason('clearance');
        }
        return self::$CLEARANCE;
    }
    public static function COSTCHANGE(): QuoteLineInputPriceReason
    {
        if (!isset(self::$COSTCHANGE)) {
            self::$COSTCHANGE = new QuoteLineInputPriceReason('cost_change');
        }
        return self::$COSTCHANGE;
    }
    public static function OTHER(): QuoteLineInputPriceReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new QuoteLineInputPriceReason('other');
        }
        return self::$OTHER;
    }
}