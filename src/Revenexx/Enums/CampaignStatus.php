<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignStatus implements JsonSerializable
{
    private static CampaignStatus $DRAFT;
    private static CampaignStatus $ACTIVE;
    private static CampaignStatus $COMPLETED;
    private static CampaignStatus $ARCHIVED;

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

    public static function DRAFT(): CampaignStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new CampaignStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): CampaignStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CampaignStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function COMPLETED(): CampaignStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new CampaignStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function ARCHIVED(): CampaignStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new CampaignStatus('archived');
        }
        return self::$ARCHIVED;
    }
}