<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyStatus implements JsonSerializable
{
    private static JourneyStatus $DRAFT;
    private static JourneyStatus $LIVE;
    private static JourneyStatus $PAUSED;
    private static JourneyStatus $ARCHIVED;

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

    public static function DRAFT(): JourneyStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new JourneyStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function LIVE(): JourneyStatus
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new JourneyStatus('live');
        }
        return self::$LIVE;
    }
    public static function PAUSED(): JourneyStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new JourneyStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function ARCHIVED(): JourneyStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new JourneyStatus('archived');
        }
        return self::$ARCHIVED;
    }
}