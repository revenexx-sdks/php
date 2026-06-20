<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class StoreAssetRequestVisibility implements JsonSerializable
{
    private static StoreAssetRequestVisibility $PUBLIC;
    private static StoreAssetRequestVisibility $PRIVATE;

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

    public static function PUBLIC(): StoreAssetRequestVisibility
    {
        if (!isset(self::$PUBLIC)) {
            self::$PUBLIC = new StoreAssetRequestVisibility('public');
        }
        return self::$PUBLIC;
    }
    public static function PRIVATE(): StoreAssetRequestVisibility
    {
        if (!isset(self::$PRIVATE)) {
            self::$PRIVATE = new StoreAssetRequestVisibility('private');
        }
        return self::$PRIVATE;
    }
}