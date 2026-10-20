<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Holder implements JsonSerializable
{
    private static Holder $CONTACT;
    private static Holder $ORGANIZATION;

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

    public static function CONTACT(): Holder
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new Holder('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): Holder
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new Holder('organization');
        }
        return self::$ORGANIZATION;
    }
}