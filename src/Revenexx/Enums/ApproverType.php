<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApproverType implements JsonSerializable
{
    private static ApproverType $CONTACT;
    private static ApproverType $ROLE;
    private static ApproverType $DEFAULT;

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

    public static function CONTACT(): ApproverType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new ApproverType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): ApproverType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new ApproverType('role');
        }
        return self::$ROLE;
    }
    public static function DEFAULT(): ApproverType
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ApproverType('default');
        }
        return self::$DEFAULT;
    }
}