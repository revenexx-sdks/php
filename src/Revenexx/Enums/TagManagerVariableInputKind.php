<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerVariableInputKind implements JsonSerializable
{
    private static TagManagerVariableInputKind $EVENTFIELD;
    private static TagManagerVariableInputKind $CONSTANT;
    private static TagManagerVariableInputKind $PAGE;

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

    public static function EVENTFIELD(): TagManagerVariableInputKind
    {
        if (!isset(self::$EVENTFIELD)) {
            self::$EVENTFIELD = new TagManagerVariableInputKind('event_field');
        }
        return self::$EVENTFIELD;
    }
    public static function CONSTANT(): TagManagerVariableInputKind
    {
        if (!isset(self::$CONSTANT)) {
            self::$CONSTANT = new TagManagerVariableInputKind('constant');
        }
        return self::$CONSTANT;
    }
    public static function PAGE(): TagManagerVariableInputKind
    {
        if (!isset(self::$PAGE)) {
            self::$PAGE = new TagManagerVariableInputKind('page');
        }
        return self::$PAGE;
    }
}