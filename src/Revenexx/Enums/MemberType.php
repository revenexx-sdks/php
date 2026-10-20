<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MemberType implements JsonSerializable
{
    private static MemberType $ORGANIZATION;
    private static MemberType $CONTACT;

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

    public static function ORGANIZATION(): MemberType
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new MemberType('organization');
        }
        return self::$ORGANIZATION;
    }
    public static function CONTACT(): MemberType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new MemberType('contact');
        }
        return self::$CONTACT;
    }
}