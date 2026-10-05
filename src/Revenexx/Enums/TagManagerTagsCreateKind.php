<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerTagsCreateKind implements JsonSerializable
{
    private static TagManagerTagsCreateKind $REGISTRY;
    private static TagManagerTagsCreateKind $SCRIPT;

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

    public static function REGISTRY(): TagManagerTagsCreateKind
    {
        if (!isset(self::$REGISTRY)) {
            self::$REGISTRY = new TagManagerTagsCreateKind('registry');
        }
        return self::$REGISTRY;
    }
    public static function SCRIPT(): TagManagerTagsCreateKind
    {
        if (!isset(self::$SCRIPT)) {
            self::$SCRIPT = new TagManagerTagsCreateKind('script');
        }
        return self::$SCRIPT;
    }
}