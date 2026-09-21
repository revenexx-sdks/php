<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsGroupsCreateMode implements JsonSerializable
{
    private static PromotionsGroupsCreateMode $STACK;
    private static PromotionsGroupsCreateMode $HIGHESTVALUE;
    private static PromotionsGroupsCreateMode $FIRSTMATCH;

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

    public static function STACK(): PromotionsGroupsCreateMode
    {
        if (!isset(self::$STACK)) {
            self::$STACK = new PromotionsGroupsCreateMode('stack');
        }
        return self::$STACK;
    }
    public static function HIGHESTVALUE(): PromotionsGroupsCreateMode
    {
        if (!isset(self::$HIGHESTVALUE)) {
            self::$HIGHESTVALUE = new PromotionsGroupsCreateMode('highest_value');
        }
        return self::$HIGHESTVALUE;
    }
    public static function FIRSTMATCH(): PromotionsGroupsCreateMode
    {
        if (!isset(self::$FIRSTMATCH)) {
            self::$FIRSTMATCH = new PromotionsGroupsCreateMode('first_match');
        }
        return self::$FIRSTMATCH;
    }
}