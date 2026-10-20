<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramWriteHolder implements JsonSerializable
{
    private static LoyaltyProgramWriteHolder $CONTACT;
    private static LoyaltyProgramWriteHolder $ORGANIZATION;

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

    public static function CONTACT(): LoyaltyProgramWriteHolder
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new LoyaltyProgramWriteHolder('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): LoyaltyProgramWriteHolder
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new LoyaltyProgramWriteHolder('organization');
        }
        return self::$ORGANIZATION;
    }
}