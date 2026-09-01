<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingCarrierSource implements JsonSerializable
{
    private static ShippingCarrierSource $METHOD;
    private static ShippingCarrierSource $METHODCODE;
    private static ShippingCarrierSource $METHODTEXT;
    private static ShippingCarrierSource $TENANTDEFAULT;
    private static ShippingCarrierSource $TENANTDEFAULTTEXT;

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

    public static function METHOD(): ShippingCarrierSource
    {
        if (!isset(self::$METHOD)) {
            self::$METHOD = new ShippingCarrierSource('method');
        }
        return self::$METHOD;
    }
    public static function METHODCODE(): ShippingCarrierSource
    {
        if (!isset(self::$METHODCODE)) {
            self::$METHODCODE = new ShippingCarrierSource('method_code');
        }
        return self::$METHODCODE;
    }
    public static function METHODTEXT(): ShippingCarrierSource
    {
        if (!isset(self::$METHODTEXT)) {
            self::$METHODTEXT = new ShippingCarrierSource('method_text');
        }
        return self::$METHODTEXT;
    }
    public static function TENANTDEFAULT(): ShippingCarrierSource
    {
        if (!isset(self::$TENANTDEFAULT)) {
            self::$TENANTDEFAULT = new ShippingCarrierSource('tenant_default');
        }
        return self::$TENANTDEFAULT;
    }
    public static function TENANTDEFAULTTEXT(): ShippingCarrierSource
    {
        if (!isset(self::$TENANTDEFAULTTEXT)) {
            self::$TENANTDEFAULTTEXT = new ShippingCarrierSource('tenant_default_text');
        }
        return self::$TENANTDEFAULTTEXT;
    }
}