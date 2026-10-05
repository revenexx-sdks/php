<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerMarketingTagKind implements JsonSerializable
{
    private static TagManagerMarketingTagKind $REGISTRY;
    private static TagManagerMarketingTagKind $SCRIPT;

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

    public static function REGISTRY(): TagManagerMarketingTagKind
    {
        if (!isset(self::$REGISTRY)) {
            self::$REGISTRY = new TagManagerMarketingTagKind('registry');
        }
        return self::$REGISTRY;
    }
    public static function SCRIPT(): TagManagerMarketingTagKind
    {
        if (!isset(self::$SCRIPT)) {
            self::$SCRIPT = new TagManagerMarketingTagKind('script');
        }
        return self::$SCRIPT;
    }
}