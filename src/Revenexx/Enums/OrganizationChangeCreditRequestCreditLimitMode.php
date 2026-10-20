<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationChangeCreditRequestCreditLimitMode implements JsonSerializable
{
    private static OrganizationChangeCreditRequestCreditLimitMode $UNSET;
    private static OrganizationChangeCreditRequestCreditLimitMode $LIMITED;
    private static OrganizationChangeCreditRequestCreditLimitMode $UNLIMITED;

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

    public static function UNSET(): OrganizationChangeCreditRequestCreditLimitMode
    {
        if (!isset(self::$UNSET)) {
            self::$UNSET = new OrganizationChangeCreditRequestCreditLimitMode('unset');
        }
        return self::$UNSET;
    }
    public static function LIMITED(): OrganizationChangeCreditRequestCreditLimitMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new OrganizationChangeCreditRequestCreditLimitMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): OrganizationChangeCreditRequestCreditLimitMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new OrganizationChangeCreditRequestCreditLimitMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}