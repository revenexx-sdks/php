<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnEmailStatus implements JsonSerializable
{
    private static ColumnEmailStatus $AVAILABLE;
    private static ColumnEmailStatus $PROCESSING;
    private static ColumnEmailStatus $DELETING;
    private static ColumnEmailStatus $STUCK;
    private static ColumnEmailStatus $FAILED;

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

    public static function AVAILABLE(): ColumnEmailStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnEmailStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnEmailStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnEmailStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnEmailStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnEmailStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnEmailStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnEmailStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnEmailStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnEmailStatus('failed');
        }
        return self::$FAILED;
    }
}