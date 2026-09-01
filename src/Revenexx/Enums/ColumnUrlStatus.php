<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnUrlStatus implements JsonSerializable
{
    private static ColumnUrlStatus $AVAILABLE;
    private static ColumnUrlStatus $PROCESSING;
    private static ColumnUrlStatus $DELETING;
    private static ColumnUrlStatus $STUCK;
    private static ColumnUrlStatus $FAILED;

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

    public static function AVAILABLE(): ColumnUrlStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnUrlStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnUrlStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnUrlStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnUrlStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnUrlStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnUrlStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnUrlStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnUrlStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnUrlStatus('failed');
        }
        return self::$FAILED;
    }
}