<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ColumnRelationshipStatus implements JsonSerializable
{
    private static ColumnRelationshipStatus $AVAILABLE;
    private static ColumnRelationshipStatus $PROCESSING;
    private static ColumnRelationshipStatus $DELETING;
    private static ColumnRelationshipStatus $STUCK;
    private static ColumnRelationshipStatus $FAILED;

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

    public static function AVAILABLE(): ColumnRelationshipStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new ColumnRelationshipStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): ColumnRelationshipStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new ColumnRelationshipStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): ColumnRelationshipStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new ColumnRelationshipStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): ColumnRelationshipStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new ColumnRelationshipStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): ColumnRelationshipStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ColumnRelationshipStatus('failed');
        }
        return self::$FAILED;
    }
}