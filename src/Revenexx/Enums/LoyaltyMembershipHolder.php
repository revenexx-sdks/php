<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyMembershipHolder implements JsonSerializable
{
    private static LoyaltyMembershipHolder $CONTACT;
    private static LoyaltyMembershipHolder $ORGANIZATION;

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

    public static function CONTACT(): LoyaltyMembershipHolder
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new LoyaltyMembershipHolder('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): LoyaltyMembershipHolder
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new LoyaltyMembershipHolder('organization');
        }
        return self::$ORGANIZATION;
    }
}