<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ManufacturerProductKind implements JsonSerializable
{
    private static ManufacturerProductKind $SIMPLE;
    private static ManufacturerProductKind $MODEL;
    private static ManufacturerProductKind $VARIANT;

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

    public static function SIMPLE(): ManufacturerProductKind
    {
        if (!isset(self::$SIMPLE)) {
            self::$SIMPLE = new ManufacturerProductKind('simple');
        }
        return self::$SIMPLE;
    }
    public static function MODEL(): ManufacturerProductKind
    {
        if (!isset(self::$MODEL)) {
            self::$MODEL = new ManufacturerProductKind('model');
        }
        return self::$MODEL;
    }
    public static function VARIANT(): ManufacturerProductKind
    {
        if (!isset(self::$VARIANT)) {
            self::$VARIANT = new ManufacturerProductKind('variant');
        }
        return self::$VARIANT;
    }
}