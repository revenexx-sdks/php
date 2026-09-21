<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Allocation implements JsonSerializable
{
    private static Allocation $BESTFORBUYER;
    private static Allocation $CARTORDER;

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

    public static function BESTFORBUYER(): Allocation
    {
        if (!isset(self::$BESTFORBUYER)) {
            self::$BESTFORBUYER = new Allocation('best_for_buyer');
        }
        return self::$BESTFORBUYER;
    }
    public static function CARTORDER(): Allocation
    {
        if (!isset(self::$CARTORDER)) {
            self::$CARTORDER = new Allocation('cart_order');
        }
        return self::$CARTORDER;
    }
}