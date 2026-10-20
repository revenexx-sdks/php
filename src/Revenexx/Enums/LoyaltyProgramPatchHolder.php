<?php

namespace Revenexx\Enums;

use JsonSerializable;

class LoyaltyProgramPatchHolder implements JsonSerializable
{
    private static LoyaltyProgramPatchHolder $CONTACT;
    private static LoyaltyProgramPatchHolder $ORGANIZATION;

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

    public static function CONTACT(): LoyaltyProgramPatchHolder
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new LoyaltyProgramPatchHolder('contact');
        }
        return self::$CONTACT;
    }
    public static function ORGANIZATION(): LoyaltyProgramPatchHolder
    {
        if (!isset(self::$ORGANIZATION)) {
            self::$ORGANIZATION = new LoyaltyProgramPatchHolder('organization');
        }
        return self::$ORGANIZATION;
    }
}