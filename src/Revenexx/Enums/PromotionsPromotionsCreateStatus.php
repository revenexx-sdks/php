<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PromotionsPromotionsCreateStatus implements JsonSerializable
{
    private static PromotionsPromotionsCreateStatus $DRAFT;
    private static PromotionsPromotionsCreateStatus $ACTIVE;
    private static PromotionsPromotionsCreateStatus $PAUSED;
    private static PromotionsPromotionsCreateStatus $ARCHIVED;

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

    public static function DRAFT(): PromotionsPromotionsCreateStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new PromotionsPromotionsCreateStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function ACTIVE(): PromotionsPromotionsCreateStatus
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new PromotionsPromotionsCreateStatus('active');
        }
        return self::$ACTIVE;
    }
    public static function PAUSED(): PromotionsPromotionsCreateStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new PromotionsPromotionsCreateStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ARCHIVED(): PromotionsPromotionsCreateStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new PromotionsPromotionsCreateStatus('archived');
        }
        return self::$ARCHIVED;
    }
}