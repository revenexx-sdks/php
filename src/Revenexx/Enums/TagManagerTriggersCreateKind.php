<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerTriggersCreateKind implements JsonSerializable
{
    private static TagManagerTriggersCreateKind $PAGEVIEW;
    private static TagManagerTriggersCreateKind $THEMEEVENT;

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

    public static function PAGEVIEW(): TagManagerTriggersCreateKind
    {
        if (!isset(self::$PAGEVIEW)) {
            self::$PAGEVIEW = new TagManagerTriggersCreateKind('page_view');
        }
        return self::$PAGEVIEW;
    }
    public static function THEMEEVENT(): TagManagerTriggersCreateKind
    {
        if (!isset(self::$THEMEEVENT)) {
            self::$THEMEEVENT = new TagManagerTriggersCreateKind('theme_event');
        }
        return self::$THEMEEVENT;
    }
}