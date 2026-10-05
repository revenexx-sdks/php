<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BannerDraftLayout implements JsonSerializable
{
    private static BannerDraftLayout $BOX;
    private static BannerDraftLayout $BAR;
    private static BannerDraftLayout $MODAL;

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

    public static function BOX(): BannerDraftLayout
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new BannerDraftLayout('box');
        }
        return self::$BOX;
    }
    public static function BAR(): BannerDraftLayout
    {
        if (!isset(self::$BAR)) {
            self::$BAR = new BannerDraftLayout('bar');
        }
        return self::$BAR;
    }
    public static function MODAL(): BannerDraftLayout
    {
        if (!isset(self::$MODAL)) {
            self::$MODAL = new BannerDraftLayout('modal');
        }
        return self::$MODAL;
    }
}