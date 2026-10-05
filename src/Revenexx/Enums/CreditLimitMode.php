<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CreditLimitMode implements JsonSerializable
{
    private static CreditLimitMode $UNSET;
    private static CreditLimitMode $LIMITED;
    private static CreditLimitMode $UNLIMITED;

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

    public static function UNSET(): CreditLimitMode
    {
        if (!isset(self::$UNSET)) {
            self::$UNSET = new CreditLimitMode('unset');
        }
        return self::$UNSET;
    }
    public static function LIMITED(): CreditLimitMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new CreditLimitMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): CreditLimitMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new CreditLimitMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}