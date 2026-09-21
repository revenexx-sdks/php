<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsBatchesCreateStatus implements JsonSerializable
{
    private static PromotionsBatchesCreateStatus $ACTIVE;
    private static PromotionsBatchesCreateStatus $DISABLED;

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

    public static function ACTIVE(): PromotionsBatchesCreateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PromotionsBatchesCreateStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function DISABLED(): PromotionsBatchesCreateStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new PromotionsBatchesCreateStatus('disabled');
        }
        return self::$DISABLED;
    }
}