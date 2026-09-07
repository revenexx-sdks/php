<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCenterRestrictionCreateRequestType implements JsonSerializable
{
    private static CostCenterRestrictionCreateRequestType $CONTACT;
    private static CostCenterRestrictionCreateRequestType $ROLE;
    private static CostCenterRestrictionCreateRequestType $PRODUCT;
    private static CostCenterRestrictionCreateRequestType $CATEGORY;
    private static CostCenterRestrictionCreateRequestType $CATALOG;

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

    public static function CONTACT(): CostCenterRestrictionCreateRequestType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new CostCenterRestrictionCreateRequestType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): CostCenterRestrictionCreateRequestType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new CostCenterRestrictionCreateRequestType('role');
        }
        return self::$ROLE;
    }
    public static function PRODUCT(): CostCenterRestrictionCreateRequestType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new CostCenterRestrictionCreateRequestType('product');
        }
        return self::$PRODUCT;
    }
    public static function CATEGORY(): CostCenterRestrictionCreateRequestType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new CostCenterRestrictionCreateRequestType('category');
        }
        return self::$CATEGORY;
    }
    public static function CATALOG(): CostCenterRestrictionCreateRequestType
    {
        if (!isset(self::$CATALOG)) {
            self::$CATALOG = new CostCenterRestrictionCreateRequestType('catalog');
        }
        return self::$CATALOG;
    }
}