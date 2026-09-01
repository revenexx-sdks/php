<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingTaxSource implements JsonSerializable
{
    private static ShippingTaxSource $METHOD;
    private static ShippingTaxSource $TENANTCLASS;
    private static ShippingTaxSource $MARKETDEFAULT;
    private static ShippingTaxSource $TENANTDEFAULT;

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

    public static function METHOD(): ShippingTaxSource
    {
        if (!isset(self::$METHOD)) {
            self::$METHOD = new ShippingTaxSource('method');
        }
        return self::$METHOD;
    }
    public static function TENANTCLASS(): ShippingTaxSource
    {
        if (!isset(self::$TENANTCLASS)) {
            self::$TENANTCLASS = new ShippingTaxSource('tenant_class');
        }
        return self::$TENANTCLASS;
    }
    public static function MARKETDEFAULT(): ShippingTaxSource
    {
        if (!isset(self::$MARKETDEFAULT)) {
            self::$MARKETDEFAULT = new ShippingTaxSource('market_default');
        }
        return self::$MARKETDEFAULT;
    }
    public static function TENANTDEFAULT(): ShippingTaxSource
    {
        if (!isset(self::$TENANTDEFAULT)) {
            self::$TENANTDEFAULT = new ShippingTaxSource('tenant_default');
        }
        return self::$TENANTDEFAULT;
    }
}