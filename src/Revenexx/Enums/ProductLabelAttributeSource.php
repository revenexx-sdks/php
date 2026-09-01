<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductLabelAttributeSource implements JsonSerializable
{
    private static ProductLabelAttributeSource $FAMILY;
    private static ProductLabelAttributeSource $SETTING;
    private static ProductLabelAttributeSource $CONVENTION;

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

    public static function FAMILY(): ProductLabelAttributeSource
    {
        if (!isset(self::$FAMILY)) {
            self::$FAMILY = new ProductLabelAttributeSource('family');
        }
        return self::$FAMILY;
    }
    public static function SETTING(): ProductLabelAttributeSource
    {
        if (!isset(self::$SETTING)) {
            self::$SETTING = new ProductLabelAttributeSource('setting');
        }
        return self::$SETTING;
    }
    public static function CONVENTION(): ProductLabelAttributeSource
    {
        if (!isset(self::$CONVENTION)) {
            self::$CONVENTION = new ProductLabelAttributeSource('convention');
        }
        return self::$CONVENTION;
    }
}