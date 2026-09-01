<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnEnumStatus implements JsonSerializable
{
    private static ColumnEnumStatus $AVAILABLE;
    private static ColumnEnumStatus $PROCESSING;
    private static ColumnEnumStatus $DELETING;
    private static ColumnEnumStatus $STUCK;
    private static ColumnEnumStatus $FAILED;

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

    public static function AVAILABLE(): ColumnEnumStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnEnumStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnEnumStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnEnumStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnEnumStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnEnumStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnEnumStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnEnumStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnEnumStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnEnumStatus('failed');
        }
        return self::$FAILED;
    }
}