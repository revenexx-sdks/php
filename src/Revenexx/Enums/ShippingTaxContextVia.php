<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingTaxContextVia implements JsonSerializable
{
    private static ShippingTaxContextVia $TENANTDEFAULT;

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

    public static function TENANTDEFAULT(): ShippingTaxContextVia
    {
        if (!isset(self::$TENANTDEFAULT)) {
            self::$TENANTDEFAULT = new ShippingTaxContextVia('tenant_default');
        }
        return self::$TENANTDEFAULT;
    }
}