<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurchaseRequestItemType implements JsonSerializable
{
    private static PurchaseRequestItemType $PRODUCT;
    private static PurchaseRequestItemType $CONFIGURATION;
    private static PurchaseRequestItemType $CUSTOM;

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

    public static function PRODUCT(): PurchaseRequestItemType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new PurchaseRequestItemType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): PurchaseRequestItemType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new PurchaseRequestItemType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): PurchaseRequestItemType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PurchaseRequestItemType('custom');
        }
        return self::$CUSTOM;
    }
}