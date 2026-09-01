<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartIoApplyMode implements JsonSerializable
{
    private static CartIoApplyMode $INSERT;
    private static CartIoApplyMode $APPEND;
    private static CartIoApplyMode $REPLACE;

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

    public static function INSERT(): CartIoApplyMode
    {
        if (!isset(self::$INSERT)) {
            self::$INSERT = new CartIoApplyMode('insert');
        }
        return self::$INSERT;
    }
    public static function APPEND(): CartIoApplyMode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new CartIoApplyMode('append');
        }
        return self::$APPEND;
    }
    public static function REPLACE(): CartIoApplyMode
    {
        if (!isset(self::$REPLACE)) {
            self::$REPLACE = new CartIoApplyMode('replace');
        }
        return self::$REPLACE;
    }
}