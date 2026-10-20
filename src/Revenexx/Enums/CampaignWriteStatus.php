<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignWriteStatus implements JsonSerializable
{
    private static CampaignWriteStatus $DRAFT;
    private static CampaignWriteStatus $ACTIVE;
    private static CampaignWriteStatus $COMPLETED;
    private static CampaignWriteStatus $ARCHIVED;

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

    public static function DRAFT(): CampaignWriteStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new CampaignWriteStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): CampaignWriteStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CampaignWriteStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function COMPLETED(): CampaignWriteStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new CampaignWriteStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function ARCHIVED(): CampaignWriteStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new CampaignWriteStatus('archived');
        }
        return self::$ARCHIVED;
    }
}