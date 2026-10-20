<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TrashStep implements JsonSerializable
{
    private static TrashStep $TRASHED;
    private static TrashStep $DELETED;

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

    public static function TRASHED(): TrashStep
    {
        if (!isset(self::$TRASHED)) {
            self::$TRASHED = new TrashStep('trashed');
        }
        return self::$TRASHED;
    }
    public static function DELETED(): TrashStep
    {
        if (!isset(self::$DELETED)) {
            self::$DELETED = new TrashStep('deleted');
        }
        return self::$DELETED;
    }
}