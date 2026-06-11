<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributePointStatus implements JsonSerializable
{
    private static AttributePointStatus $AVAILABLE;
    private static AttributePointStatus $PROCESSING;
    private static AttributePointStatus $DELETING;
    private static AttributePointStatus $STUCK;
    private static AttributePointStatus $FAILED;

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

    public static function AVAILABLE(): AttributePointStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributePointStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributePointStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributePointStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributePointStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributePointStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributePointStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributePointStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributePointStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributePointStatus('failed');
        }
        return self::$FAILED;
    }
}