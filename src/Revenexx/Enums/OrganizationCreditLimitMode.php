<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationCreditLimitMode implements JsonSerializable
{
    private static OrganizationCreditLimitMode $UNSET;
    private static OrganizationCreditLimitMode $LIMITED;
    private static OrganizationCreditLimitMode $UNLIMITED;

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

    public static function UNSET(): OrganizationCreditLimitMode
    {
        if (!isset(self::$UNSET)) {
            self::$UNSET = new OrganizationCreditLimitMode('unset');
        }
        return self::$UNSET;
    }
    public static function LIMITED(): OrganizationCreditLimitMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new OrganizationCreditLimitMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): OrganizationCreditLimitMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new OrganizationCreditLimitMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}