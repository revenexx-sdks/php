<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class CartIoDirection implements JsonSerializable
{
    private static CartIoDirection $IMPORT;
    private static CartIoDirection $EXPORT;

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

    public static function IMPORT(): CartIoDirection
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new CartIoDirection('import');
        }
        return self::$IMPORT;
    }
    public static function EXPORT(): CartIoDirection
    {
        if (!isset(self::$EXPORT)) {
            self::$EXPORT = new CartIoDirection('export');
        }
        return self::$EXPORT;
    }
}