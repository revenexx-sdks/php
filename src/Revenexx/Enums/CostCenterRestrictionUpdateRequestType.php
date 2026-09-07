<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterRestrictionUpdateRequestType implements JsonSerializable
{
    private static CostCenterRestrictionUpdateRequestType $CONTACT;
    private static CostCenterRestrictionUpdateRequestType $ROLE;
    private static CostCenterRestrictionUpdateRequestType $PRODUCT;
    private static CostCenterRestrictionUpdateRequestType $CATEGORY;
    private static CostCenterRestrictionUpdateRequestType $CATALOG;

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

    public static function CONTACT(): CostCenterRestrictionUpdateRequestType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new CostCenterRestrictionUpdateRequestType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): CostCenterRestrictionUpdateRequestType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new CostCenterRestrictionUpdateRequestType('role');
        }
        return self::$ROLE;
    }
    public static function PRODUCT(): CostCenterRestrictionUpdateRequestType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new CostCenterRestrictionUpdateRequestType('product');
        }
        return self::$PRODUCT;
    }
    public static function CATEGORY(): CostCenterRestrictionUpdateRequestType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new CostCenterRestrictionUpdateRequestType('category');
        }
        return self::$CATEGORY;
    }
    public static function CATALOG(): CostCenterRestrictionUpdateRequestType
    {
        if (!isset(self::$CATALOG)) {
            self::$CATALOG = new CostCenterRestrictionUpdateRequestType('catalog');
        }
        return self::$CATALOG;
    }
}