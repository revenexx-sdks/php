<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnIpStatus implements JsonSerializable
{
    private static ColumnIpStatus $AVAILABLE;
    private static ColumnIpStatus $PROCESSING;
    private static ColumnIpStatus $DELETING;
    private static ColumnIpStatus $STUCK;
    private static ColumnIpStatus $FAILED;

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

    public static function AVAILABLE(): ColumnIpStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnIpStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnIpStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnIpStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnIpStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnIpStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnIpStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnIpStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnIpStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnIpStatus('failed');
        }
        return self::$FAILED;
    }
}