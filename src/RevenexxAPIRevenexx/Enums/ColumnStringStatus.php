<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ColumnStringStatus implements JsonSerializable
{
    private static ColumnStringStatus $AVAILABLE;
    private static ColumnStringStatus $PROCESSING;
    private static ColumnStringStatus $DELETING;
    private static ColumnStringStatus $STUCK;
    private static ColumnStringStatus $FAILED;

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

    public static function AVAILABLE(): ColumnStringStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnStringStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnStringStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnStringStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnStringStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnStringStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnStringStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnStringStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnStringStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnStringStatus('failed');
        }
        return self::$FAILED;
    }
}