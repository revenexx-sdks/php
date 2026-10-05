<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssetStoreVisibility implements JsonSerializable
{
    private static AssetStoreVisibility $PUBLIC;
    private static AssetStoreVisibility $PRIVATE;

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

    public static function PUBLIC(): AssetStoreVisibility
    {
        if (!isset(self::$PUBLIC)) {
            self::$PUBLIC = new AssetStoreVisibility('public');
        }
        return self::$PUBLIC;
    }
    public static function PRIVATE(): AssetStoreVisibility
    {
        if (!isset(self::$PRIVATE)) {
            self::$PRIVATE = new AssetStoreVisibility('private');
        }
        return self::$PRIVATE;
    }
}