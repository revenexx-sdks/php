<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectWriteUnitChoice implements JsonSerializable
{
    private static PromotionEffectWriteUnitChoice $CHEAPEST;
    private static PromotionEffectWriteUnitChoice $DEAREST;
    private static PromotionEffectWriteUnitChoice $POSITION;
    private static PromotionEffectWriteUnitChoice $ALL;

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

    public static function CHEAPEST(): PromotionEffectWriteUnitChoice
    {
        if (!isset(self::$CHEAPEST)) {
            self::$CHEAPEST = new PromotionEffectWriteUnitChoice('cheapest');
        }
        return self::$CHEAPEST;
    }
    public static function DEAREST(): PromotionEffectWriteUnitChoice
    {
        if (!isset(self::$DEAREST)) {
            self::$DEAREST = new PromotionEffectWriteUnitChoice('dearest');
        }
        return self::$DEAREST;
    }
    public static function POSITION(): PromotionEffectWriteUnitChoice
    {
        if (!isset(self::$POSITION)) {
            self::$POSITION = new PromotionEffectWriteUnitChoice('position');
        }
        return self::$POSITION;
    }
    public static function ALL(): PromotionEffectWriteUnitChoice
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new PromotionEffectWriteUnitChoice('all');
        }
        return self::$ALL;
    }
}