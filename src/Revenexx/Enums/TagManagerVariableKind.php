<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerVariableKind implements JsonSerializable
{
    private static TagManagerVariableKind $EVENTFIELD;
    private static TagManagerVariableKind $CONSTANT;
    private static TagManagerVariableKind $PAGE;

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

    public static function EVENTFIELD(): TagManagerVariableKind
    {
        if (!isset(self::$EVENTFIELD)) {
            self::$EVENTFIELD = new TagManagerVariableKind('event_field');
        }
        return self::$EVENTFIELD;
    }
    public static function CONSTANT(): TagManagerVariableKind
    {
        if (!isset(self::$CONSTANT)) {
            self::$CONSTANT = new TagManagerVariableKind('constant');
        }
        return self::$CONSTANT;
    }
    public static function PAGE(): TagManagerVariableKind
    {
        if (!isset(self::$PAGE)) {
            self::$PAGE = new TagManagerVariableKind('page');
        }
        return self::$PAGE;
    }
}