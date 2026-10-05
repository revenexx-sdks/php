<?php

namespace Revenexx\Enums;

use JsonSerializable;

class TagManagerTriggerInputKind implements JsonSerializable
{
    private static TagManagerTriggerInputKind $PAGEVIEW;
    private static TagManagerTriggerInputKind $THEMEEVENT;

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

    public static function PAGEVIEW(): TagManagerTriggerInputKind
    {
        if (!isset(self::$PAGEVIEW)) {
            self::$PAGEVIEW = new TagManagerTriggerInputKind('page_view');
        }
        return self::$PAGEVIEW;
    }
    public static function THEMEEVENT(): TagManagerTriggerInputKind
    {
        if (!isset(self::$THEMEEVENT)) {
            self::$THEMEEVENT = new TagManagerTriggerInputKind('theme_event');
        }
        return self::$THEMEEVENT;
    }
}