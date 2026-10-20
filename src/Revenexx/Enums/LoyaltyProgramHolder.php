<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramHolder implements JsonSerializable
{
    private static LoyaltyProgramHolder $CONTACT;
    private static LoyaltyProgramHolder $ORGANIZATION;

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

    public static function CONTACT(): LoyaltyProgramHolder
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new LoyaltyProgramHolder('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): LoyaltyProgramHolder
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new LoyaltyProgramHolder('organization');
        }
        return self::$ORGANIZATION;
    }
}