<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerTriggerKind implements JsonSerializable
{
    private static TagManagerTriggerKind $PAGEVIEW;
    private static TagManagerTriggerKind $THEMEEVENT;

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

    public static function PAGEVIEW(): TagManagerTriggerKind
    {
        if (!isset(self::$PAGEVIEW)) {
            self::$PAGEVIEW = new TagManagerTriggerKind('page_view');
        }
        return self::$PAGEVIEW;
    }
    public static function THEMEEVENT(): TagManagerTriggerKind
    {
        if (!isset(self::$THEMEEVENT)) {
            self::$THEMEEVENT = new TagManagerTriggerKind('theme_event');
        }
        return self::$THEMEEVENT;
    }
}