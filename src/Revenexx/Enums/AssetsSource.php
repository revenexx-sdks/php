<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AssetsSource implements JsonSerializable
{
    private static AssetsSource $STORAGE;
    private static AssetsSource $EXTERNAL;

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

    public static function STORAGE(): AssetsSource
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new AssetsSource('storage');
        }
        return self::$STORAGE;
    }
    public static function EXTERNAL(): AssetsSource
    {
        if (!isset(self::$EXTERNAL)) {
            self::$EXTERNAL = new AssetsSource('external');
        }
        return self::$EXTERNAL;
    }
}