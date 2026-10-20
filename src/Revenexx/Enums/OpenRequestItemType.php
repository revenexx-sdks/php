<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OpenRequestItemType implements JsonSerializable
{
    private static OpenRequestItemType $PRODUCT;
    private static OpenRequestItemType $CONFIGURATION;
    private static OpenRequestItemType $CUSTOM;

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

    public static function PRODUCT(): OpenRequestItemType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new OpenRequestItemType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): OpenRequestItemType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new OpenRequestItemType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): OpenRequestItemType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new OpenRequestItemType('custom');
        }
        return self::$CUSTOM;
    }
}