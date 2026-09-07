<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterRestrictionType implements JsonSerializable
{
    private static CostCenterRestrictionType $CONTACT;
    private static CostCenterRestrictionType $ROLE;
    private static CostCenterRestrictionType $PRODUCT;
    private static CostCenterRestrictionType $CATEGORY;
    private static CostCenterRestrictionType $CATALOG;

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

    public static function CONTACT(): CostCenterRestrictionType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new CostCenterRestrictionType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): CostCenterRestrictionType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new CostCenterRestrictionType('role');
        }
        return self::$ROLE;
    }
    public static function PRODUCT(): CostCenterRestrictionType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new CostCenterRestrictionType('product');
        }
        return self::$PRODUCT;
    }
    public static function CATEGORY(): CostCenterRestrictionType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new CostCenterRestrictionType('category');
        }
        return self::$CATEGORY;
    }
    public static function CATALOG(): CostCenterRestrictionType
    {
        if (!isset(self::$CATALOG)) {
            self::$CATALOG = new CostCenterRestrictionType('catalog');
        }
        return self::$CATALOG;
    }
}