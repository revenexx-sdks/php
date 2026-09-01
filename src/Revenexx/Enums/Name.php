<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Name implements JsonSerializable
{
    private static Name $IOAPPLYMODES;
    private static Name $IODIRECTIONS;
    private static Name $IOENTITIES;
    private static Name $IOFORMATS;
    private static Name $ITEMTYPES;
    private static Name $STATUSES;

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

    public static function IOAPPLYMODES(): Name
    {
        if (!isset(self::$IOAPPLYMODES)) {
            self::$IOAPPLYMODES = new Name('io-apply-modes');
        }
        return self::$IOAPPLYMODES;
    }
    public static function IODIRECTIONS(): Name
    {
        if (!isset(self::$IODIRECTIONS)) {
            self::$IODIRECTIONS = new Name('io-directions');
        }
        return self::$IODIRECTIONS;
    }
    public static function IOENTITIES(): Name
    {
        if (!isset(self::$IOENTITIES)) {
            self::$IOENTITIES = new Name('io-entities');
        }
        return self::$IOENTITIES;
    }
    public static function IOFORMATS(): Name
    {
        if (!isset(self::$IOFORMATS)) {
            self::$IOFORMATS = new Name('io-formats');
        }
        return self::$IOFORMATS;
    }
    public static function ITEMTYPES(): Name
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new Name('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function STATUSES(): Name
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new Name('statuses');
        }
        return self::$STATUSES;
    }
}