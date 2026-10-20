<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEndRequestWhen implements JsonSerializable
{
    private static PromotionEndRequestWhen $NOW;
    private static PromotionEndRequestWhen $AT;

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

    public static function NOW(): PromotionEndRequestWhen
    {
        if (!isset(self::$NOW)) {
            self::$NOW = new PromotionEndRequestWhen('now');
        }
        return self::$NOW;
    }
    public static function AT(): PromotionEndRequestWhen
    {
        if (!isset(self::$AT)) {
            self::$AT = new PromotionEndRequestWhen('at');
        }
        return self::$AT;
    }
}