<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnLineStatus implements JsonSerializable
{
    private static ColumnLineStatus $AVAILABLE;
    private static ColumnLineStatus $PROCESSING;
    private static ColumnLineStatus $DELETING;
    private static ColumnLineStatus $STUCK;
    private static ColumnLineStatus $FAILED;

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

    public static function AVAILABLE(): ColumnLineStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnLineStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnLineStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnLineStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnLineStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnLineStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnLineStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnLineStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnLineStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnLineStatus('failed');
        }
        return self::$FAILED;
    }
}