<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnVarcharStatus implements JsonSerializable
{
    private static ColumnVarcharStatus $AVAILABLE;
    private static ColumnVarcharStatus $PROCESSING;
    private static ColumnVarcharStatus $DELETING;
    private static ColumnVarcharStatus $STUCK;
    private static ColumnVarcharStatus $FAILED;

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

    public static function AVAILABLE(): ColumnVarcharStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnVarcharStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnVarcharStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnVarcharStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnVarcharStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnVarcharStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnVarcharStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnVarcharStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnVarcharStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnVarcharStatus('failed');
        }
        return self::$FAILED;
    }
}