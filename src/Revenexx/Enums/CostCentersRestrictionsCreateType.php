<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CostCentersRestrictionsCreateType implements JsonSerializable
{
    private static CostCentersRestrictionsCreateType $CONTACT;
    private static CostCentersRestrictionsCreateType $ROLE;
    private static CostCentersRestrictionsCreateType $PRODUCT;
    private static CostCentersRestrictionsCreateType $CATEGORY;
    private static CostCentersRestrictionsCreateType $CATALOG;

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

    public static function CONTACT(): CostCentersRestrictionsCreateType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new CostCentersRestrictionsCreateType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): CostCentersRestrictionsCreateType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new CostCentersRestrictionsCreateType('role');
        }
        return self::$ROLE;
    }
    public static function PRODUCT(): CostCentersRestrictionsCreateType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new CostCentersRestrictionsCreateType('product');
        }
        return self::$PRODUCT;
    }
    public static function CATEGORY(): CostCentersRestrictionsCreateType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new CostCentersRestrictionsCreateType('category');
        }
        return self::$CATEGORY;
    }
    public static function CATALOG(): CostCentersRestrictionsCreateType
    {
        if (!isset(self::$CATALOG)) {
            self::$CATALOG = new CostCentersRestrictionsCreateType('catalog');
        }
        return self::$CATALOG;
    }
}