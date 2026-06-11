<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ColumnLongtextStatus implements JsonSerializable
{
    private static ColumnLongtextStatus $AVAILABLE;
    private static ColumnLongtextStatus $PROCESSING;
    private static ColumnLongtextStatus $DELETING;
    private static ColumnLongtextStatus $STUCK;
    private static ColumnLongtextStatus $FAILED;

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

    public static function AVAILABLE(): ColumnLongtextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnLongtextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnLongtextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnLongtextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnLongtextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnLongtextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnLongtextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnLongtextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnLongtextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnLongtextStatus('failed');
        }
        return self::$FAILED;
    }
}