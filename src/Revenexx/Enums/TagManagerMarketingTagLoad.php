<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerMarketingTagLoad implements JsonSerializable
{
    private static TagManagerMarketingTagLoad $IMMEDIATE;
    private static TagManagerMarketingTagLoad $IDLE;
    private static TagManagerMarketingTagLoad $INTERACTION;

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

    public static function IMMEDIATE(): TagManagerMarketingTagLoad
    {
        if (!isset(self::$IMMEDIATE)) {
            self::$IMMEDIATE = new TagManagerMarketingTagLoad('immediate');
        }
        return self::$IMMEDIATE;
    }
    public static function IDLE(): TagManagerMarketingTagLoad
    {
        if (!isset(self::$IDLE)) {
            self::$IDLE = new TagManagerMarketingTagLoad('idle');
        }
        return self::$IDLE;
    }
    public static function INTERACTION(): TagManagerMarketingTagLoad
    {
        if (!isset(self::$INTERACTION)) {
            self::$INTERACTION = new TagManagerMarketingTagLoad('interaction');
        }
        return self::$INTERACTION;
    }
}