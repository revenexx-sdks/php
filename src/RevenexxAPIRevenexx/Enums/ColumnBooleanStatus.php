<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class ColumnBooleanStatus implements JsonSerializable
{
    private static ColumnBooleanStatus $AVAILABLE;
    private static ColumnBooleanStatus $PROCESSING;
    private static ColumnBooleanStatus $DELETING;
    private static ColumnBooleanStatus $STUCK;
    private static ColumnBooleanStatus $FAILED;

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

    public static function AVAILABLE(): ColumnBooleanStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnBooleanStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnBooleanStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnBooleanStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnBooleanStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnBooleanStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnBooleanStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnBooleanStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnBooleanStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnBooleanStatus('failed');
        }
        return self::$FAILED;
    }
}