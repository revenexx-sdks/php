<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BannerDraftUpdateRequestLayout implements JsonSerializable
{
    private static BannerDraftUpdateRequestLayout $BOX;
    private static BannerDraftUpdateRequestLayout $BAR;
    private static BannerDraftUpdateRequestLayout $MODAL;

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

    public static function BOX(): BannerDraftUpdateRequestLayout
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new BannerDraftUpdateRequestLayout('box');
        }
        return self::$BOX;
    }
    public static function BAR(): BannerDraftUpdateRequestLayout
    {
        if (!isset(self::$BAR)) {
            self::$BAR = new BannerDraftUpdateRequestLayout('bar');
        }
        return self::$BAR;
    }
    public static function MODAL(): BannerDraftUpdateRequestLayout
    {
        if (!isset(self::$MODAL)) {
            self::$MODAL = new BannerDraftUpdateRequestLayout('modal');
        }
        return self::$MODAL;
    }
}