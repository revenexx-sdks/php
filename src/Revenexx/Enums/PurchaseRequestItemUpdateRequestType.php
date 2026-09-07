<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurchaseRequestItemUpdateRequestType implements JsonSerializable
{
    private static PurchaseRequestItemUpdateRequestType $PRODUCT;
    private static PurchaseRequestItemUpdateRequestType $CONFIGURATION;
    private static PurchaseRequestItemUpdateRequestType $CUSTOM;

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

    public static function PRODUCT(): PurchaseRequestItemUpdateRequestType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new PurchaseRequestItemUpdateRequestType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): PurchaseRequestItemUpdateRequestType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new PurchaseRequestItemUpdateRequestType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): PurchaseRequestItemUpdateRequestType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PurchaseRequestItemUpdateRequestType('custom');
        }
        return self::$CUSTOM;
    }
}