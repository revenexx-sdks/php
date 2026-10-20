<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleResultShopAccess implements JsonSerializable
{
    private static ContactLifecycleResultShopAccess $CANORDER;
    private static ContactLifecycleResultShopAccess $INVITED;
    private static ContactLifecycleResultShopAccess $PENDING;
    private static ContactLifecycleResultShopAccess $BLOCKED;
    private static ContactLifecycleResultShopAccess $NONE;

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

    public static function CANORDER(): ContactLifecycleResultShopAccess
    {
        if (!isset(self::$CANORDER)) {
            self::$CANORDER = new ContactLifecycleResultShopAccess('can_order');
        }
        return self::$CANORDER;
    }
    public static function INVITED(): ContactLifecycleResultShopAccess
    {
        if (!isset(self::$INVITED)) {
            self::$INVITED = new ContactLifecycleResultShopAccess('invited');
        }
        return self::$INVITED;
    }
    public static function PENDING(): ContactLifecycleResultShopAccess
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ContactLifecycleResultShopAccess('pending');
        }
        return self::$PENDING;
    }
    public static function BLOCKED(): ContactLifecycleResultShopAccess
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ContactLifecycleResultShopAccess('blocked');
        }
        return self::$BLOCKED;
    }
    public static function NONE(): ContactLifecycleResultShopAccess
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ContactLifecycleResultShopAccess('none');
        }
        return self::$NONE;
    }
}