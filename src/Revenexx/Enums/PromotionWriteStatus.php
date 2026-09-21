<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionWriteStatus implements JsonSerializable
{
    private static PromotionWriteStatus $DRAFT;
    private static PromotionWriteStatus $ACTIVE;
    private static PromotionWriteStatus $PAUSED;
    private static PromotionWriteStatus $ARCHIVED;

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

    public static function DRAFT(): PromotionWriteStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PromotionWriteStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): PromotionWriteStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PromotionWriteStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): PromotionWriteStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new PromotionWriteStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ARCHIVED(): PromotionWriteStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PromotionWriteStatus('archived');
        }
        return self::$ARCHIVED;
    }
}