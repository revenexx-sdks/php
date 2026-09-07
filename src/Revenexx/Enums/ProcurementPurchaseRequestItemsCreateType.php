<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProcurementPurchaseRequestItemsCreateType implements JsonSerializable
{
    private static ProcurementPurchaseRequestItemsCreateType $PRODUCT;
    private static ProcurementPurchaseRequestItemsCreateType $CONFIGURATION;
    private static ProcurementPurchaseRequestItemsCreateType $CUSTOM;

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

    public static function PRODUCT(): ProcurementPurchaseRequestItemsCreateType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new ProcurementPurchaseRequestItemsCreateType('product');
        }
        return self::$PRODUCT;
    }
    public static function CONFIGURATION(): ProcurementPurchaseRequestItemsCreateType
    {
        if (!isset(self::$CONFIGURATION)) {
            self::$CONFIGURATION = new ProcurementPurchaseRequestItemsCreateType('configuration');
        }
        return self::$CONFIGURATION;
    }
    public static function CUSTOM(): ProcurementPurchaseRequestItemsCreateType
    {
        if (!isset(self::$CUSTOM)) {
            self::$CUSTOM = new ProcurementPurchaseRequestItemsCreateType('custom');
        }
        return self::$CUSTOM;
    }
}