<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductLabelSource implements JsonSerializable
{
    private static ProductLabelSource $COMMON;
    private static ProductLabelSource $LOCALESPECIFIC;
    private static ProductLabelSource $CHANNELSPECIFIC;
    private static ProductLabelSource $CHANNELLOCALESPECIFIC;
    private static ProductLabelSource $SKU;

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

    public static function COMMON(): ProductLabelSource
    {
        if (!isset(self::$COMMON)) {
            self::$COMMON = new ProductLabelSource('common');
        }
        return self::$COMMON;
    }
    public static function LOCALESPECIFIC(): ProductLabelSource
    {
        if (!isset(self::$LOCALESPECIFIC)) {
            self::$LOCALESPECIFIC = new ProductLabelSource('locale_specific');
        }
        return self::$LOCALESPECIFIC;
    }
    public static function CHANNELSPECIFIC(): ProductLabelSource
    {
        if (!isset(self::$CHANNELSPECIFIC)) {
            self::$CHANNELSPECIFIC = new ProductLabelSource('channel_specific');
        }
        return self::$CHANNELSPECIFIC;
    }
    public static function CHANNELLOCALESPECIFIC(): ProductLabelSource
    {
        if (!isset(self::$CHANNELLOCALESPECIFIC)) {
            self::$CHANNELLOCALESPECIFIC = new ProductLabelSource('channel_locale_specific');
        }
        return self::$CHANNELLOCALESPECIFIC;
    }
    public static function SKU(): ProductLabelSource
    {
        if (!isset(self::$SKU)) {
            self::$SKU = new ProductLabelSource('sku');
        }
        return self::$SKU;
    }
}