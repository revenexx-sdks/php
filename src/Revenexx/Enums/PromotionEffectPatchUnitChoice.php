<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectPatchUnitChoice implements JsonSerializable
{
    private static PromotionEffectPatchUnitChoice $CHEAPEST;
    private static PromotionEffectPatchUnitChoice $DEAREST;
    private static PromotionEffectPatchUnitChoice $POSITION;
    private static PromotionEffectPatchUnitChoice $ALL;

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

    public static function CHEAPEST(): PromotionEffectPatchUnitChoice
    {
        if (!isset(self::$CHEAPEST)) {
            self::$CHEAPEST = new PromotionEffectPatchUnitChoice('cheapest');
        }
        return self::$CHEAPEST;
    }
    public static function DEAREST(): PromotionEffectPatchUnitChoice
    {
        if (!isset(self::$DEAREST)) {
            self::$DEAREST = new PromotionEffectPatchUnitChoice('dearest');
        }
        return self::$DEAREST;
    }
    public static function POSITION(): PromotionEffectPatchUnitChoice
    {
        if (!isset(self::$POSITION)) {
            self::$POSITION = new PromotionEffectPatchUnitChoice('position');
        }
        return self::$POSITION;
    }
    public static function ALL(): PromotionEffectPatchUnitChoice
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionEffectPatchUnitChoice('all');
        }
        return self::$ALL;
    }
}