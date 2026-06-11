<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributeFloatStatus implements JsonSerializable
{
    private static AttributeFloatStatus $AVAILABLE;
    private static AttributeFloatStatus $PROCESSING;
    private static AttributeFloatStatus $DELETING;
    private static AttributeFloatStatus $STUCK;
    private static AttributeFloatStatus $FAILED;

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

    public static function AVAILABLE(): AttributeFloatStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeFloatStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeFloatStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeFloatStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeFloatStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeFloatStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeFloatStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeFloatStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeFloatStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeFloatStatus('failed');
        }
        return self::$FAILED;
    }
}