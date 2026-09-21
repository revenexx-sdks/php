<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionStatus implements JsonSerializable
{
    private static PromotionStatus $DRAFT;
    private static PromotionStatus $ACTIVE;
    private static PromotionStatus $PAUSED;
    private static PromotionStatus $ARCHIVED;

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

    public static function DRAFT(): PromotionStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PromotionStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): PromotionStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PromotionStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): PromotionStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new PromotionStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ARCHIVED(): PromotionStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PromotionStatus('archived');
        }
        return self::$ARCHIVED;
    }
}