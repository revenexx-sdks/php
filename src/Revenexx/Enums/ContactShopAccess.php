<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactShopAccess implements JsonSerializable
{
    private static ContactShopAccess $CANORDER;
    private static ContactShopAccess $INVITED;
    private static ContactShopAccess $PENDING;
    private static ContactShopAccess $BLOCKED;
    private static ContactShopAccess $NONE;

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

    public static function CANORDER(): ContactShopAccess
    {
        if (!isset(self::$CANORDER)) {
            self::$CANORDER = new ContactShopAccess('can_order');
        }
        return self::$CANORDER;
    }
    public static function INVITED(): ContactShopAccess
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new ContactShopAccess('invited');
        }
        return self::$INVITED;
    }
    public static function PENDING(): ContactShopAccess
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactShopAccess('pending');
        }
        return self::$PENDING;
    }
    public static function BLOCKED(): ContactShopAccess
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ContactShopAccess('blocked');
        }
        return self::$BLOCKED;
    }
    public static function NONE(): ContactShopAccess
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ContactShopAccess('none');
        }
        return self::$NONE;
    }
}