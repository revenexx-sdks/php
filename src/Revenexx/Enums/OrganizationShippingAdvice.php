<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationShippingAdvice implements JsonSerializable
{
    private static OrganizationShippingAdvice $COMPLETE;
    private static OrganizationShippingAdvice $PARTIAL;

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

    public static function COMPLETE(): OrganizationShippingAdvice
    {
        if (!isset(self::$COMPLETE)) {
            self::$COMPLETE = new OrganizationShippingAdvice('complete');
        }
        return self::$COMPLETE;
    }
    public static function PARTIAL(): OrganizationShippingAdvice
    {
        if (!isset(self::$PARTIAL)) {
            self::$PARTIAL = new OrganizationShippingAdvice('partial');
        }
        return self::$PARTIAL;
    }
}