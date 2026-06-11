<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributeTextStatus implements JsonSerializable
{
    private static AttributeTextStatus $AVAILABLE;
    private static AttributeTextStatus $PROCESSING;
    private static AttributeTextStatus $DELETING;
    private static AttributeTextStatus $STUCK;
    private static AttributeTextStatus $FAILED;

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

    public static function AVAILABLE(): AttributeTextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeTextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeTextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeTextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeTextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeTextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeTextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeTextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeTextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeTextStatus('failed');
        }
        return self::$FAILED;
    }
}