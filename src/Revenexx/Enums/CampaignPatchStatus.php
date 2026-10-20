<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CampaignPatchStatus implements JsonSerializable
{
    private static CampaignPatchStatus $DRAFT;
    private static CampaignPatchStatus $ACTIVE;
    private static CampaignPatchStatus $COMPLETED;
    private static CampaignPatchStatus $ARCHIVED;

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

    public static function DRAFT(): CampaignPatchStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new CampaignPatchStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): CampaignPatchStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new CampaignPatchStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function COMPLETED(): CampaignPatchStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new CampaignPatchStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function ARCHIVED(): CampaignPatchStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new CampaignPatchStatus('archived');
        }
        return self::$ARCHIVED;
    }
}