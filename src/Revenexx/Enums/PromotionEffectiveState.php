<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionEffectiveState implements JsonSerializable
{
    private static PromotionEffectiveState $DRAFT;
    private static PromotionEffectiveState $SCHEDULED;
    private static PromotionEffectiveState $RUNNING;
    private static PromotionEffectiveState $PAUSED;
    private static PromotionEffectiveState $EXPIRED;
    private static PromotionEffectiveState $ARCHIVED;

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

    public static function DRAFT(): PromotionEffectiveState
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PromotionEffectiveState('draft');
        }
        return self::$DRAFT;
    }
    public static function SCHEDULED(): PromotionEffectiveState
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new PromotionEffectiveState('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function RUNNING(): PromotionEffectiveState
    {
        if (!isset(self::$RUNNING)) {
            self::$RUNNING = new PromotionEffectiveState('running');
        }
        return self::$RUNNING;
    }
    public static function PAUSED(): PromotionEffectiveState
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new PromotionEffectiveState('paused');
        }
        return self::$PAUSED;
    }
    public static function EXPIRED(): PromotionEffectiveState
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new PromotionEffectiveState('expired');
        }
        return self::$EXPIRED;
    }
    public static function ARCHIVED(): PromotionEffectiveState
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PromotionEffectiveState('archived');
        }
        return self::$ARCHIVED;
    }
}