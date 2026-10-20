<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShopAccess implements JsonSerializable
{
    private static ShopAccess $CANORDER;
    private static ShopAccess $INVITED;
    private static ShopAccess $PENDING;
    private static ShopAccess $BLOCKED;
    private static ShopAccess $NONE;

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

    public static function CANORDER(): ShopAccess
    {
        if (!isset(self::$CANORDER)) {
            self::$CANORDER = new ShopAccess('can_order');
        }
        return self::$CANORDER;
    }
    public static function INVITED(): ShopAccess
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new ShopAccess('invited');
        }
        return self::$INVITED;
    }
    public static function PENDING(): ShopAccess
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ShopAccess('pending');
        }
        return self::$PENDING;
    }
    public static function BLOCKED(): ShopAccess
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ShopAccess('blocked');
        }
        return self::$BLOCKED;
    }
    public static function NONE(): ShopAccess
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ShopAccess('none');
        }
        return self::$NONE;
    }
}