<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductChannelsAssignRequestMode implements JsonSerializable
{
    private static ProductChannelsAssignRequestMode $ADD;
    private static ProductChannelsAssignRequestMode $REMOVE;
    private static ProductChannelsAssignRequestMode $REPLACE;

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

    public static function ADD(): ProductChannelsAssignRequestMode
    {
        if (!isset(self::$ADD)) {
            self::$ADD = new ProductChannelsAssignRequestMode('add');
        }
        return self::$ADD;
    }
    public static function REMOVE(): ProductChannelsAssignRequestMode
    {
        if (!isset(self::$REMOVE)) {
            self::$REMOVE = new ProductChannelsAssignRequestMode('remove');
        }
        return self::$REMOVE;
    }
    public static function REPLACE(): ProductChannelsAssignRequestMode
    {
        if (!isset(self::$REPLACE)) {
            self::$REPLACE = new ProductChannelsAssignRequestMode('replace');
        }
        return self::$REPLACE;
    }
}