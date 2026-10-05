<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingAdvice implements JsonSerializable
{
    private static ShippingAdvice $COMPLETE;
    private static ShippingAdvice $PARTIAL;

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

    public static function COMPLETE(): ShippingAdvice
    {
        if (!isset(self::$COMPLETE)) {
            self::$COMPLETE = new ShippingAdvice('complete');
        }
        return self::$COMPLETE;
    }
    public static function PARTIAL(): ShippingAdvice
    {
        if (!isset(self::$PARTIAL)) {
            self::$PARTIAL = new ShippingAdvice('partial');
        }
        return self::$PARTIAL;
    }
}