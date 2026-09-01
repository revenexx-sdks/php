<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnPolygonStatus implements JsonSerializable
{
    private static ColumnPolygonStatus $AVAILABLE;
    private static ColumnPolygonStatus $PROCESSING;
    private static ColumnPolygonStatus $DELETING;
    private static ColumnPolygonStatus $STUCK;
    private static ColumnPolygonStatus $FAILED;

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

    public static function AVAILABLE(): ColumnPolygonStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnPolygonStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnPolygonStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnPolygonStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnPolygonStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnPolygonStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnPolygonStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnPolygonStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnPolygonStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnPolygonStatus('failed');
        }
        return self::$FAILED;
    }
}