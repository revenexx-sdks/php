<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnMediumtextStatus implements JsonSerializable
{
    private static ColumnMediumtextStatus $AVAILABLE;
    private static ColumnMediumtextStatus $PROCESSING;
    private static ColumnMediumtextStatus $DELETING;
    private static ColumnMediumtextStatus $STUCK;
    private static ColumnMediumtextStatus $FAILED;

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

    public static function AVAILABLE(): ColumnMediumtextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnMediumtextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnMediumtextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnMediumtextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnMediumtextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnMediumtextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnMediumtextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnMediumtextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnMediumtextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnMediumtextStatus('failed');
        }
        return self::$FAILED;
    }
}