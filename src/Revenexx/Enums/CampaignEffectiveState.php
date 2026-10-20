<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignEffectiveState implements JsonSerializable
{
    private static CampaignEffectiveState $DRAFT;
    private static CampaignEffectiveState $PLANNED;
    private static CampaignEffectiveState $RUNNING;
    private static CampaignEffectiveState $ENDED;
    private static CampaignEffectiveState $ARCHIVED;

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

    public static function DRAFT(): CampaignEffectiveState
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new CampaignEffectiveState('draft');
        }
        return self::$DRAFT;
    }
    public static function PLANNED(): CampaignEffectiveState
    {
        if (!isset(self::$PLANNED)) {
            self::$PLANNED = new CampaignEffectiveState('planned');
        }
        return self::$PLANNED;
    }
    public static function RUNNING(): CampaignEffectiveState
    {
        if (!isset(self::$RUNNING)) {
            self::$RUNNING = new CampaignEffectiveState('running');
        }
        return self::$RUNNING;
    }
    public static function ENDED(): CampaignEffectiveState
    {
        if (!isset(self::$ENDED)) {
            self::$ENDED = new CampaignEffectiveState('ended');
        }
        return self::$ENDED;
    }
    public static function ARCHIVED(): CampaignEffectiveState
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new CampaignEffectiveState('archived');
        }
        return self::$ARCHIVED;
    }
}