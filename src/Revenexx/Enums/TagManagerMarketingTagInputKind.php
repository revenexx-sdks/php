<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerMarketingTagInputKind implements JsonSerializable
{
    private static TagManagerMarketingTagInputKind $REGISTRY;
    private static TagManagerMarketingTagInputKind $SCRIPT;

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

    public static function REGISTRY(): TagManagerMarketingTagInputKind
    {
        if (!isset(self::$REGISTRY)) {
            self::$REGISTRY = new TagManagerMarketingTagInputKind('registry');
        }
        return self::$REGISTRY;
    }
    public static function SCRIPT(): TagManagerMarketingTagInputKind
    {
        if (!isset(self::$SCRIPT)) {
            self::$SCRIPT = new TagManagerMarketingTagInputKind('script');
        }
        return self::$SCRIPT;
    }
}