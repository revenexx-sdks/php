<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductDefaultsResultReason implements JsonSerializable
{
    private static ProductDefaultsResultReason $NOTEMPTY;
    private static ProductDefaultsResultReason $ALREADYSEEDED;

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

    public static function NOTEMPTY(): ProductDefaultsResultReason
    {
        if (!isset(self::$NOTEMPTY)) {
            self::$NOTEMPTY = new ProductDefaultsResultReason('not_empty');
        }
        return self::$NOTEMPTY;
    }
    public static function ALREADYSEEDED(): ProductDefaultsResultReason
    {
        if (!isset(self::$ALREADYSEEDED)) {
            self::$ALREADYSEEDED = new ProductDefaultsResultReason('already_seeded');
        }
        return self::$ALREADYSEEDED;
    }
}