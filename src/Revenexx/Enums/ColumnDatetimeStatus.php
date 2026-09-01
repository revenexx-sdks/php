<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnDatetimeStatus implements JsonSerializable
{
    private static ColumnDatetimeStatus $AVAILABLE;
    private static ColumnDatetimeStatus $PROCESSING;
    private static ColumnDatetimeStatus $DELETING;
    private static ColumnDatetimeStatus $STUCK;
    private static ColumnDatetimeStatus $FAILED;

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

    public static function AVAILABLE(): ColumnDatetimeStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnDatetimeStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnDatetimeStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnDatetimeStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnDatetimeStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnDatetimeStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnDatetimeStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnDatetimeStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnDatetimeStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnDatetimeStatus('failed');
        }
        return self::$FAILED;
    }
}