<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionPatchStatus implements JsonSerializable
{
    private static PromotionPatchStatus $DRAFT;
    private static PromotionPatchStatus $ACTIVE;
    private static PromotionPatchStatus $PAUSED;
    private static PromotionPatchStatus $ARCHIVED;

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

    public static function DRAFT(): PromotionPatchStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PromotionPatchStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): PromotionPatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PromotionPatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): PromotionPatchStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new PromotionPatchStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ARCHIVED(): PromotionPatchStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PromotionPatchStatus('archived');
        }
        return self::$ARCHIVED;
    }
}