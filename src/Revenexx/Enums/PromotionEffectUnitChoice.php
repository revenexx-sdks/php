<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectUnitChoice implements JsonSerializable
{
    private static PromotionEffectUnitChoice $CHEAPEST;
    private static PromotionEffectUnitChoice $DEAREST;
    private static PromotionEffectUnitChoice $POSITION;
    private static PromotionEffectUnitChoice $ALL;

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

    public static function CHEAPEST(): PromotionEffectUnitChoice
    {
        if (!isset(self::$CHEAPEST)) {
            self::$CHEAPEST = new PromotionEffectUnitChoice('cheapest');
        }
        return self::$CHEAPEST;
    }
    public static function DEAREST(): PromotionEffectUnitChoice
    {
        if (!isset(self::$DEAREST)) {
            self::$DEAREST = new PromotionEffectUnitChoice('dearest');
        }
        return self::$DEAREST;
    }
    public static function POSITION(): PromotionEffectUnitChoice
    {
        if (!isset(self::$POSITION)) {
            self::$POSITION = new PromotionEffectUnitChoice('position');
        }
        return self::$POSITION;
    }
    public static function ALL(): PromotionEffectUnitChoice
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionEffectUnitChoice('all');
        }
        return self::$ALL;
    }
}