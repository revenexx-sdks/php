<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignsCampaignsCreateStatus implements JsonSerializable
{
    private static CampaignsCampaignsCreateStatus $DRAFT;
    private static CampaignsCampaignsCreateStatus $ACTIVE;
    private static CampaignsCampaignsCreateStatus $COMPLETED;
    private static CampaignsCampaignsCreateStatus $ARCHIVED;

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

    public static function DRAFT(): CampaignsCampaignsCreateStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new CampaignsCampaignsCreateStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): CampaignsCampaignsCreateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CampaignsCampaignsCreateStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function COMPLETED(): CampaignsCampaignsCreateStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new CampaignsCampaignsCreateStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function ARCHIVED(): CampaignsCampaignsCreateStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new CampaignsCampaignsCreateStatus('archived');
        }
        return self::$ARCHIVED;
    }
}