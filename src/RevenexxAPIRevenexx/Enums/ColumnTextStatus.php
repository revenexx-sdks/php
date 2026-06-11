<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ColumnTextStatus implements JsonSerializable
{
    private static ColumnTextStatus $AVAILABLE;
    private static ColumnTextStatus $PROCESSING;
    private static ColumnTextStatus $DELETING;
    private static ColumnTextStatus $STUCK;
    private static ColumnTextStatus $FAILED;

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

    public static function AVAILABLE(): ColumnTextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnTextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnTextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnTextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnTextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnTextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnTextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnTextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnTextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnTextStatus('failed');
        }
        return self::$FAILED;
    }
}