<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerVariablesCreateKind implements JsonSerializable
{
    private static TagManagerVariablesCreateKind $EVENTFIELD;
    private static TagManagerVariablesCreateKind $CONSTANT;
    private static TagManagerVariablesCreateKind $PAGE;

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

    public static function EVENTFIELD(): TagManagerVariablesCreateKind
    {
        if (!isset(self::$EVENTFIELD)) {
            self::$EVENTFIELD = new TagManagerVariablesCreateKind('event_field');
        }
        return self::$EVENTFIELD;
    }
    public static function CONSTANT(): TagManagerVariablesCreateKind
    {
        if (!isset(self::$CONSTANT)) {
            self::$CONSTANT = new TagManagerVariablesCreateKind('constant');
        }
        return self::$CONSTANT;
    }
    public static function PAGE(): TagManagerVariablesCreateKind
    {
        if (!isset(self::$PAGE)) {
            self::$PAGE = new TagManagerVariablesCreateKind('page');
        }
        return self::$PAGE;
    }
}