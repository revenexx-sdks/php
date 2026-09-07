<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubmitItemType implements JsonSerializable
{
    private static SubmitItemType $PRODUCT;
    private static SubmitItemType $CONFIGURATION;
    private static SubmitItemType $CUSTOM;

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

    public static function PRODUCT(): SubmitItemType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new SubmitItemType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): SubmitItemType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new SubmitItemType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): SubmitItemType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new SubmitItemType('custom');
        }
        return self::$CUSTOM;
    }
}