<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PaymentDunningStage implements JsonSerializable
{
    private static PaymentDunningStage $NONE;
    private static PaymentDunningStage $REMINDER;
    private static PaymentDunningStage $OVERDUE;

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

    public static function NONE(): PaymentDunningStage
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new PaymentDunningStage('none');
        }
        return self::$NONE;
    }
    public static function REMINDER(): PaymentDunningStage
    {
        if (!isset(self::$REMINDER)) {
            self::$REMINDER = new PaymentDunningStage('reminder');
        }
        return self::$REMINDER;
    }
    public static function OVERDUE(): PaymentDunningStage
    {
        if (!isset(self::$OVERDUE)) {
            self::$OVERDUE = new PaymentDunningStage('overdue');
        }
        return self::$OVERDUE;
    }
}