<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ResourceType implements JsonSerializable
{
    private static ResourceType $TEMPLATE;
    private static ResourceType $LAYOUT;
    private static ResourceType $SUPPRESSION;

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

    public static function TEMPLATE(): ResourceType
    {
        if (!isset(self::$TEMPLATE)) {
            self::$TEMPLATE = new ResourceType('template');
        }
        return self::$TEMPLATE;
    }
    public static function LAYOUT(): ResourceType
    {
        if (!isset(self::$LAYOUT)) {
            self::$LAYOUT = new ResourceType('layout');
        }
        return self::$LAYOUT;
    }
    public static function SUPPRESSION(): ResourceType
    {
        if (!isset(self::$SUPPRESSION)) {
            self::$SUPPRESSION = new ResourceType('suppression');
        }
        return self::$SUPPRESSION;
    }
}