<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Conditions implements JsonSerializable
{
    private static Conditions $AVAILABLEBUDGET;
    private static Conditions $PERSONALLIMIT;

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

    public static function AVAILABLEBUDGET(): Conditions
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new Conditions('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): Conditions
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new Conditions('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
}