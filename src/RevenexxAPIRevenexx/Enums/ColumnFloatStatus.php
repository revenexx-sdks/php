<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ColumnFloatStatus implements JsonSerializable
{
    private static ColumnFloatStatus $AVAILABLE;
    private static ColumnFloatStatus $PROCESSING;
    private static ColumnFloatStatus $DELETING;
    private static ColumnFloatStatus $STUCK;
    private static ColumnFloatStatus $FAILED;

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

    public static function AVAILABLE(): ColumnFloatStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnFloatStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnFloatStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnFloatStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnFloatStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnFloatStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnFloatStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnFloatStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnFloatStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnFloatStatus('failed');
        }
        return self::$FAILED;
    }
}