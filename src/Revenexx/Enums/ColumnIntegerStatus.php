<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnIntegerStatus implements JsonSerializable
{
    private static ColumnIntegerStatus $AVAILABLE;
    private static ColumnIntegerStatus $PROCESSING;
    private static ColumnIntegerStatus $DELETING;
    private static ColumnIntegerStatus $STUCK;
    private static ColumnIntegerStatus $FAILED;

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

    public static function AVAILABLE(): ColumnIntegerStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnIntegerStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnIntegerStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnIntegerStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnIntegerStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnIntegerStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnIntegerStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnIntegerStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnIntegerStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnIntegerStatus('failed');
        }
        return self::$FAILED;
    }
}