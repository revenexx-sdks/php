<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsChannelsAssignMode implements JsonSerializable
{
    private static ProductsChannelsAssignMode $ADD;
    private static ProductsChannelsAssignMode $REMOVE;
    private static ProductsChannelsAssignMode $REPLACE;

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

    public static function ADD(): ProductsChannelsAssignMode
    {
        if (!isset(self::$ADD)) {
            self::$ADD = new ProductsChannelsAssignMode('add');
        }
        return self::$ADD;
    }
    public static function REMOVE(): ProductsChannelsAssignMode
    {
        if (!isset(self::$REMOVE)) {
            self::$REMOVE = new ProductsChannelsAssignMode('remove');
        }
        return self::$REMOVE;
    }
    public static function REPLACE(): ProductsChannelsAssignMode
    {
        if (!isset(self::$REPLACE)) {
            self::$REPLACE = new ProductsChannelsAssignMode('replace');
        }
        return self::$REPLACE;
    }
}