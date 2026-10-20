<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionDeleteResultStatus implements JsonSerializable
{
    private static PromotionDeleteResultStatus $TRASHED;
    private static PromotionDeleteResultStatus $DELETED;

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

    public static function TRASHED(): PromotionDeleteResultStatus
    {
        if (!isset(self::$TRASHED)) {
            self::$TRASHED = new PromotionDeleteResultStatus('trashed');
        }
        return self::$TRASHED;
    }
    public static function DELETED(): PromotionDeleteResultStatus
    {
        if (!isset(self::$DELETED)) {
            self::$DELETED = new PromotionDeleteResultStatus('deleted');
        }
        return self::$DELETED;
    }
}