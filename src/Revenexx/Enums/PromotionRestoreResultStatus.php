<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionRestoreResultStatus implements JsonSerializable
{
    private static PromotionRestoreResultStatus $RESTORED;

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

    public static function RESTORED(): PromotionRestoreResultStatus
    {
        if (!isset(self::$RESTORED)) {
            self::$RESTORED = new PromotionRestoreResultStatus('restored');
        }
        return self::$RESTORED;
    }
}