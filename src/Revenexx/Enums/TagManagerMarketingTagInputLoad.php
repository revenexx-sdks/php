<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerMarketingTagInputLoad implements JsonSerializable
{
    private static TagManagerMarketingTagInputLoad $IMMEDIATE;
    private static TagManagerMarketingTagInputLoad $IDLE;
    private static TagManagerMarketingTagInputLoad $INTERACTION;

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

    public static function IMMEDIATE(): TagManagerMarketingTagInputLoad
    {
        if (!isset(self::$IMMEDIATE)) {
            self::$IMMEDIATE = new TagManagerMarketingTagInputLoad('immediate');
        }
        return self::$IMMEDIATE;
    }
    public static function IDLE(): TagManagerMarketingTagInputLoad
    {
        if (!isset(self::$IDLE)) {
            self::$IDLE = new TagManagerMarketingTagInputLoad('idle');
        }
        return self::$IDLE;
    }
    public static function INTERACTION(): TagManagerMarketingTagInputLoad
    {
        if (!isset(self::$INTERACTION)) {
            self::$INTERACTION = new TagManagerMarketingTagInputLoad('interaction');
        }
        return self::$INTERACTION;
    }
}