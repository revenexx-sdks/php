<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeDatetimeStatus implements JsonSerializable
{
    private static AttributeDatetimeStatus $AVAILABLE;
    private static AttributeDatetimeStatus $PROCESSING;
    private static AttributeDatetimeStatus $DELETING;
    private static AttributeDatetimeStatus $STUCK;
    private static AttributeDatetimeStatus $FAILED;

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

    public static function AVAILABLE(): AttributeDatetimeStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeDatetimeStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeDatetimeStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeDatetimeStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeDatetimeStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeDatetimeStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeDatetimeStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeDatetimeStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeDatetimeStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeDatetimeStatus('failed');
        }
        return self::$FAILED;
    }
}