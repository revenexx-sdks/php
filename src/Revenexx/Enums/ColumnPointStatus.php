<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnPointStatus implements JsonSerializable
{
    private static ColumnPointStatus $AVAILABLE;
    private static ColumnPointStatus $PROCESSING;
    private static ColumnPointStatus $DELETING;
    private static ColumnPointStatus $STUCK;
    private static ColumnPointStatus $FAILED;

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

    public static function AVAILABLE(): ColumnPointStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnPointStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnPointStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnPointStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnPointStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnPointStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnPointStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnPointStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnPointStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnPointStatus('failed');
        }
        return self::$FAILED;
    }
}