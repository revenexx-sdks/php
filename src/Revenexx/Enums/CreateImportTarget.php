<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CreateImportTarget implements JsonSerializable
{
    private static CreateImportTarget $LIVE;
    private static CreateImportTarget $SHADOW;

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

    public static function LIVE(): CreateImportTarget
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new CreateImportTarget('live');
        }
        return self::$LIVE;
    }
    public static function SHADOW(): CreateImportTarget
    {
        if (!isset(self::$SHADOW)) {
            self::$SHADOW = new CreateImportTarget('shadow');
        }
        return self::$SHADOW;
    }
}