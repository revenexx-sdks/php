<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurchaseRequestItemCreateRequestType implements JsonSerializable
{
    private static PurchaseRequestItemCreateRequestType $PRODUCT;
    private static PurchaseRequestItemCreateRequestType $CONFIGURATION;
    private static PurchaseRequestItemCreateRequestType $CUSTOM;

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

    public static function PRODUCT(): PurchaseRequestItemCreateRequestType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new PurchaseRequestItemCreateRequestType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): PurchaseRequestItemCreateRequestType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new PurchaseRequestItemCreateRequestType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): PurchaseRequestItemCreateRequestType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new PurchaseRequestItemCreateRequestType('custom');
        }
        return self::$CUSTOM;
    }
}